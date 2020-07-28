<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function editnilai(Request $request,$student)
    {
    	$siswa = \App\Student::find($student);
    	$siswa->mapel()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
}
