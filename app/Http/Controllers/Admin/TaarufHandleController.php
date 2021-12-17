<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User\TaarufTransaction;
use Illuminate\Http\Request;

class TaarufHandleController extends Controller
{
    public function index()
    {

        $taaruf_success = TaarufTransaction::where('status', 'melanjutkan')->paginate(15);
        $taaruf_fail = TaarufTransaction::where('status', 'membatalkan')->paginate(15);
        return  view('pages.admin.taaruf.index', [
            'taaruf_success' => $taaruf_success,
            'taaruf_fail' => $taaruf_fail,
        ]);
    }
}
