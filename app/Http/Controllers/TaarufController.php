<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaarufController extends Controller
{
    public function index(Request $request)
    {
        // $myProfile = UserProfile::where('user_Id', Auth::user()->id)->first();
        // if ($myProfile->gender == 'P') {
        //     $profile = UserProfile::where('gender', 'L')->get();
        //     foreach ($profile as $p) {
        //         $users = User::Where('id', $profile->user_id)
        //             ->where('roles', 'USER')->where('status', 'ACTIVE')->orderByRaw('created_at DESC')->paginate(25);
        //     }
        // }
        // return view(
        //     'pages.taaruf',
        //     [
        //         // 'users' => $users,
        //     ]
        // );
        $users = User::where('roles', 'USER')->where('status', 'ACTIVE')->orderByRaw('created_at DESC')->paginate(25);
        return view(
            'pages.taaruf',
            [
                'users' => $users,
            ]
        );
    }
}
