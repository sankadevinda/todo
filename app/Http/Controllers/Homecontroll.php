<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class Homecontroll extends Controller
{
    public function index(){

        return view('pages.Home.index');
    }
}
