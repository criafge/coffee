<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $fillable = [
        "title",
        "description",
        "cost",
        "category_id",
        "recept",
        "photo",
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
