<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Cv;
use App\Models\User\Cv_Gambar_Fisik;
use App\Models\User\Cv_Hobi;
use App\Models\User\CvProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        return view('pages.user.cv.index', compact('cv'));
    }

    //store cv
    public function storecv(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        //validasi
        $request->validate([
            'slug' => 'required'
        ]);
        CV::create($data);
        return redirect(route('user-cv'))->with('message', 'CV Berhasil Dibuat');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cv = Cv::where('user_id', Auth::user()->id)->first();
        $profile = CvProfile::where('cv_id', $cv->id)->first();
        $gambar_fisik = Cv_Gambar_Fisik::where('cv_id', $cv->id)->first();
        $hobi = Cv_Hobi::where('cv_id', $cv->id)->first();
        return view('pages.user.cv.create', [
            'cv' => $cv,
            'profile' => $profile,
            'gambar_fisik' => $gambar_fisik,
            'hobi' => $hobi,
        ]);
    }

    //store profile
    public function profile(Request $request)
    {

        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/cv/img', 'public');
        //validasi
        $request->validate([
            'cv_id' => 'required|integer',
            'image' => 'required|image|max:2000',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:254',
            'tgl_lahir' => 'required|date',
            'umur' => 'required|integer',
            'agama' => 'required|max:255',
            'manhaj' => 'required|max:255',
            'status' => 'required|max:255',
            'menikah' => 'required|max:255',
            'suku' => 'required|max:255'
        ]);
        CvProfile::create($data);
        return redirect()->route('user-create-cv');
    }

    //store gambar fisik
    public function gambar_fisik(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'cv_id' => 'required|integer',
            'bentuk_fisik' => 'required|max:255',
            'warna_kulit' => 'required|max:254',
            'tinggi' => 'required|integer',
            'berat' => 'required|integer',
            'riwayat_penyakit' => 'required|max:255',
            'golongan_darah' => 'required|max:255',
            'cacat_fisik' => 'required|max:255',
            'tipe_rambut' => 'required|max:255',
            'warna_mata' => 'required|max:255',
            'tanda_lahir' => 'required|max:255',
        ]);

        Cv_Gambar_Fisik::create($data);
        return redirect()->route('user-create-cv');
    }

    //store hobi

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
    public function edit($id)
    {
        //
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
