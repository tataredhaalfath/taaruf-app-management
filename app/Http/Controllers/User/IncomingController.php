<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\UserAnswer;
use App\Models\User\UserQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomingController extends Controller
{
    public function index()
    {
        $question = UserQuestion::where('user_id', Auth::user()->id)->first();
        $incoming = null;
        if ($question) {
            $incoming = UserAnswer::where('uq_id', $question->id)->get();
        }
        return view('pages.user.incoming.index', [
            'incoming' => $incoming,
        ]);
    }
}
