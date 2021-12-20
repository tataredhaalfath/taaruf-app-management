<?php

namespace App\Http\Controllers;

use App\Models\Kajian;
use App\Models\Quotes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $all = Kajian::orderByRaw('id DESC')->get();
        $kajian = $all->first();
        $quotes = Quotes::get();
        return view(
            'pages.home',
            [
                'kajian' => $kajian,
                'quotes' => $quotes,
            ]
        );
    }
}
