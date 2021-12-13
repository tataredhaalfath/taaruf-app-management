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
}
