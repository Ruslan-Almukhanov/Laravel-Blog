<?php
namespace App\Http\Controllers;


use App\Models\Tag;

class AboutMeController extends Controller
{
    public function aboutMe()
    {
        $tags = Tag::all();

        return view('layouts.primary',[
           'page' => 'pages.about-me',
            'title' => 'Обо мне',
            'tags' => $tags
        ]);
    }
}