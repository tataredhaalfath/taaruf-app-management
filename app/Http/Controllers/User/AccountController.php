<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        $profile = UserProfile::where('user_id', Auth::user()->id)->first();
        return view('pages.user.account.index', [
            'profile' => $profile
        ]);
    }

    public function profile()
    {
        return view('pages.user.account.profile');
    }
}
