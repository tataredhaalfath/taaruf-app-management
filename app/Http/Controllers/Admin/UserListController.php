<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function index()
    {
        $users = User::where('roles', 'USER')->orderByRaw('created_at DESC')->paginate(15);
        $user_active = User::where('roles', 'USER')->where('status', 'ACTIVE')->orderByRaw('updated_at DESC')->paginate(15);
        $user_pending = User::where('roles', 'USER')->where('status', 'PENDING')->orderByRaw('created_at DESC')->paginate(15);

        return view(
            'pages.admin.user.index',
            [
                'users' => $users,
                'user_active' => $user_active,
                'user_pending' => $user_pending,
            ]
        );
    }
}
