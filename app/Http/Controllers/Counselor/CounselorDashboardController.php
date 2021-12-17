<?php

namespace App\Http\Controllers\Counselor;

use App\Http\Controllers\Controller;
use App\Models\User\Taaruf;
use App\Models\User\TaarufTransaction;
use App\Models\User\UserAnswer;
use Illuminate\Http\Request;

class CounselorDashboardController extends Controller
{
    public function index()
    {
        $sent = UserAnswer::count();
        $approve = Taaruf::where('status', 'APPROVED')->count();
        $reject = Taaruf::where('status', 'REJECTED')->count();
        $sucess = TaarufTransaction::where('status', 'melanjutkan')->count();
        $fail = TaarufTransaction::where('status', 'membatalkan')->count();
        return  view('pages.cpunselor.dashboard', [
            'sent' => $sent,
            'approve' => $approve,
            'reject' => $reject,
            'success' => $sucess,
            'fail' => $fail,
        ]);
    }
}
