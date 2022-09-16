<?php

namespace App\Http\Controllers;

use domain\Facade\BannerFacade;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        $response['banners']=BannerFacade::all();
        return view('pages.banner.index')->with($response);
    }

    public function store(Request $request){
        // dd($request);
        BannerFacade::store($request->all());
        return redirect()->back();
    }

    public function delete($banner_id){

        BannerFacade::delete($banner_id);
        return redirect()->back();
    }
//single value update
    public function status($banner_id){

        BannerFacade::status($banner_id);
        return redirect()->back();
    }
}
