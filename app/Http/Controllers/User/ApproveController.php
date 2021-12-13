<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Taaruf;
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
        if ($taaruf->user_id_1 == Auth::user()->id || $taaruf->user_id_2 == Auth::user()->id) {
            return view('pages.user.approve.detail');
        }

        return redirect(404);
    }
}
