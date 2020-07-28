@extends('layouts/auth')

@section('content')
 <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Pilih Role mu</h2>
                            
                       
                           
                         
                            <div class="form-group form-button">       
                            <a href="{{url('/registerGuru')}}" class="form-pilihan">
                                I'm Teacher</a>
                            </div>
                         
                             <div class="form-group form-button">       
                                <a href="{{url('/register')}}" class="form-pilihan">I'm Student</a>
                            </div>

                           
                       
                    </div>
                    <div class="signup-image">
                        <figure><img src="auth/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{url('/login')}}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
@endsection