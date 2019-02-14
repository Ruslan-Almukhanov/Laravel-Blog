<?php
namespace App\Http\Controllers;


use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function adminSignInPage() {
        return view('pages.admin',[
            'title' => 'Вход'
        ]);
    }

    public function adminSignUp(RegisterRequest $request) {

        $input = $request->all();

        $error = '';

        $user = DB::table('admins')->where('email', $request->input('email'))->first();

        if(!$user) {
            $error = 'не верный логин';
        } else if($request->input('password') != $user->password ) {
            $error = 'Не верный пароль';
        } else {
            return redirect()->route('admin-main');
        }
    }

    public function signUp()
    {
        return view('layouts.secondary',[
            'page' => 'pages.registration',
            'title' => 'Регистрация'
        ]);
    }

    public function signUpCheckData(RegisterRequest $request)
    {

        $input = $request->all();

        DB::table('users')->insert([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'password' => $request->input('password'),
            'password_confirmation' => $request->input('password_confirmation'),
            'phone' => $request->input('phone'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")

        ]);

        return view('layouts.secondary',[
           'page' => 'pages.registration',
            'title' => 'Регистрация'
        ]);
    }

    public function signIn()
    {
        return view('layouts.secondary',[
           'page' => 'pages.sign-in',
            'title' => 'Вход'
        ]);
    }

    public function signInCheckData(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|',
            'password' => 'required|min:8|'
        ]);

        $input = $request->all();

        $error = Null;

        $user = DB::table('users')->where('email', $request->input('email'))->first();

        if(!$user) {
            $error = 'Пользователь не найден';
        } else if($request->input('password') != $user->password ) {
            $error = 'Не верный пароль';
        } else {
            return redirect()->route('home');
        }

        return view('layouts.secondary',[
            'page' => 'pages.sign-in',
            'error' => $error,
            'title' => 'Вход'
        ]);
    }
}