<?php

namespace App\Http\Controllers;

use App\Models\Kajian;
use App\Models\Quotes;
use App\Models\Storie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $all = Kajian::orderByRaw('id DESC')->get();
        $kajian = $all->first();
        $quotes = Quotes::orderByRaw('created_at DESC')->get();
        $stories = Storie::orderByRaw('created_at DESC')->paginate(3);
        return view(
            'pages.home',
            [
                'kajian' => $kajian,
                'quotes' => $quotes,
                'stories' => $stories,
            ]
        );
    }
}
