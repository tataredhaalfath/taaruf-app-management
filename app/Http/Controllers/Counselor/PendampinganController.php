<?php

namespace App\Http\Controllers\Counselor;

use App\Http\Controllers\Controller;
use App\Models\Counselor\Pendampingan;
use Illuminate\Http\Request;

class PendampinganController extends Controller
{
    public function index()
    {
        $pendampingan = Pendampingan::paginate(15);
        return view('pages.counselor.pendampingan.index', [
            'pendampingan' => $pendampingan,
        ]);
    }
}
