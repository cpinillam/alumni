<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Post;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function show($id)
    {
        $answers = App\Answer::findOrFail($id);
        return view('faq.readAnswers', $answers);
    }


    public function store(Request $request, Post $Post)
    {
        $randomnumber = mt_rand(1000000000, 9999999999);

        $request->request->add(['answer_author_id' => $randomnumber]);
        $request->validate([
            'body' => 'required',
        ]);

        //!  $PostId = Post::with('answer', 'post.answer')->get()->find($reservation->id);
        $answer = new Answer([
            // 'post_id' => Post::with('Answers')->get()->find($Post->id),
            'post_id' => Post::find($Post->id),
            'body' => $request->get('body'),
            //* The auth is not active therefor for testing purposes I'm doing something really bad with $randomnumber
            //'answer_author_id' => auth()->user()->id,
            'answer_author_id' => $request->get('answer_author_id'),

        ]);
        dd($answer);
        $answer->save();
        return view('faq.createAnswer')->with('success', 'Your answer has been posted successfully!');
    }




    public function getAnswersOrderByDate($post_id)
    {
        $answersOrderedByDate = Post::findOrDie($post_id)->answers->orderBy('created_at', 'desc')->get();

        //! refactor 
        return view('faq.readAnswers', $answersOrderedByDate);
        //! return in controller
    }
    public function createanswer(Request $request)
    {
        $response_answer_id = $request->all()["answer_id"];
        // dd($response_answer_id);
    }
}
