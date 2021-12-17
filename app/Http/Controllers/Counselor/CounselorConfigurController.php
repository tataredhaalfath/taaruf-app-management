<?php

namespace App\Http\Controllers\Counselor;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserProfileRequest;
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

    public function store(UserProfileRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/counselor/profile', 'public');

        UserProfile::create($data);
        return redirect()->route('counselor-configure');
    }

    public function edit()
    {
        $profile = UserProfile::where('user_id', Auth::user()->id)->first();
        return view('pages.counselor.configure.edit', [
            'profile' => $profile,
        ]);
    }
}
