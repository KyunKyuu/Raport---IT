<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\{Student,Guru,Kelas};
use Auth;
class AuthController extends Controller
{
    public function login()
    {
      $kelas = Kelas::get();
    	return view('auth.login', compact('kelas'));
    }

    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/dashboard');
    	}

    	return redirect('/login');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }

    public function pilihan()
    {
        return view('auth.pilihan');
    }

    public function register()
    {
        $kelas = \App\Kelas;
        return view('auth/register',);
    }

     public function registerGuru()
    {
        return view('auth/registerGuru');
    }

    public function postregister(Request $request)
    {
         $request->validate([
            'nama' => 'required',
            'nis' => 'required|numeric',
            'email' => 'required|unique:users|email',
            'kelas' => 'required',
            'password' => 'required'

        ]);
       // inser ke tabel user
       $user = new \App\User;
       $user->role = 'siswa';
       $user->name = $request->nama;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->remember_token = Str::random(100);
       $user->save(); 

        // insert ke tabel student
       $request->request->add(['user_id'=>$user->id]);
       $siswa = Student::create($request->all());
        
       return redirect('/login')->with('sukses', 'Mohon cek email untuk verifikasi akun anda');
    }

    public function postregisterGuru(Request $request)
    {
         $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users|email',
            'telpon' => 'required|numeric',
            'mapel' => 'required',
            'password' => 'required'

        ]);
       // inser ke tabel user
       $user = new \App\User;
       $user->role = 'guru';
       $user->name = $request->nama;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->remember_token = Str::random(100);
       $user->save(); 


        // insert ke tabel student
       $request->request->add(['user_id'=>$user->id]);
       $guru = Guru::create($request->all());

       $mapel = new \App\Mapel;
       $mapel->nama = $request->mapel;
       $mapel->semester = 'ganjil';
       $mapel->guru_id = $guru->id;
       $mapel->save();


       return redirect('/login')->with('sukses', 'Mohon cek email untuk verifikasi akun anda');
    }
}
