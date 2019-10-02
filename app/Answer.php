<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Answer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'body'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function post()
    {
        $this->belongsTo(Post::class, 'id');
    }
    public function getAnswersOrderByDate($post_id)
    {
        $answersOrderedByDate = App\Post::findOrDie($post_id)->answers->orderBy('created_at', 'desc')->get();

        //! refactor 
        return view('faq.readAnswers', $answers);
        //! return in controller
    }

    public function storeAnswer(Request $request, $post_id)
    { //! eso es jodido
        $request->validate([
            'body' => 'required',
        ]);
        $question = App\Post::find($post_id);
        $question->answer[0]->body = $request->body;
        $question->answer[0]->post_id = Post::class->id;
        $question->answer[0]->answer_author_id = auth()->user()->id;
        $question->push();
    }
}
