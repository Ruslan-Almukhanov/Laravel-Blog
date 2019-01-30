<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function SignUp()
    {
        return view('layouts.secondary',[
            'page' => 'pages.registration',
            'title' => 'Регистрация'
        ]);
    }

    public function SignUpCheckData(Request $request)
    {
        $userData = $request->all();

        echo '<pre>';
        var_dump($userData);
        echo '</pre>';

        return view('layouts.secondary',[
           'page' => 'pages.registration',
            'title' => 'Регистрация'
        ]);
    }

    public function SignIn()
    {
        return view('layouts.secondary',[
           'page' => 'pages.sign-in',
            'title' => 'Вход'
        ]);
    }

    public function SignInCheckData()
    {
        return view('layouts.secondary',[
            'page' => 'pages.sign-in',
            'title' => 'Вход'
        ]);
    }
}