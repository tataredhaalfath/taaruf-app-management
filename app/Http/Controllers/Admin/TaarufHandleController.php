<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counselor\Pendampingan;
use App\Models\User;
use App\Models\User\Taaruf;
use App\Models\User\TaarufTransaction;
use App\Models\User\UserProfile;
use Illuminate\Http\Request;

class TaarufHandleController extends Controller
{
    public function index()
    {

        $taaruf_success = TaarufTransaction::where('status', 'melanjutkan')->get();
        $taaruf_fail = TaarufTransaction::where('status', 'membatalkan')->paginate(15);
        return  view('pages.admin.taaruf.index', [
            'taaruf_success' => $taaruf_success,
            'taaruf_fail' => $taaruf_fail,
        ]);
    }
    public function detail(Request $request, $id)
    {
        $taaruf = Taaruf::findOrFail($id);
        $user1 = User::findOrFail($taaruf->user_id_1);
        $user2 = User::findOrFail($taaruf->user_id_2);
        $profile1 = UserProfile::where('user_id', $user1->id)->first();
        $profile2 = UserProfile::where('user_id', $user2->id)->first();
        $pendampingan = Pendampingan::where('taaruf_id', $id)->first();
        $pendamping = User::findOrFail($pendampingan->counselor);
        $status1 = TaarufTransaction::where('user_id', $user1->id)->first();
        $status2 = TaarufTransaction::where('user_id', $user2->id)->first();
        return view(
            'pages.admin.taaruf.detail',
            [
                'id' => $id,
                'taaruf' => $taaruf,
                'user1' => $user1,
                'user2' => $user2,
                'profile1' => $profile1,
                'profile2' => $profile2,
                'pendamping' => $pendamping,
                'status1' => $status1,
                'status2' => $status2,
            ]
        );
    }

    public function disable(Request $request)
    {
        $user1 = User::findOrFail($request->user1);
        $user1['status'] = 'INACTIVE';
        $user1->update();
        $user2 = User::findOrFail($request->user2);
        $user2['status'] = 'INACTIVE';
        $user2->update();
        return redirect()->route('admin-taaruf');
    }
}
