<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class Todocontroller extends PearentController
{

    protected $task;

    public function __construct()
    {
        $this->task = new Todo();
    }

    public function index(){
        $response['tasks']=Todo::all();
        return view('pages.Todo.index')->with($response);
    }

    public function store(Request $request){
        // dd($request);
        $this->task->create($request->all());
        return redirect()->back();
    }

    public function delete($task_id){
        $task = $this->task->find($task_id);
        $task->delete();
        return redirect()->back();
    }
//single value update
    public function done($task_id){
        $task = $this->task->find($task_id);
        $task->done = 1;
        $task->update();
        return redirect()->back();
    }
}
