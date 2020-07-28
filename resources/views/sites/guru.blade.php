@extends('layouts.frontend')

@section('content')
		
	<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Our Instructors</h1>
				   					<h2 class="breadcrumbs"><span><a href="index.html">Home</a></span> | <span>Instructor</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-trainers">
			<div class="container">
				<div class="row row-pb-md">
				@foreach($guru as $gr)
					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="desc">
								<h3>{{$gr->nama}}</h3>
								<span>instructor</span>
							</div>
							<div class="trainer-img" style="background-image: url('{{$gr->getAvatar()}}')"></div>
							<div class="desc">
								<p>
									<ul class="colorlib-social-icons">
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-linkedin"></i></a></li>
										<li><a href="#"><i class="icon-dribbble"></i></a></li>
									</ul>
								</p>
								<p>{{$gr->telpon}}</p>
							</div>
						</div>
				</div>
				@endforeach
			</div>
				<div class="text-center">{{$guru->links()}}</div>
		</div>
	</div>
		@endsection
		

				