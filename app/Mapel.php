<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['nama', 'semester', 'guru_id'];

     public function student()
    {
    	return $this->belongsToMany(Student::class)->withPivot(['nilai']);
    }

    public function guru()
    {
    	return $this->belongsTo(Guru::class);
    }
}
