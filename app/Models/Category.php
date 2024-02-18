<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        "title",
    ];

    public function coffees(){
        return $this->hasMany(Coffee::class);
    }
}
