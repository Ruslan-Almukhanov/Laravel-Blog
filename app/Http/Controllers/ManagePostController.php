<?php
namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagePostController extends Controller
{
    public function indexPost()
    {
        return view('layouts.secondary',[
            'page' => 'pages.manage-post',
            'title' => 'Создание поста'
        ]);
    }

    public function createPost(PostRequest $request)
    {
        $input = $request->all();
        //post save
        $post = new Post([
            'title' => $input['title'],
            'preview' => $input['preview'],
            'content' => $input['content'],
            'image' => $input['image'],
            'slug' => sha1(str_random(16) .microtime(true)),
        ]);

        $user = User::find(Auth::id());
        $user->posts()->save($post);
        $post->slug = $post->id . ':' . str_slug($post->title, '-');
        $post->save();

        //tags save
        if($input['tags'] != NULL) {
        $tagList = explode("\n", $input['tags']);
            foreach ($tagList as $tags => $name) {
                $tag = Tag::firstOrCreate(['name' => $name]);
                $post->tags()->attach($tag->id);
            }
        }

        //categories save
        if($input['categories'] != NULL){
            $catList = explode("\n", $input['categories']);
            foreach ($catList as $cats => $name) {
                $cat = Category::firstOrCreate(['name' => $name]);
                $post->categories()->attach($cat->id);
            }
        }

        return redirect()->route('home');
    }

    public function editForm($id)
    {
        try {
            $auth = $this->authorize('update', Post::find($id));
        } catch (AuthorizationException $e){
            throw new AuthorizationException('Доступ запрещен');
        }

        $post = Post::find($id);

        $tags = Post::where('id',$id)
            ->first()
            ->tags;
        $tagName = null;
        foreach ($tags as $tag) {
            $tagName .= $tag->name . "\n";
        }

        return view('layouts.secondary',[
            'page' => 'pages.edit-post',
            'title' => 'Редактирование поста',
            'post' => $post,
            'tag' => $tagName
        ]);
    }

    public function editPost(PostRequest $request, $id)
    {
        $post = Post::find($id);
        $input = $request->all();
        $post->update([
                'title' => $input['title'],
                'preview' => $input['preview'],
                'content' => $input['content'],
                'image' => $input['image'],
                'slug' => sha1(str_random(16) .microtime(true)),
            ]);

        $tagList = explode("\n", $input['tags']);

        //tags save
        if($input['tags'] != NULL) {
            $tagList = explode("\n", $input['tags']);
            foreach ($tagList as $tags => $name) {
                $tag = Tag::firstOrCreate(['name' => $name]);
                $post->tags()->attach($tag->id);
            }
        }

        //categories save
        if($input['categories'] != NULL){
            $catList = explode("\n", $input['categories']);
            foreach ($catList as $cats => $name) {
                $cat = Category::firstOrCreate(['name' => $name]);
                $post->categories()->attach($cat->id);
            }
        }
        return redirect()->route('home');
    }

    public function deletePost($id)
    {
        try {
            $auth = $this->authorize('delete', Post::find($id));
        } catch (AuthorizationException $e){
            throw new AuthorizationException('Доступ запрещен');
        }
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home');
    }
}