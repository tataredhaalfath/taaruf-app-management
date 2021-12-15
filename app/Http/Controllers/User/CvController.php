<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CvGambarDiriRequest;
use App\Http\Requests\User\CvGambarFisikRequest;
use App\Http\Requests\User\CvHarapanRequest;
use App\Http\Requests\User\CvHobiRequest;
use App\Http\Requests\User\CvKriteriaRequest;
use App\Http\Requests\User\CvPendidikanRequest;
use App\Http\Requests\User\CvProfileRequest;
use App\Http\Requests\User\CvRequest;
use App\Http\Requests\User\PengajuanRequest;
use App\Http\Requests\User\UserQuestionRequest;
use App\Models\User\Cv;
use App\Models\User\Cv_Gambar_Diri;
use App\Models\User\Cv_Gambar_Fisik;
use App\Models\User\Cv_Harapan;
use App\Models\User\Cv_Hobi;
use App\Models\User\Cv_Kriteria;
use App\Models\User\Cv_Pendidikan;
use App\Models\User\CvProfile;
use App\Models\User\Pengajuan_Cv;
use App\Models\User\UserProfile;
use App\Models\User\UserQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Mockery\Undefined;

use function PHPUnit\Framework\isEmpty;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cv = Cv::where('user_id', Auth::user()->id)->first();
        $question = UserQuestion::where('user_id', Auth::user()->id)->first();
        $profile = null;
        $gambar_fisik = null;
        $hobi = null;
        $pendidikan = null;
        $gambar_diri = null;
        $kriteria = null;
        $harapan = null;
        $pengajuan_cv = null;
        $user_profile = UserProfile::where('user_id', Auth::user()->id)->first();
        if ($cv) {
            $profile = CvProfile::where('cv_id', $cv->id)->first();
            $gambar_fisik = Cv_Gambar_Fisik::where('cv_id', $cv->id)->first();
            $hobi = Cv_Hobi::where('cv_id', $cv->id)->first();
            $pendidikan = Cv_Pendidikan::where('cv_id', $cv->id)->first();
            $gambar_diri = Cv_Gambar_Diri::where('cv_id', $cv->id)->first();
            $kriteria = Cv_Kriteria::where('cv_id', $cv->id)->first();
            $harapan = Cv_Harapan::where('cv_id', $cv->id)->first();
            $pengajuan_cv = Pengajuan_Cv::where('cv_id', $cv->id)->first();
        }

        return view('pages.user.cv.index', [
            'cv' => $cv,
            'question' => $question,
            'profile' => $profile,
            'gambar_fisik' => $gambar_fisik,
            'hobi' => $hobi,
            'pendidikan' => $pendidikan,
            'gambar_diri' => $gambar_diri,
            'kriteria' => $kriteria,
            'harapan' => $harapan,
            'pengajuan_cv' => $pengajuan_cv,
            'user_profile' => $user_profile,
        ]);
    }

    //store cv
    public function storecv(CvRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);

        CV::create($data);
        return redirect(route('user-cv'))->with('message', 'CV Berhasil Dibuat');
    }
    //store question
    public function question(UserQuestionRequest $request)
    {
        $data = $request->all();

        UserQuestion::create($data);
        return redirect(route('user-cv'))->with('message', 'Pertanyaan Berhasil Dibuat');
    }

    //edit question
    public function question_edit()
    {
        $question = UserQuestion::where('user_id', Auth::user()->id)->first();
        return view('pages.user.cv.edit-question', [
            'question' => $question,
        ]);
    }

    //update question
    public function question_update(UserQuestionRequest $request)
    {
        $data = $request->all();

        $question = UserQuestion::findOrFail(Auth::user()->id);
        $question->update($data);
        return redirect(route('user-cv'))->with('message', 'Pertanyaan Berhasil Diedit');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //create cv
    public function create()
    {
        $cv = Cv::where('user_id', Auth::user()->id)->first();
        $profile = CvProfile::where('cv_id', $cv->id)->first();
        $gambar_fisik = Cv_Gambar_Fisik::where('cv_id', $cv->id)->first();
        $hobi = Cv_Hobi::where('cv_id', $cv->id)->first();
        $pendidikan = Cv_Pendidikan::where('cv_id', $cv->id)->first();
        $gambar_diri = Cv_Gambar_Diri::where('cv_id', $cv->id)->first();
        $kriteria = Cv_Kriteria::where('cv_id', $cv->id)->first();
        $harapan = Cv_Harapan::where('cv_id', $cv->id)->first();
        return view('pages.user.cv.create', [
            'cv' => $cv,
            'profile' => $profile,
            'gambar_fisik' => $gambar_fisik,
            'hobi' => $hobi,
            'pendidikan' => $pendidikan,
            'gambar_diri' => $gambar_diri,
            'kriteria' => $kriteria,
            'harapan' => $harapan,
        ]);
    }

    //store profile
    public function profile(CvProfileRequest $request)
    {

        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/cv/img', 'public');

        CvProfile::create($data);
        return redirect()->route('user-create-cv');
    }

    //store gambar fisik
    public function gambar_fisik(CvGambarFisikRequest $request)
    {
        $data = $request->all();


        Cv_Gambar_Fisik::create($data);
        return redirect()->route('user-create-cv');
    }

    //store hobi
    public function hobi(CvHobiRequest $request)
    {
        $data = $request->all();

        Cv_Hobi::create($data);
        return redirect()->route('user-create-cv');
    }

    //store pendidikan
    public function pendidikan(CvPendidikanRequest $request)
    {
        $data = $request->all();

        Cv_Pendidikan::create($data);
        return redirect()->route('user-create-cv');
    }

    //store gambaran diri
    public function gambar_diri(CvGambarDiriRequest $request)
    {
        $data = $request->all();

        Cv_Gambar_Diri::create($data);
        return redirect()->route('user-create-cv');
    }

    //store kriteria
    public function kriteria(CvKriteriaRequest $request)
    {
        $data = $request->all();

        Cv_Kriteria::create($data);
        return redirect()->route('user-create-cv');
    }

    //store harapan 
    public function harapan(CvHarapanRequest $request)
    {
        $data = $request->all();

        Cv_Harapan::create($data);
        return redirect()->route('user-create-cv');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //edit cv
    public function edit()
    {
        $cv = Cv::where('user_id', Auth::user()->id)->first();
        $profile = CvProfile::where('cv_id', $cv->id)->first();
        $gambar_fisik = Cv_Gambar_Fisik::where('cv_id', $cv->id)->first();
        $hobi = Cv_Hobi::where('cv_id', $cv->id)->first();
        $pendidikan = Cv_Pendidikan::where('cv_id', $cv->id)->first();
        $gambar_diri = Cv_Gambar_Diri::where('cv_id', $cv->id)->first();
        $kriteria = Cv_Kriteria::where('cv_id', $cv->id)->first();
        $harapan = Cv_Harapan::where('cv_id', $cv->id)->first();
        return view('pages.user.cv.edit', [
            'cv' => $cv,
            'profile' => $profile,
            'gambar_fisik' => $gambar_fisik,
            'hobi' => $hobi,
            'pendidikan' => $pendidikan,
            'gambar_diri' => $gambar_diri,
            'kriteria' => $kriteria,
            'harapan' => $harapan,
        ]);
    }

    //update profile
    public function profile_update(CvProfileRequest $request)
    {

        $data = $request->all();
        if ($request->image) {
            // hapus file image lama
            unlink(public_path('storage/' . $data['old_image']));
            //masukan image baru
            $data['image'] = $request->file('image')->store('assets/cv/img', 'public');
        }

        $cv = Cv::where('user_id', Auth::user()->id)->first();
        $profile = CvProfile::where('cv_id', $cv->id)->first();
        $profile->update($data);
        return redirect(route('user-cv'))->with('message', 'Cv Profile Berhasil Di Update');
    }

    //update gambar fisik
    public function gambar_fisik_update(CvGambarFisikRequest $request)
    {
        $data = $request->all();

        $cv = Cv::where('user_id', Auth::user()->id)->first();
        $gambar_fisik = Cv_Gambar_Fisik::where('cv_id', $cv->id)->first();
        $gambar_fisik->update($data);
        return redirect(route('user-cv'))->with('message', 'Cv Gambar Fisik Berhasil Di Update');
    }

    //update hobi
    public function hobi_update(CvHobiRequest $request)
    {
        $data = $request->all();

        $cv = Cv::where('user_id', Auth::user()->id)->first();
        $hobi = Cv_Hobi::where('cv_id', $cv->id)->first();
        $hobi->update($data);
        return redirect(route('user-cv'))->with('message', 'Cv Hobi Berhasil Di Update');
    }

    //update Riwayat Pendidikan
    public function pendidikan_update(CvPendidikanRequest $request)
    {
        $data = $request->all();

        $cv = Cv::where('user_id', Auth::user()->id)->first();
        $pendidikan = Cv_Pendidikan::where('cv_id', $cv->id)->first();
        $pendidikan->update($data);
        return redirect(route('user-cv'))->with('message', 'Cv Pendidikan Berhasil Di Update');
    }

    //update gambar diri
    public function gambar_diri_update(CvGambarDiriRequest $request)
    {
        $data = $request->all();

        $cv = Cv::where('user_id', Auth::user()->id)->first();
        $gambar_diri = Cv_Gambar_Diri::where('cv_id', $cv->id)->first();
        $gambar_diri->update($data);
        return redirect(route('user-cv'))->with('message', 'Cv Gambar Diri Berhasil Di Update');
    }

    //update kriteria
    public function kriteria_update(CvKriteriaRequest $request)
    {
        $data = $request->all();

        $cv = Cv::where('user_id', Auth::user()->id)->first();
        $kriteria = Cv_Kriteria::where('cv_id', $cv->id)->first();
        $kriteria->update($data);
        return redirect(route('user-cv'))->with('message', 'Cv Kriteria Berhasil Di Update');
    }

    //update harapan
    public function harapan_update(CvHarapanRequest $request)
    {
        $data = $request->all();

        $cv = Cv::where('user_id', Auth::user()->id)->first();
        $harapan = Cv_Harapan::where('cv_id', $cv->id)->first();
        $harapan->update($data);
        return redirect(route('user-cv'))->with('message', 'Cv Harapan Berhasil Di Update');
    }


    //mengajukan cv
    public function pengajuan_cv(PengajuanRequest $request)
    {
        $data = $request->all();
        Pengajuan_Cv::create($data);
        return redirect(route('user-cv'))->with('message', 'Cv Berhasil Diajukan. Mohon mengunggu proses review dari admin');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
