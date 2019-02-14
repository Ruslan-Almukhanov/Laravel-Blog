<?php
namespace App\Http\Controllers;


use App\Custom\MainMenu;

class MenuController extends Controller
{
    public function mainMenu()
    {
        $menu = new MainMenu();
    }
}