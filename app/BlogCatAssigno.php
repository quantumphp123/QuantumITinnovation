<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCatAssign extends Model
{
    //
    protected $table = "blogs_cat_assigns_";

    public function categoryDetails(){

    	return $this->belongsTo('App\BlogCategory','category_id','id');
    }
    
    public function blogDetail(){

    	return $this->belongsTo('App\Blog','blog_id','id');
    }
}
