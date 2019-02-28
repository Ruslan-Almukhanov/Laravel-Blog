<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class ManagePostController extends Controller
{
    public function indexPost()
    {
        return view('layouts.secondary',[
            'page' => 'pages.manage-post',
            'title' => 'Создание поста'
        ]);
    }

    public function createPost(Request $request)
    {

        $validatePost = $request->validate([
            'title' => 'required',
            'preview' => 'required',
            'content' => 'required'
        ]);

        $input = $request->all();

        $post = new Post([
            'title' => $input['title'],
            'preview' => $input['preview'],
            'content' => $input['content'],
            'image' => $input['image'],
            'slug' => sha1(str_random(16) .microtime(true)),
        ]);

        $user = User::find(1);
        $user->posts()->save($post);

        $post->slug = $post->id . ':' . str_slug($post->title, '-');
        $post->save();

        $tagList = explode("\n", $input['tags']);

        foreach($tagList as $tags => $name) {

            $tag = Tag::where('name', '=', $name)->first();

            //если тег найден то синхр его либо создадим
            if($tag !=null) {
                $post->tags()->sync($tag->id);
            } else {
                $tag = new Tag();
                $tag->name = $name;

                $tag->save();

                $post->tags()->sync($tag->id);
            }
        }

        return redirect()->route('home');
    }
}