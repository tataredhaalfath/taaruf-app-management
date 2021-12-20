<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\TaarufTransactionRequest;
use App\Models\Counselor\Pendampingan;
use App\Models\User;
use App\Models\User\Taaruf;
use App\Models\User\TaarufTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApproveController extends Controller
{
    public function index(Request $request)
    {
        $approve = Taaruf::where('user_id_1', Auth::user()->id)
            ->Where('status', 'APPROVED')
            ->orWhere(function ($query) {
                $query->where('user_id_2', Auth::user()->id)
                    ->where('status', 'APPROVED');
            })
            ->get();
        return view('pages.user.approve.index', [
            'approve' => $approve
        ]);
    }

    public function detail(Request $request, $id)
    {
        $taaruf = Taaruf::findOrFail($id);
        $myTransaction = TaarufTransaction::where('user_id', Auth::user()->id)->first();
        //mencari data transaction antar 2 pihak
        $transaction1 = TaarufTransaction::where('taaruf_id', $taaruf->id)
            ->where('user_id', $taaruf->user_id_1)->first();
        $transaction2 = TaarufTransaction::where('taaruf_id', $taaruf->id)
            ->where('user_id', $taaruf->user_id_2)->first();

        if ($taaruf->user_id_1 == Auth::user()->id || $taaruf->user_id_2 == Auth::user()->id) {
            return view('pages.user.approve.detail', [
                'taaruf' => $taaruf,
                'transaction1' => $transaction1,
                'transaction2' => $transaction2,
                'myTransaction' => $myTransaction,
            ]);
        }

        return redirect(404);
    }

    public function transaction(TaarufTransactionRequest $request)
    {
        $data = $request->all();
        TaarufTransaction::create($data);
        return redirect()->route('user-approve-detail', $data['taaruf_id']);
    }

    public function batal(Request $request)
    {
        $transaction1 = TaarufTransaction::findOrFail($request['transaction1'])->delete();
        $transaction2 = TaarufTransaction::findOrFail($request['transaction2'])->delete();
        $taaruf = Taaruf::findOrFail($request['taaruf_id']);
        $taaruf->status = 'REJECTED';
        $taaruf->update();
        $pendampingan = Pendampingan::where('taaruf_id', $request['taaruf_id'])->delete();
        return redirect()->route('user-reject');
    }
}
