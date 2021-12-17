<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
}
