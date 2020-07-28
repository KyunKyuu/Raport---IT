@extends('layouts/auth')

@section('content')
 <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                           <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                               <input type="text" name="nama" id="name" placeholder="Nama Lengkap" value="{{@old('nama')}}" />
                                @error('nama')
                                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nis"><i class="zmdi zmdi-card"></i></label>
                                <input type="number" name="nis" id="nis" placeholder="Nomer Induk Siswa" value="{{@old('nis')}}"/>
                                @error('nis')
                                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Masukan Email" value="{{@old('email')}}"/>
                                 @error('email')
                                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kelas"><i class="zmdi zmdi-list-door"></i></label>
                                <select type="kelas" name="kelas_id" id="kelas" placeholder="Masukan Kelas">  
                                     
                                     <option disabled selected>Pilih Kelas</option>
                                    <option value="3">X TKJ 1</option>
                                </select>
                                 @error('kelas')
                                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" />
                                 @error('password')
                                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                           <!--  <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <button type="submit" class="form-submit">Register</button>
                            </div>
                       {{Form::close()}}
                    </div>
                    <div class="signup-image">
                        <figure><img src="auth/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{url('/login')}}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
@endsection