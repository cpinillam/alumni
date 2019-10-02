<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        $questions = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('faq.readQuestion', compact('questions'));
    }


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


    public function show($id)
    {
        //
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
}
