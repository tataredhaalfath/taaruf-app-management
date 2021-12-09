<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Cv;
use App\Models\User\UserAnswer;
use App\Models\User\UserQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = User::all();
        $user = $user->find(Auth::user()->id);
        $question = UserQuestion::where('user_id', $user->id)->first();
        $taaruf_sent = UserAnswer::where('user_id', $user->id)->count();
        $incoming = 0;
        if ($question) {
            $incoming = UserAnswer::where('uq_id', $question->id)->count();
        }
        return view('pages.user.dashboard', [
            'user' => $user,
            'taaruf_sent' => $taaruf_sent,
            'incoming' => $incoming,
        ]);
    }
}
