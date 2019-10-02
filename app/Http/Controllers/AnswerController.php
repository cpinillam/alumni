<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function show($id)
    {
        $answers = App\Answer::findOrFail($id);
        return view('faq.readAnswers', $answers);
    }


    public function store(Request $request, $post_id)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $answer = new Answer([
            'post_id' => App\Post::findOrFail($post_id),
            'body' => $request->get('body'),
            //'answer_author_id' => auth()->user()->id,
        ]);
        $answer->save();
        return view('faq.createAnswer')->with('success', 'Your answer has been posted successfully!');
    }
}
