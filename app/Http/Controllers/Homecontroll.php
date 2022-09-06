<?php

namespace App\Http\Controllers;

use domain\Facade\BannerFacade;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class Homecontroll extends Controller
{
    public function index(){
        $response['banners']=BannerFacade::allActive();
        return view('pages.Home.index')->with($response);
    }
}
