<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'status_id',
        'basket_id',
        'comment',
        'date_time',
        'cost',
        'user_id',
        'order',
    ];


    public function status(){
        return $this->belongsTo(Status::class);
    }
}
