<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Cv;
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
        return view('pages.user.cv.create', [
            'cv' => $cv,
            'profile' => $profile
        ]);
    }

    //store profile
    public function profile(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/cv/img', 'public');
        CvProfile::create($data);
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
