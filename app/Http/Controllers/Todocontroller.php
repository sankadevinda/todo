<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use domain\Facade\TodoFacade;
use Illuminate\Http\Request;

class Todocontroller extends PearentController
{

    //  protected $task;

    // public function __construct()
    // {
    //     $this->task = new Todo();
    // }

    public function index(){
        $response['tasks']=TodoFacade::all();
        return view('pages.Todo.index')->with($response);
    }

    public function store(Request $request){
        // dd($request);
        TodoFacade::store($request->all());
        return redirect()->back();
    }

    public function delete($task_id){

        TodoFacade::delete($task_id);
        return redirect()->back();
    }
//single value update
    public function done($task_id){
        
        TodoFacade::done($task_id);
        return redirect()->back();
    }
}
