<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TaarufController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('roles', 'USER')->where('status', 'ACTIVE')->orderByRaw('created_at DESC')->paginate(25);
        return view(
            'pages.taaruf',
            [
                'users' => $users,
            ]
        );
    }
}
