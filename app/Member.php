<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name','last_name','birthdate','email','password','phone','mobile','user_id','club_id','category_id'];

    public function category(){
        return  $this->belongsTo(Category::class);
    }
    public function contact(){
        return  $this->belongsTo(Contact::class);
    }

    public function club(){
        return  $this->belongsTo(Club::class);
    }
    public function curriculum(){
        return  $this->hasMany(Description::class)->where('type','=','championships')->orderBy('year','Desc');
    }
    public function academy(){
        return  $this->hasMany(Description::class)->where('type','=','academy');
    }
    public function championships(){
        return $this->belongsToMany(Championship::class)->withPivot('place','score','bh','bw','r1','r2','r3');
    }

    public function fullName(){

        return $this->Contact->name . " " . $this->Contact->last_name;
    }
}
