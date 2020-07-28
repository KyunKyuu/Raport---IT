@extends('layouts/auth')

@section('content')
 <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                            {{Form::open(['url' => '/registerGuru/post', 'class' => 'register-form'])}}
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                               <input type="text" name="nama" id="name" placeholder="Nama Lengkap" value="{{@old('nama')}}" />
                                @error('nama')
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
                                <label for="telpon"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="telpon" id="telpon" placeholder="Nomor Telepon" value="{{@old('telpon')}}"/>
                                @error('telpon')
                                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="mapel"><i class="zmdi zmdi-list-door"></i></label>
                                <input type="mapel" name="mapel" id="mapel" placeholder="Mata Pelajaran yang diajar" value="{{@old('mapel')}}"/>
                                 @error('mapel')
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