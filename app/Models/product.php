<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',

        'intro',

    ];

    // public function category(){
    //     return $this->hasOne(catergory::class, 'id','category_id');
    // }

    public function categories(){
        return $this->belongsToMany(catergory::class , product_catergory::class ,'product_id' , 'category_id');
    }
}
