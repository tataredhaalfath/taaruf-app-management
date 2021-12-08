<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.user.approve.index');
    }
}
