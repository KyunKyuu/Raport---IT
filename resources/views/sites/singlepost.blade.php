@extends('layouts/frontend')

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
				   					<h1>News</h1>
				   					<h2 class="breadcrumbs"><span><a href="index.html">Home</a></span> | <span>News</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

	
		
		<div class="colorlib-classes">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row row-pb-lg">
							<div class="col-md-12 animate-box">
								<div class="classes class-single">
									<div class="classes-img" style="background-image: url('{{$post->thumbnail()}}');">
									</div>
									<br>	
									
									<i class="lnr lnr-user" style="font-size: 20px;"> {{$post->user->name}} </i> &nbsp; 
									<i class="lnr lnr-user" style="font-size: 20px;"> {{$post->user->role}} </i>&nbsp;
									<i class="lnr lnr-clock" style="font-size: 20px;"> {{$post->created_at->diffForHumans()}} </i>


									<div class="desc desc2">
										<h3>{{$post->title}}</h3>
										<p>{!! $post->content !!}.</p>
										<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
										<blockquote>
											The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
										</blockquote>
										<h3>Some Features</h3>
										<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>

										<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
										
									</div>
								</div>
							</div>
						</div>
						
				
						
					</div>

					<!-- SIDEBAR: start -->
					<div class="col-md-4 animate-box">
						<div class="sidebar">
							<div class="side">
								<h3 class="sidbar-heading">Category</h3>
								<div class="block-26">
				               <ul>
				               	<li><a  href="/article/categories/{{ $post->category->slug }}" > {{$post->category->nama}}</a></li>
				             	</ul>
				            </div>
							</div>
							<br>


						<div class="side">
								<h3 class="sidbar-heading">Tags</h3>
								<div class="block-26">
				               <ul>
				               	@foreach($post->tags as $tag)
				                	<li><a href="/article/tags/{{$tag->slug}}">{{$tag->nama}}</a></li>
				                @endforeach
				             	</ul>
				            </div>
							</div>
							<br>
							<div class="side">
								<h3 class="sidebar-heading">Recent Blog</h3>
								@foreach($post_baru as $pb)
								<div class="f-blog">
									<a href="{{route('site.single.post', $pb->slug)}}" class="blog-img" style="background-image: url('{{$pb->thumbnail()}}');">
									</a>
									<div class="desc">
										<p class="admin"><span>{{$pb->created_at->diffForHumans()}}</span></p>
										<h2><a href="{{route('site.single.post', $pb->slug)}}">{{Str::limit($pb->title, '17', '..')}}</a></h2>
										<i class="admin lnr lnr-user"><span> {{$pb->user->name}}</span></i>
									</div>
								</div>
								@endforeach
							</div>
							
						</div>
					</div>
				</div>
			</div>	
		</div>
	

@endsection