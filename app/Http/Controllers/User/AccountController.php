<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserProfileRequest;
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

    public function store_profile(UserProfileRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/user/profile', 'public');

        UserProfile::create($data);
        return redirect()->route('user-account');
    }

    public function edit_profile()
    {
        $profile = UserProfile::where('user_id', Auth::user()->id)->first();
        return view('pages.user.account.editprofile', [
            'profile' => $profile,
        ]);
    }

    public function update_profile(UserProfileRequest $request)
    {
        $data = $request->all();
        if ($request->image) {
            // hapus file image lama
            unlink(public_path('storage/' . $data['old_image']));
            //masukan image baru
            $data['image'] = $request->file('image')->store('assets/user/profile', 'public');
        }
        $profile = UserProfile::where('user_id', Auth::user()->id)->first();
        $profile->update($data);
        return redirect(route('user-account'));
    }
}
