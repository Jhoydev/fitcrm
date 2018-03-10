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
        return $this->belongsToMany(Championship::class)->withPivot('place','score','bh','bw','r1','r2','r3','category_id');
    }

    public function findChampionship($cham_id,$mem_id){
        return $this->belongsToMany(Championship::class)->withPivot('place','score','bh','bw','r1','r2','r3','category_id')->where('championship_id',$cham_id)->where('member_id',$mem_id);
    }

    public function fullName(){

        return $this->Contact->name . " " . $this->Contact->last_name;
    }

    public function scopeFilter($query,$filters)
    {

        if (isset($filters['name']) && !empty($filters['name']) && $name = $filters['name']){
            $query->join('contacts','members.contact_id','=','contacts.id')->whereRaw(" (name like '%$name%' or last_name like '%$name%') ");
        }
        if (isset($filters['club_id']) && !empty($filters['club_id']) &&  $club_id = $filters['club_id']){
            $query->where('club_id','=',$club_id);
        }
        if (isset($filters['category_id'])  && !empty($filters['category_id']) &&  $category_id = $filters['category_id']){
            $query->where('category_id','=',$category_id);
        }
    }
}
