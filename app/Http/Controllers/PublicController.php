<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PublicController extends Controller
{
    public function index(){
        $posts = Post::with('user:id,name')->latest()->simplePaginate(16);
        return view('welcome', compact('posts'));
    }

    public function secure(){
        return 'Secure';
    }

    public function post(Post $post){
        return view('post', compact('post'));
    }

    public function comment(Post $post){
        $post->comments()->create([
            'body' => request('comment'),
            'post_id' => $post->id,
            'user_id' => Auth::check() ? Auth::user()->id : 1, // Check if the user is authenticated
        ]);
        return back();
    }
}