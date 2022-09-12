<?php

namespace domain\Services;

use App\Models\Todo;
use GuzzleHttp\Psr7\Request;

class TodoService

{

//ipmlemeted constructor
    protected $task;

    public function __construct()
    {
        $this->task = new Todo();
    }
//retriew todo recodes to index page
    public function all(){
        return $this->task::all();

    }
//todo form data store to db
    public function store($data){
        // dd($request);
        $this->task->create($data);

    }
//delete todo recode of relevent id
    public function delete($task_id){
        $task = $this->task->find($task_id);
        $task->delete();

    }
//single value update
    public function done($task_id){
        $task = $this->task->find($task_id);
        $task->done = 1;
        $task->update();

    }

// get past recode relevent to id for edit model
    public function get( $task_id){
        return $this->task->find($task_id);

    }

    //new data update to db
    public function update(array $data ,$task_id){
        $task = $this->task->find($task_id);
        $task->update($this->edit($task , $data));
    }

    //new data and past data merge
    protected function edit(Todo $task , $data){
        return array_merge($task->toArray(),$data);
    }
}

