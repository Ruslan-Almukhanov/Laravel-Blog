<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function HomePage()
    {
        return view('layouts.primary',[
            'page' => 'pages.main',
            'title' => 'Главная'
        ]);
    }
}
