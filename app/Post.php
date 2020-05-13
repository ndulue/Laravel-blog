<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Comments;

class Post extends Model
{
    protected $fillable = [
        'post_id',
        'title',
        'image',
        'post',
        'comment',
        'author',
        'category',
        'created'
    ];
/*
    public function category(){
        return $this->belongsTo(App\Category::class);
    }
    
    public function comments(){
        return $this->hasMany(App\Comment::class);
    }

    public function numTomonth($value){
        switch ($value) {
        case 01:
            echo "JAN";
            break;
        case 02:
            echo "FEB";
            break;
        case 03:
            echo "MAR";
            break;
        case 04:
            echo "APR";
            break;
        case 05:
            echo "MAY";
            break;
        case 06:
            echo "JUN";
            break;
        case 07:
            echo "JUL";
            break;
        case 08:
            echo "AUG";
            break;
        case 09:
            echo "SEP";
            break;
        case 10:
            echo "OCT";
            break;
        case 11:
            echo "NOV";
            break;
        case 12:
            echo "DEC";
            break;
    }

*/
}
