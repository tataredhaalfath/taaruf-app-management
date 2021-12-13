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
        //MENERIMA
        $approve1 = Taaruf::where('user_id_1', Auth::user()->id)
            ->where('status', 'APPROVED')->first();
        //DITERIMA
        $approve2 = Taaruf::where('user_id_2', Auth::user()->id)
            ->where('status', 'APPROVED')->first();

        if ($approve1) {
            $approve2 = null;
            $user1 = User::findOrFail($approve1->user_id_1);
            $user2 = User::findOrFail($approve1->user_id_2);
            return view('pages.user.approve.index', [
                'approve1' => $approve1,
                'approve2' => $approve2,
                'user1' => $user1,
                'user2' => $user2,
            ]);
        } elseif ($approve2) {
            $approve1 = null;
            $user1 = User::findOrFail($approve2->user_id_1);
            $user2 = User::findOrFail($approve2->user_id_2);
            return view('pages.user.approve.index', [
                'approve1' => $approve1,
                'approve2' => $approve2,
                'user1' => $user1,
                'user2' => $user2,
            ]);
        } else {
            $approve1 = null;
            $approve2 = null;
            return view('pages.user.approve.index', [
                'approve1' => $approve1,
                'approve2' => $approve2,
            ]);
        }
    }
}
