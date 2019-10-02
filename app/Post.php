<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use softDeletes;

    protected $fillable = ['title', 'body'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Answers()
    {
        return $this->hasMany(Answer::class, 'answer_id');
    }

    /*     public function getPostbyDate($id)
    {
        $questionsortedbydate = Post->findOrFail($id);
        $questionsortedbydate->orderBy('created_at', 'desc')->get();
        return view('faq.readQuestion', $questionsortedbydate);
    } */
    /* 
    public function countPostAnswers()
    {
        $postanswerscount = Post->withCount('answers')->get();
        return view('faq.readAsnwers', $postanswerscount);
    } */
}
