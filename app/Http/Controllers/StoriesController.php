<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorieRequest;
use App\Models\Storie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoriesController extends Controller
{
    public function index(Request $request)
    {
        $stories = Storie::orderByRaw('created_at DESC')->paginate(20);
        $total = Storie::count();
        return view('pages.stories', [
            'stories' => $stories,
            'total' => $total,
        ]);
    }

    public function create()
    {
        $stories = Storie::where('user_id', Auth::user()->id)->first();
        return view('pages.user.approve.create-stories', [
            'stories' => $stories,
        ]);
    }

    public function store(StorieRequest $request)
    {
        $data = $request->all();
        Storie::create($data);
        return redirect()->route('stories');
    }
}
