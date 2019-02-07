<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function HomePage()
    {
        $date = getDateRus();
        $year = date('Y');
        return view('layouts.primary',[
            'page' => 'pages.main',
            'date' => $date,
            'year' => $year,
            'title' => 'Главная'
        ]);
    }
}
