<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User\Pengajuan_Cv;
use Illuminate\Http\Request;

class CvConfirmController extends Controller
{

    public function index()
    {
        $pengajuan_cv = Pengajuan_Cv::simplePaginate(15);
        return  view('pages.admin.cv.index', [
            'pengajuan_cv' => $pengajuan_cv,
        ]);
    }
}
