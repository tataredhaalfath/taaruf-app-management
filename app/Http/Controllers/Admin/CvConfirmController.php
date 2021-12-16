<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
use App\Models\User\UserQuestion;
use Illuminate\Http\Request;

class CvConfirmController extends Controller
{

    public function index()
    {
        $pengajuan_cv = Pengajuan_Cv::paginate(15);
        return  view('pages.admin.cv.index', [
            'pengajuan_cv' => $pengajuan_cv,
        ]);
    }

    public function detail(Request $request, $id)
    {

        $cv = Cv::where('user_id', $id)->first();
        $question = UserQuestion::where('user_id', $id)->first();
        if ($cv) {
            $profile = CvProfile::where('cv_id', $cv->id)->first();
            $gambar_fisik = Cv_Gambar_Fisik::where('cv_id', $cv->id)->first();
            $hobi = Cv_Hobi::where('cv_id', $cv->id)->first();
            $pendidikan = Cv_Pendidikan::where('cv_id', $cv->id)->first();
            $gambar_diri = Cv_Gambar_Diri::where('cv_id', $cv->id)->first();
            $kriteria = Cv_Kriteria::where('cv_id', $cv->id)->first();
            $harapan = Cv_Harapan::where('cv_id', $cv->id)->first();
            if ($question && $profile && $gambar_fisik && $hobi && $pendidikan && $gambar_diri && $kriteria && $harapan) {

                return view('pages.admin.cv.detail', [
                    'cv' => $cv,
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
        }



        return redirect(404);
    }
}
