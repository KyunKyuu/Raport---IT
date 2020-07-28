<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Post, Category, Tag};

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::paginate(10);
    	return view('Admin/post/index', compact('posts'));
    }


    public function add()
    {
    	return view('Admin/post/add', [
            'post' => new Post(),
            'categories' => Category::get(),
            'tags' => Tag::get()
        ]);
    }

    public function create(Request $request)
    {

    	// $posts = Post::create([
    	// 	'title' => $request->title,
    	// 	'content' => $request->content,
    	// 	'user_id' => auth()->user()->id,
    	// 	'thumbnail' => $request->thumbnail
    	// ]);
        
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);

        $attr = $request->all();
        $attr['user_id'] = auth()->user()->id;
        $attr['category_id'] = Request('category'); 
        $attr['slug'] = \Str::slug(Request('title'));
        $post = Post::create($attr);


        $post->tags()->attach(Request('tags'));

    	return redirect('/posts')->with('pesan','Artikel telah berhasil ditambahkan');
    }


     public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin/post/edit', [
            'post' =>  $post,
            'categories' => Category::get(),
            'tags' => Tag::get()
        ]);
    }

    public function update(Request $request,$id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);

        $attr = $request->all();
        $attr['user_id'] = auth()->user()->id;
        $attr['category_id'] = Request('category'); 
         $attr['slug'] = \Str::slug(Request('title'));
        $post->update($attr);
        $post->tags()->sync(Request('tags'));

        return redirect('/posts')->with('pesan', 'Artikel berhasil diubah');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->tags()->detach();
        $post->delete();
        return redirect()->back()->with('pesan', 'Artikel berhasil dihapus');

    }


    public function postGuru()
    {
        $guru = auth()->user()->id;
        $posts = Post::whereUserId($guru)->paginate(10);
        return view('Guru/post/index', compact('posts'));
    }

    public function PostGuruAdd()
    {
        return view('Guru/post/add', [
            'post' => new Post(),
            'categories' => Category::get(),
            'tags' => Tag::get()
        ]);
    }

    public function PostGuruCreate(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);

        $attr = $request->all();
        $attr['user_id'] = auth()->user()->id;
        $attr['category_id'] = Request('category'); 
        $attr['slug'] = \Str::slug(Request('title'));
        $post = Post::create($attr);


        $post->tags()->attach(Request('tags'));

        return redirect('/guru/posts')->with('pesan','Artikel telah berhasil ditambahkan');
    }

    public function PostGuruEdit(Post $post)
    {
        
       
        if(auth()->user()->id == $post->user_id){
       
        return view('Guru/post/edit', [
            'post' =>  $post,
            'categories' => Category::get(),
            'tags' => Tag::get()
        ]);
        }else{
            return redirect()->back();
        }
    }

    public function PostGuruUpdate(Request $request, Post $post)
    {
        

        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);

        $attr = $request->all();
        $attr['user_id'] = auth()->user()->id;
        $attr['category_id'] = Request('category'); 
        $attr['slug'] = \Str::slug(Request('title'));
        $post->update($attr);
        $post->tags()->sync(Request('tags'));


        return redirect('/guru/posts')->with('pesan', 'Artikel berhasil diubah');
    }

    public function PostGuruDelete($id)
    {
    
        $post = Post::findOrFail($id);
        $post->tags()->detach();
        $post->delete();
        return redirect()->back()->with('pesan', 'Artikel berhasil dihapus');

    }

    
}
