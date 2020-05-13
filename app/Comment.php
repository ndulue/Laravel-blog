<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $fillable = [
        'name',
        'email',
        'message',
        'post_id',
        'created',
    ];

    public function post(){
        return $this->belongsTo('App\Post');
    }

}
