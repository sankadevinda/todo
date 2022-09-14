<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subtask extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_title',
        'phone',
        'priority',
        'note',
        'date',
        'task_id',
    ];



    // public function get_sub($task_id){
    //     return $this->where('task_id' , '$task_id')->get();
    // }
}
