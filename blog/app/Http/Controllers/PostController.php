<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function PostBySlug()
    {
        return view('layouts.secondary',[
            'page' => 'pages.post'
        ]);
    }

    public function PostsByTag()
    {
        return view('layouts.primary', [
           'page' => 'pages.post'
        ]);
    }

    public function PostsByCategory()
    {
        return view('layouts.primary', [
          'page' => 'pages.post'
        ]);
    }
}