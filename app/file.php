<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    protected $fillable = [
        'id',
        "order_id",
        "file_path"
    ];
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
