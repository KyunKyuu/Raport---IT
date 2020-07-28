<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\{Post, Event, Guru, Mapel};


class SiteController extends Controller
{
    public function home()
    {
    	$posts = Post::latest()->take(3)->get();
        $events = Event::latest()->take(4)->get();
        $guru = Guru::latest()->take(4)->get();
        
       
    	return view('sites/home', compact('posts', 'events', 'guru'));
    }

    public function singlepost(Post $post)
    {
    	// $post = Post::where('slug','=',$slug)->firstOrFail();
        $post_baru = Post::latest()->take(4)->get();
    	return view('sites/singlepost', compact('post', 'post_baru'));
    }

    public function article()
    {
        $posts = Post::latest()->paginate(4);
        $post_baru = Post::latest()->take(4)->get();
         $categorySide = \App\Category::latest()->take(5)->get();
        $tags = \App\Tag::latest()->take(5)->get();
        return view('sites/article', compact('posts', 'post_baru', 'categorySide', 'tags'));
    }
       
    public function event()
    {
        $events = Event::latest()->paginate(6);
        return view('sites/event', compact('events'));
    }

    public function guru()
    {
        $guru = guru::latest()->paginate(8);
        return view('sites/guru', compact('guru'));
    }
}
