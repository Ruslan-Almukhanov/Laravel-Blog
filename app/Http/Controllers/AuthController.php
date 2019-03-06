<?php
namespace App\Http\Controllers;


use App\Http\Requests\RegisterRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('layouts.secondary',[
            'page' => 'pages.registration',
            'title' => 'Регистрация'
        ]);
    }

    public function registerPost(RegisterRequest $request)
    {
        $input = $request->all();

        $user = User::create([
            'email' => $input['email'],
            'password' => password_hash($input['password'],PASSWORD_ARGON2I),
            'password_confirmation' => $input['password_confirmation'],
        ]);

        $profile = new Profile([
            'name' => $input['name'],
            'phone' => $input['phone'],
            'birthdate' => $input['date'],
        ]);

        $user->profile()->save($profile);

        return redirect()->route('login');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function login()
    {
        return view('layouts.secondary',[
           'page' => 'pages.sign-in',
            'title' => 'Вход'
        ]);
    }

    public function loginPost(Request $request)
    {
        $remember = $request->input('remember') ? true : false;

        $authResult = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ], $remember);

        if ($authResult) {
            return redirect()->route('indexPost');
        } else {
            return redirect()->back()->with('authError', 'Неправильный логин или пароль');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}