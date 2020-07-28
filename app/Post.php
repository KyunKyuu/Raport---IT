<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
   use Sluggable;

   protected $fillable = ['user_id', 'title', 'content', 'slug', 'thumbnail', 'category_id'];
	 protected $dates = ['created_at'];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

   public function user()
   {
   		return $this->belongsTo(User::class);
   }

   public function thumbnail()
   {
   		return !$this->thumbnail ? asset('no-thumbnail.jpg') : $this->thumbnail;
   }

   public function category()
   {
    return $this->belongsTo(Category::class);
   }

   public function tags()
   {
    return $this->belongsToMany(Tag::class);
   }

}
