<?php

namespace App\Http\Controllers\Counselor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Counselor\PendampinganRequest;
use App\Models\Counselor\Pendampingan;
use App\Models\User;
use App\Models\User\Taaruf;
use App\Models\User\UserProfile;
use Illuminate\Http\Request;

class TaarufCounselorController extends Controller
{
    public function index()
    {
        $taaruf_list = Taaruf::where('status', 'APPROVED')->paginate(15);

        return view('pages.counselor.taaruf.index', [
            'taaruf_list' => $taaruf_list,
        ]);
    }

    public function detail(Request $request, $id)
    {
        $taaruf = Taaruf::findOrFail($id);
        $user1 = User::findOrFail($taaruf->user_id_1);
        $user2 = User::findOrFail($taaruf->user_id_2);
        $profile1 = UserProfile::where('user_id', $user1->id)->first();
        $profile2 = UserProfile::where('user_id', $user2->id)->first();

        return view(
            'pages.counselor.taaruf.detail',
            [
                'id' => $id,
                'taaruf' => $taaruf,
                'user1' => $user1,
                'user2' => $user2,
                'profile1' => $profile1,
                'profile2' => $profile2,
            ]
        );
    }

    public function store(PendampinganRequest $request)
    {
        $data = $request->all();
        Pendampingan::create($data);
        return redirect()->route('counselor-pendampingan')->with('message', 'pendampian baru telah dibuat');
    }
}
