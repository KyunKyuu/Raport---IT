<?php

use App\Student;
use App\Guru;
use App\Category;

function ranking5Besar()
{
	$siswa = Student::all();
	$siswa->map(function($satu){
		$satu->rataRataNilai = $satu->ratanilai();
		return $satu;
	});
	$siswa = $siswa->sortByDesc('rataRataNilais')->take(5);
	return $siswa;
}

function totalSiswa()
{
	return Student::count();
}

function totalGuru()
{
	return Guru::count();
}


function totalCategory()
{	
	
	return Category::count();
}