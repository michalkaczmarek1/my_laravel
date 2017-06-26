<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   protected $fillable = [
   		'name',
   		'description',
   		'embed',
   		'embed_desc'
   ];

   /**
    * Wpis - jeden autor
    */

   public function user()
   {
   		return $this->belongsTo('App\User');
   }
}
