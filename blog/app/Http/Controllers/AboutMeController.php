<?php
namespace App\Http\Controllers;


class AboutMeController extends Controller
{
    public function AboutMe()
    {
        return view('layouts.primary',[
           'page' => 'pages.about-me',
            'title' => 'Обо мне'
        ]);
    }
}