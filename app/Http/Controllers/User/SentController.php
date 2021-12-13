<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\UserAnswer;
use App\Models\User\UserQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SentController extends Controller
{
    public function index()
    {
        $sent = UserAnswer::where('user_id', Auth::user()->id)->get();
        return view(
            'pages.user.sent.index',
            [
                'sent' => $sent
            ]
        );
    }
}
