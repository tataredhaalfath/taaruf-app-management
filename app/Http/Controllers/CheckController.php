<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserAnswerRequest;
use App\Models\User;
use App\Models\User\Cv;
use App\Models\User\UserAnswer;
use App\Models\User\UserQuestion;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index(Request $request, $slug)
    {
        $cv = Cv::where('slug', $slug)->first();
        $user = User::findOrFail($cv->user_id);
        $question = UserQuestion::where('user_id', $user->id)->first();
        return view('pages.check', [
            'cv' => $cv,
            'user' => $user,
            'question' => $question,
        ]);
    }

    public function store(UserAnswerRequest $request)
    {
        $data = $request->all();
        UserAnswer::create($data);
        return redirect()->route('success');
    }

    public function success()
    {
        return view('pages.success');
    }
}
