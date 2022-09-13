<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use domain\Facade\TodoFacade;
use Illuminate\Http\Request;

class Todocontroller extends Controller
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
        //dd($request);
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

    public function edit(Request $request){


        $response['task']=TodoFacade::get($request->task_id);
        return view('pages.Todo.edit')->with($response);

    }

    public function update(Request $request , $task_id){
        TodoFacade::update($request->all() , $task_id);
        return redirect()->back();
    }



//sub task


    public function subtask($task_id){


        $response['sub']=TodoFacade::get_sub_task($task_id);
        return view('pages.Todo.subtask')->with($response);

    }




    public function sub_store(Request $request){
         //dd($request);
        TodoFacade::sub_store($request->all());
        return redirect()->back('pages.Todo.subtask');
    }




}
