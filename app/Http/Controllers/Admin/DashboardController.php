<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Pengajuan_Cv;
use App\Models\User\Taaruf;
use App\Models\User\TaarufTransaction;
use App\Models\User\UserAnswer;
use App\Models\User\UserQuestion;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $user = User::where('roles', 'USER')->count();
        $cv = Pengajuan_Cv::count();
        $user_active = User::where('roles', 'USER')
            ->where('status', 'ACTIVE')
            ->count();
        $user_pending = User::where('roles', 'USER')
            ->where('status', 'PENDING')
            ->count();
        $sent = UserAnswer::count();
        $approve = Taaruf::where('status', 'APPROVED')->count();
        $reject = Taaruf::where('status', 'REJECTED')->count();
        $sucess = TaarufTransaction::where('status', 'melanjutkan')->count();
        return  view('pages.admin.dashboard', [
            'user' => $user,
            'cv' => $cv,
            'user_active' => $user_active,
            'user_pending' => $user_pending,
            'sent' => $sent,
            'approve' => $approve,
            'reject' => $reject,
            'success' => $sucess,
        ]);
    }
}
