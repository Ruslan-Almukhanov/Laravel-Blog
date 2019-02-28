<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {

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