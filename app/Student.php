<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama', 'nis' ,'kelas_id', 'avatar', 'user_id'];

    public function getAvatar()
    {
    	if (!$this->avatar) {
    		return asset('images/default.jpg');
    	}
    		return asset('images/'.$this->avatar);
    }

    public function mapel()
    {
    	return $this->belongsToMany(Mapel::class)->withPivot(['nilai'])->withTimeStamps();
    }

    public function ratanilai()
    {
        $total = 0;
        $hitung = 0;
        foreach ($this->mapel as $mapel) {
            $total += $mapel->pivot->nilai;
            $hitung++;

            return round($total/$hitung);
        }
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
