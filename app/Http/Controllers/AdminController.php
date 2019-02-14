<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function mainPage() {
        return view('pages.admin-main',[
            'title' => 'Консоль'
        ]);
    }

    public function addMenu(Request $request) {

    }
}