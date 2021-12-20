<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kajian;
use App\Models\Quotes;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $kajian = Kajian::paginate(15);
        $quotes = Quotes::paginate(15);

        return view('pages.admin.content.index', [
            'kajian' => $kajian,
            'quotes' => $quotes,
        ]);
    }
}
