<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserProfileRequest;
use App\Models\User\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfigureController extends Controller
{
    public function index()
    {
        $profile = UserProfile::where('user_id', Auth::user()->id)->first();
        return view('pages.admin.configure.index', [
            'profile' => $profile
        ]);
    }

    public function create()
    {
        return view('pages.admin.configure.create');
    }

    public function store(UserProfileRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/admin/profile', 'public');

        UserProfile::create($data);
        return redirect()->route('admin-configure');
    }

    public function edit()
    {
        $profile = UserProfile::where('user_id', Auth::user()->id)->first();
        return view('pages.admin.configure.edit', [
            'profile' => $profile,
        ]);
    }

    public function update(UserProfileRequest $request)
    {
        $data = $request->all();
        if ($request->image) {
            // hapus file image lama
            unlink(public_path('storage/' . $data['old_image']));
            //masukan image baru
            $data['image'] = $request->file('image')->store('assets/admin/profile', 'public');
        }
        $profile = UserProfile::where('user_id', Auth::user()->id)->first();
        $profile->update($data);
        return redirect(route('admin-configure'));
    }
}
