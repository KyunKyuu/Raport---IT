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
				   					<h2 class="breadcrumbs"><span><a href="index.html">Home</a></span> | <span>
				   				@isset($category)
				   					Artikel | Category | {{$category->nama}}
				   				@else
				   					Artikel
				   				@endisset
				   				</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

	
		
		<div class="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						@foreach($posts as $post)
						<div class="block-21 d-flex animate-box">
			            <a href="{{route('site.single.post', $post->slug)}}" class="blog-img" style="background-image: url('{{$post->thumbnail()}}');"></a>
			            <div class="text">
			               <h3 class="heading"><a href="{{route('site.single.post', $post->slug)}}">{{$post->title}}</a></h3>
			               <div>{!! Str::limit($post->content, 90, '.') !!}</div>
			               <div class="meta">
			                  <div><span class="icon-clock"> </span> {{$post->created_at->diffForHumans()}}</div>
			                  <div><span class="icon-user2"></span> {{$post->user->name}}</div>
			                  <div><a href="{{route('site.single.post', $post->slug)}}"> Baca Selengkapnya <span class="icon-arrow-right"></span></a></div>
			              	<hr/>
			              	
			               </div>
			            </div>
			         </div>
			         @endforeach
			         <br/><div class="text-center">{{$posts->links()}}</div>
			         

			       	</div>

					<!-- SIDEBAR: start -->
					<div class="col-md-4 animate-box">
						<div class="sidebar">
							<div class="side">
								<h3 class="sidebar-heading">Categories</h3>
								<div class="block-24">
				               <ul>
				               	@foreach($categorySide as $cg)
				                  <li><a href="/article/categories/{{$cg->slug}}">{{$cg->nama}} <span>{{totalCategory()}}</span></a></li>
				        		@endforeach
				               </ul>
				            </div>
							</div>

							<div class="side">
								<h3 class="sidbar-heading">Tags</h3>
								<div class="block-26">
				               <ul>
				               	@foreach($tags as $tag)
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