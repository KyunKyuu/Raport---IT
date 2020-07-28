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
				   					<h1>Upcoming events</h1>
				   					<h2 class="breadcrumbs"><span><a href="index.html">Home</a></span> | <span>Events</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		
		
		<div class="colorlib-event">
			<div class="container">
				<div class="row">
					@foreach($events as $event)
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<div class="event-entry animate-box">
									<div class="desc">
										<p class="meta"><span class="day">{{$event->tanggal}}</span><span class="month">J{{$event->bulan}}</span></p>
										<p class="organizer"><span>Penyelenggara:</span> <span>{{$event->oleh}}</span></p>
										<h2><a href="event.html">{{$event->title}}</a></h2>
									</div>
									<div class="location">
										<span class="icon"><i class="icon-map"></i></span>
										<p>{{$event->tempat}}</p>
									</div>
								</div>
								
				</div>
			</div>
		</div>
		@endforeach
		<div class="text-center">{{$events->links()}}</div>
	</div>
</div>
</div>
@endsection