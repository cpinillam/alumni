<?php

namespace App\Http\Controllers;

use App\Post;
use App\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        //
    }
    public function getAllQuestions()
    {
        //TODO  Research Paginate functionality ->paginate(10);
        //TODO  clarify compact('data')
        $questions = Post::all();
        return view('faq.readQuestion', 'questions');
    }
    public function getPostbyAscDate()
    {

        $questionsraw = new Post();
        dd($questionsraw);
        $questionOrderedbydate = $questionsraw->getPostOrderedbyAscDate();
        return view('faq.readQuestion', 'questionOrderedbydate');
    }

    // public function countPostAnswers()
    // {
    //     $postanswerscount = Post->withCount('answers')->get();
    //     return view('faq.readAsnwers', $postanswerscount);
    // }

    public function create()
    {
        return view('faq.createQuestion');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required|max:10000',
        ]);

        $post = new Post([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            //'id' => Auth::id()
        ]);
        $post->save();

        return view('faq.createQuestion')->with('success', 'Your question has been posted with success!');
    }


    public function show()
    {
        $questions = post::all();
        //dd($questions);
        return view('faq.readQuestion', compact('questions'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $question = App\Post::findOrFail($id);
        $question->delete();
        return redirect('faq.deletequestion')->with('success', 'This question has been deleted permanently!');
    }


    public function getId($post_id, $body)
    {
        $questionId = Post::find($post_id, $body);
        return view('faq.createAnswer', compact('questionId'));
        return view('faq.readQuestion', compact('questionId'));
    }
    public function showUniqueQuestionID($post_id)
    {
        $question = Post::find($post_id);
        $answers = Answer::all();
        return view('faq.uniqueQuestion', compact('question'), compact('answers'));
        return view('faq.createAnswer', compact('answers'));
    }
}
