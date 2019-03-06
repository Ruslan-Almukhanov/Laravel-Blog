<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homePage()
    {
        $posts = Post::Latest()->get();

        $tags = Tag::all();

        $date = getDateRus();
        $year = date('Y');
        return view('layouts.primary',[
            'page' => 'pages.main',
            'date' => $date,
            'year' => $year,
            'posts' => $posts,
            'title' => 'Главная',
            'tags' => $tags
        ]);
    }
}
