<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CvGambarFisikRequest;
use App\Http\Requests\User\CvHobiRequest;
use App\Http\Requests\User\CvProfileRequest;
use App\Http\Requests\User\CvRequest;
use App\Http\Requests\User\UserQuestionRequest;
use App\Models\User\Cv;
use App\Models\User\Cv_Gambar_Diri;
use App\Models\User\Cv_Gambar_Fisik;
use App\Models\User\Cv_Harapan;
use App\Models\User\Cv_Hobi;
use App\Models\User\Cv_Kriteria;
use App\Models\User\Cv_Pendidikan;
use App\Models\User\CvProfile;
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
        return view('pages.user.cv.index', [
            'cv' => $cv,
            'question' => $question,
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
    public function pendidikan(Request $request)
    {
        $data = $request->all();
        //validasi
        $request->validate([
            'cv_id' => 'required|integer',
            'sma' => 'required|max:255',
            'jurusan_sma' => 'required|max:255',
            'univ' => 'required|max:255',
            'jurusan_univ' => 'required|max:255'
        ]);
        Cv_Pendidikan::create($data);
        return redirect()->route('user-create-cv');
    }

    //store gambaran diri
    public function gambar_diri(Request $request)
    {
        $data = $request->all();
        //validasi
        $request->validate([
            'cv_id' => 'required|integer',
            'moto' => 'required|max:255',
            'target_hidup' => 'required|max:255',
            'kegiatan_wl' => 'required|max:255',
            'hal_disukai' => 'required|max:255',
            'sisi_negatif' => 'required|max:255',
            'merokok' => 'required|max:255',
        ]);

        Cv_Gambar_Diri::create($data);
        return redirect()->route('user-create-cv');
    }

    //store kriteria
    public function kriteria(Request $request)
    {
        $data = $request->all();
        //validasi
        $request->validate([
            'cv_id' => 'required|integer',
            'tinggi' => 'required|max:255',
            'suku' => 'required|max:255',
            'usia' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'tambahan' => 'required|max:255',
        ]);
        Cv_Kriteria::create($data);
        return redirect()->route('user-create-cv');
    }

    //store harapan 
    public function harapan(Request $request)
    {
        $data = $request->all();
        //validasi
        $request->validate([
            'cv_id' => 'required|integer',
            'visi' => 'required|max:255',
            'misi' => 'required|max:255',
            'karir' => 'required|max:255',
        ]);
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
