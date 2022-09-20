<?php

namespace App\Http\Controllers;

use App\Models\product;
use domain\Facade\BannerFacade;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class Homecontroll extends Controller
{
    public function index(){
        $response['banners']=BannerFacade::allActive();
        return view('pages.Home.index')->with($response);
    }

    public function relationship(){
        $response['relationship'] = product::all();
        return view('pages.relationship.index')->with($response);
    }
}

