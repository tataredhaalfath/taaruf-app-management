<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User\Cv;
use App\Models\User\Cv_Gambar_Diri;
use App\Models\User\Cv_Gambar_Fisik;
use App\Models\User\Cv_Harapan;
use App\Models\User\Cv_Hobi;
use App\Models\User\Cv_Kriteria;
use App\Models\User\Cv_Pendidikan;
use App\Models\User\CvProfile;
use App\Models\User\Pengajuan_Cv;
use App\Models\User\Taaruf;
use App\Models\User\UserProfile;
use App\Models\User\UserQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $cv = Cv::where('slug', $slug)->first();
        $approve = Taaruf::where('user_id_1', Auth::user()->id)
            ->Where('status', 'APPROVED')
            ->orWhere(function ($query) {
                $query->where('user_id_2', Auth::user()->id)
                    ->where('status', 'APPROVED');
            })
            ->count();
        $approve2 = Taaruf::where('user_id_1', $cv->user_id)
            ->Where('status', 'APPROVED')
            ->orWhere(function ($query) use ($cv) {
                $query->where('user_id_2', $cv->user_id)
                    ->where('status', 'APPROVED');
            })
            ->count();
        if ($cv) {
            $user = User::findOrFail($cv->user_id);
            $user_profile = UserProfile::where('user_id', $user->id)->first();
            $question = UserQuestion::where('user_id', $user->id)->first();
            $profile = CvProfile::where('cv_id', $cv->id)->first();
            $gambar_fisik = Cv_Gambar_Fisik::where('cv_id', $cv->id)->first();
            $hobi = Cv_Hobi::where('cv_id', $cv->id)->first();
            $pendidikan = Cv_Pendidikan::where('cv_id', $cv->id)->first();
            $gambar_diri = Cv_Gambar_Diri::where('cv_id', $cv->id)->first();
            $kriteria = Cv_Kriteria::where('cv_id', $cv->id)->first();
            $harapan = Cv_Harapan::where('cv_id', $cv->id)->first();
            if ($question && $profile && $gambar_fisik && $hobi && $pendidikan && $gambar_diri && $kriteria && $harapan) {

                return view('pages.detail', [
                    'approve' => $approve,
                    'approve2' => $approve2,
                    'user' => $user,
                    'cv' => $cv,
                    'user_profile' => $user_profile,
                    'question' => $question,
                    'profile' => $profile,
                    'gambar_fisik' => $gambar_fisik,
                    'hobi' => $hobi,
                    'pendidikan' => $pendidikan,
                    'gambar_diri' => $gambar_diri,
                    'kriteria' => $kriteria,
                    'harapan' => $harapan,
                ]);
            }
            return view('pages.detail');
        }
    }
}
