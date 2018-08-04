<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
    	'title' , 'body' , 'department' , 'author_id' ,'image'
    ];

    public function user(){
    	$this->belongsTo('App\User');
    }
}
