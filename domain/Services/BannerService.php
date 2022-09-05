<?php

namespace domain\Services;

use App\Models\Banner;

class BannerService

{
    protected $task;

    public function __construct()
    {
        $this->task = new Banner();
    }

    public function all(){
        return $this->task::all();

    }

    public function store($data){
        // dd($request);
        $this->task->create($data);

    }

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
}

