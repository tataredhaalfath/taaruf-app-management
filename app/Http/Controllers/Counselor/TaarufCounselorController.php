<?php

namespace App\Http\Controllers\Counselor;

use App\Http\Controllers\Controller;
use App\Models\User\Taaruf;
use Illuminate\Http\Request;

class TaarufCounselorController extends Controller
{
    public function index()
    {
        $taaruf_list = Taaruf::where('status', 'APPROVED')->paginate(15);

        return view('pages.counselor.taaruf.index', [
            'taaruf_list' => $taaruf_list,
        ]);
    }
}
