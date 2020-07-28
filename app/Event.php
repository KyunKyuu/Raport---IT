<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function user()
   {
   		return $this->belongsTo(User::class);
   }

   public function thumbnail()
   {
   		return !$this->thumbnail ? asset('no-thumbnail.jpg') : $this->thumbnail;
   }
}
