<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('dashboards.index');
    }

    public function profilesaya()
    {
    	$siswa = auth()->user()->student;
    	
    	return view('dashboards/profilesaya', compact('siswa'));
    }
}
