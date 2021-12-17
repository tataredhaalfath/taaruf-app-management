<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class CounselorController extends Controller
{
    public function index()
    {
        $counselors = User::where('roles', 'COUNSELOR')->paginate(15);
        return view('pages.admin.counselor.index', [
            'counselors' => $counselors,
        ]);
    }

    public function create()
    {
        return view('pages.admin.counselor.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
        );
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'email_verified_at' => Date('Y-m-d h:i:sa'),
            'password' => Hash::make($request['password']),
            'roles' => $request['roles'],
            'status' => $request['status'],
        ]);

        return redirect()->route('admin-counselor')->with('status', 'Counsoler Berhasil Ditambah');
    }
}
