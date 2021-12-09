<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Cv;
use App\Models\User\Cv_Gambar_Diri;
use App\Models\User\Cv_Gambar_Fisik;
use App\Models\User\Cv_Harapan;
use App\Models\User\Cv_Hobi;
use App\Models\User\Cv_Kriteria;
use App\Models\User\Cv_Pendidikan;
use App\Models\User\CvProfile;
use App\Models\User\UserAnswer;
use App\Models\User\UserQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomingController extends Controller
{
    public function index()
    {
        $question = UserQuestion::where('user_id', Auth::user()->id)->first();
        $incoming = null;
        if ($question) {
            $incoming = UserAnswer::where('uq_id', $question->id)->get();
        }
        return view('pages.user.incoming.index', [
            'incoming' => $incoming,
        ]);
    }

    public function detail(Request $request, $id)
    {
        //penerima
        $question = UserQuestion::where('user_id', Auth::user()->id)->first();


        //pengirim
        $answer = UserAnswer::findOrFail($id);
        $cv = Cv::where('user_id', $answer->user_id)->first();
        $profile = CvProfile::where('cv_id', $cv->id)->first();
        $gambar_fisik = Cv_Gambar_Fisik::where('cv_id', $cv->id)->first();
        $hobi = Cv_Hobi::where('cv_id', $cv->id)->first();
        $pendidikan = Cv_Pendidikan::where('cv_id', $cv->id)->first();
        $gambar_diri = Cv_Gambar_Diri::where('cv_id', $cv->id)->first();
        $kriteria = Cv_Kriteria::where('cv_id', $cv->id)->first();
        $harapan = Cv_Harapan::where('cv_id', $cv->id)->first();

        //cek apakah permintaan yang masuk valid atau tidak
        if ($answer->uq_id == $question->id) {
            return view('pages.user.incoming.detail', [
                'question' => $question,
                'answer' => $answer,
                'cv' => $cv,
                'profile' => $profile,
                'gambar_fisik' => $gambar_fisik,
                'hobi' => $hobi,
                'pendidikan' => $pendidikan,
                'gambar_diri' => $gambar_diri,
                'kriteria' => $kriteria,
                'harapan' => $harapan
            ]);
        }

        return redirect(404);
    }
}
