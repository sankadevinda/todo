<?php

namespace App\Http\Controllers;

use domain\Facade\BannerFacade;
use Illuminate\Http\Request;

class BannerController extends PearentController
{
    public function index(){
        $response['tasks']=BannerFacade::all();
        return view('pages.Banner.index')->with($response);
    }

    public function store(Request $request){
        // dd($request);
        BannerFacade::store($request->all());
        return redirect()->back();
    }

    public function delete($task_id){

        BannerFacade::delete($task_id);
        return redirect()->back();
    }
//single value update
    public function done($task_id){

        BannerFacade::done($task_id);
        return redirect()->back();
    }
}
