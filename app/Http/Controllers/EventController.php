<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventController extends Controller
{
    public function index()
    {
    	$events = Event::paginate(10);
    	return view('Admin/event/index', compact('events'));
    }

    public function add()
    {
    	return view('Admin/event/add');
    }

    public function create(Request $request)
    {
    	$request->validate([
    		'title' => 'required',
    		'content' => 'required',
    		'oleh' => 'required',
    		'tanggal' => 'required',
    		'bulan' => 'required',
    		'tempat' => 'required'
    	]);

    	$event = Event::create([
    		'title' => $request->title,
    		'content' => $request->content,
    		'oleh' => $request->oleh,
    		'tanggal' => $request->tanggal,
    		'bulan' => $request->bulan,
    		'tempat' => $request->tempat,
    		'thumbnail' => $request->thumbnail
    	]);

    	return redirect('/events')->with('pesan','Event telah berhasil ditambahkan');
    }

}
