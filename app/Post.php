<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   //proteksi nama tabel
    protected $table = 'posts';
    //Biar bisa crud
    protected $fillable = ['title','author','content','status','published_at','created_by','excerpt','foto'];
   
    //Relasi user dan post
    public function getUser(){
        return $this->hasOne(User::class);
    }

}
