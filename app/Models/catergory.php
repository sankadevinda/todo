<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catergory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function products(){
        return $this->hasMany(product::class, 'category_id', 'id');
    }

    // public function products(){
    //     return $this->belongsToMany(product::class, 'category_id', 'product_id');
    // }


}
