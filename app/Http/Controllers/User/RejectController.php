<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Taaruf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RejectController extends Controller
{
    public function index()
    {
        //MENOLAK
        $menolak = Taaruf::where('user_id_1', Auth::user()->id)
            ->where('status', 'REJECTED')->paginate(15);

        //DITOLAK
        $ditolak = Taaruf::where('user_id_2', Auth::user()->id)
            ->where('status', 'REJECTED')->paginate(15);

        return view('pages.user.reject.index', [
            'menolak' => $menolak,
            'ditolak' => $ditolak,

        ]);
    }
}
