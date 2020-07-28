<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Category, Post, Tag};


class CategoryController extends Controller
{
    public function show(Category $category)
    {
    	 $posts = $category->posts()->latest()->paginate(4);
    	 $post_baru = Post::latest()->take(4)->get();
    	$categorySide = \App\Category::latest()->take(5)->get();
        $tags = \App\Tag::latest()->take(5)->get();
    	return view('sites/article', compact('tags','posts','post_baru','category', 'categorySide'));
    }

    public function showTags(Tag $tag)
    {
    	 $posts = $tag->posts()->latest()->paginate(4);
    	 $post_baru = Post::latest()->take(4)->get();
    	$categorySide = \App\Category::latest()->take(5)->get();
        $tags = \App\Tag::latest()->take(5)->get();
    	return view('sites/article', compact('tags','posts','post_baru','tag','categorySide'));
    }


}
