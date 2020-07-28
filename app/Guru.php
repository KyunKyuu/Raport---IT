<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table='guru';
    protected $fillable= ['nama', 'telpon', 'email', 'user_id'];

    // public function getAvatar()
    // {
    //     if (!$this->avatar) {
    //         return asset('images/default.jpg');
    //     }
    //         return asset('images/'.$this->avatar);
    // }

    public function mapel()
    {
    	return $this->hasMany(Mapel::class);
    }
    
     public function posts()
    {
        return $this->hasMany(Post::class);
    }

     public function getAvatar()
   {
        return !$this->thumbnail ? asset('images/default.jpg') : asset('images/'.$this->avatar);
   }
}
