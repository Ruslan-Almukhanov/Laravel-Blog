<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {

    }

    public function postSingle($id)
    {
        $commentCount = Comment::where('post_id',$id)
            ->count();

        $comments = Comment::where('post_id',$id)
            ->get();

        if($id != null) {
            $post = Post::find($id);
            $tags = Post::where('id',$post->id)
                ->first()
                ->tags;

            return view('layouts.secondary',[
                'page' => 'pages.post',
                'title' => $post->title,
                'post' => $post,
                'comments' => $comments,
                'commentCount' => $commentCount,
                'tags' => $tags
            ]);

        }
    }
    public function postBySlug()
    {
        return view('layouts.secondary',[
            'page' => 'pages.post'
        ]);
    }

    public function postsByTag()
    {
        return view('layouts.primary', [
           'page' => 'pages.post'
        ]);
    }

    public function postsByCategory()
    {
        return view('layouts.primary', [
          'page' => 'pages.post'
        ]);
    }
}