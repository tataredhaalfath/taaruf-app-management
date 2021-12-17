<?php

namespace App\Http\Controllers\Counselor;

use App\Http\Controllers\Controller;
use App\Models\User\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CounselorConfigurController extends Controller
{
    public function index()
    {
        $profile = UserProfile::where('user_id', Auth::user()->id)->first();
        return view('pages.counselor.configure.index', [
            'profile' => $profile
        ]);
    }

    public function create()
    {
        return view('pages.counselor.configure.create');
    }
}
