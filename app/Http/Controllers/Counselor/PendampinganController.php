<?php

namespace App\Http\Controllers\Counselor;

use App\Http\Controllers\Controller;
use App\Models\Counselor\Pendampingan;
use App\Models\User;
use App\Models\User\Taaruf;
use App\Models\User\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendampinganController extends Controller
{
    public function index()
    {
        $pendampingan = Pendampingan::where('counselor', Auth::user()->id)->paginate(15);
        return view('pages.counselor.pendampingan.index', [
            'pendampingan' => $pendampingan,
        ]);
    }

    public function detail(Request $request, $id)
    {
        $Pendampingan = Pendampingan::findOrFail($id);
        $user1 = User::findOrFail($Pendampingan->user1);
        $user2 = User::findOrFail($Pendampingan->user2);
        $profile1 = UserProfile::where('user_id', $user1->id)->first();
        $profile2 = UserProfile::where('user_id', $user2->id)->first();
        return view(
            'pages.counselor.pendampingan.detail',
            [
                'id' => $id,
                'pendampingan' => $Pendampingan,
                'user1' => $user1,
                'user2' => $user2,
                'profile1' => $profile1,
                'profile2' => $profile2,
            ]
        );
    }
}
