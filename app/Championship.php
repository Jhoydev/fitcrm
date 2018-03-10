<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    protected $fillable =['name','date'];
    protected $dates = ['date'];

    public  function members(){
        return $this->belongsToMany(Member::class)->orderBy('category_id','ASC');
    }
    public  function categories(){
        return $this->belongsToMany(Category::class);
    }

}
