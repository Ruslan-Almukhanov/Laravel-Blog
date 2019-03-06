<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request, $id)
    {
        $this->validate($request, [
            'body' => 'required|max:1000'
        ]);

        $userId = Auth::id();
        $post = Post::findOrFail($id);
        $comment = new Comment([
            'body' => $request->input('body'),
            'user_id' => $userId,
            'post_id' => $id
        ]);

        $ss = $comment->save();


        return back();
    }
}
