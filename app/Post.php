<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
      "id", "user_id"
   ];

   public function user(){
      return $this->belongsTo(User::class);
   }

}
