@extends('layouts/frontend')

@section('content')
<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(/frontend/images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-xs-12 col-md-pull-1 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1>{{config('sekolah.judul')}} <br> {{config('sekolah.judul1')}}</h1>
				   						<h3 style="color: white;">{{config('sekolah.subjudul')}}</h3>
					   					<p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary btn-lg popup-vimeo"><span class="icon"><i class="icon-play3"></i></span>{{config('sekolah.vidio')}}</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   
			  	</ul>
		  	</div>
</aside>

		<div class="colorlib-search">
			<div class="container">
				<div class="row">
					<div class="col-md-12 search-wrap">
					<div class="search-wrap-2">
					<div class="row">
						<div class="col-md-2 col-sm-6 text-center animate-box">
								<a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-desktop"></i>
									</span>
									<div class="desc">
										<h3>{{config('sekolah.jurusan1')}}</h3>
									</div>
								</a>
							</div>
							<div class="col-md-2 col-sm-6 text-center animate-box">
								<a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-layers"></i>
									</span>
									<div class="desc">
										<h3>{{config('sekolah.jurusan2')}}</h3>
									</div>
								</a>
							</div>
							<div class="col-md-2 col-sm-6 text-center animate-box">
								<a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-smartphone"></i>
									</span>
									<div class="desc">
										<h3>{{config('sekolah.jurusan3')}}</h3>
									</div>
								</a>
							</div>
							<div class="col-md-2 col-sm-6 text-center animate-box">
								<a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-laboratory"></i>
									</span>
									<div class="desc">
										<h3>{{config('sekolah.jurusan4')}}</h3>
									</div>
								</a>
							</div>
							<div class="col-md-2 col-sm-6 text-center animate-box">
								<a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-computer-graphic"></i>
									</span>
									<div class="desc">
										<h3>{{config('sekolah.jurusan5')}}</h3>
									</div>
								</a>
							</div>
							<div class="col-md-2 col-sm-6 text-center animate-box">
								<a href="services.html" class="services">
									<span class="icon">
										<i class="flaticon-video-player"></i>
									</span>
									<div class="desc">
										<h3>{{config('sekolah.jurusan6')}}</h3>
									</div>
								</a>
							</div>

					</div>
		            </div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-12 services-wrap">
						
					</div>
					<div class="col-md-12 text-center animate-box">
						<p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary btn-outline btn-lg btn-discover popup-vimeo"><span class="icon"><i class="icon-play3"></i></span>{{config('sekolah.vidiojurusan')}}</a></p>
					</div>
				</div>
			</div>
		</div>
		
		
		<div id="colorlib-counter" class="colorlib-counters">
			<div class="container">
				<div class="col-md-6">
					<div class="about-desc">
						<div class="about-img-1 animate-box" style="background-image: url(/frontend/images/about-img-2.jpg);"></div>
						<div class="about-img-2 animate-box" style="background-image: url(/frontend/images/about-img-1.jpg);"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12 colorlib-heading animate-box">
							<h1 class="heading-big">Tentang</h1>
							<h2>Tentang SMKN Bandung</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<p><strong>Leading, Inovative, Modern, Aware</strong></p>
							<p>SMK Negeri 5 Bandung merupakan sekolah menengah kejuruan negeri yang berada di Kota Bandung, Jawa Barat, Indonesia. Berlokasi di Jalan Bojongkoneng No. 37A RT 01 RW 13, Kelurahan Sukapada, Kecamatan Cibeunying Kidul, Kota Bandung[1]. Masa pendidikan di SMK Negeri 5 Bandung ditempuh dalam waktu tiga tahun pelajaran, mulai dari kelas X hingga kelas XII, seperti pada umumnya masa pendidikan sekolah menengah kejuruan di Indonesia.</p>
						</div> 

						<div class="col-md-6 col-sm-6 animate-box">
							<div class="counter-entry">
								<div class="desc">
									<span class="colorlib-counter js-counter" data-from="0" data-to="{{totalSiswa()}}" data-speed="5000" data-refresh-interval="50"></span>
									<span class="colorlib-counter-label">Siswa</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 animate-box">
							<div class="counter-entry">
								<div class="desc">
									<span class="colorlib-counter js-counter" data-from="0" data-to="{{totalGuru()}}" data-speed="5000" data-refresh-interval="50"></span>
									<span class="colorlib-counter-label">Guru</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 animate-box">
							<div class="counter-entry">
								<div class="desc">
									<span class="colorlib-counter js-counter" data-from="0" data-to="6" data-speed="5000" data-refresh-interval="50"></span>
									<span class="colorlib-counter-label">Jurusan</span>
								</div>
							</div>
							
						</div>
						<div class="col-md-6 col-sm-6 animate-box">
							<div class="counter-entry">
								<div class="desc">
									<span class="colorlib-counter js-counter" data-from="0" data-to="1200" data-speed="5000" data-refresh-interval="50"></span>
									<span class="colorlib-counter-label">Countries</span>
								</div>
							</div>
						</div>
					<a href="" class="btn btn-sm btn-primary">Lihat Selengkapnya </a>

				
					</div>
				</div>
			</div>
		</div>

				<br><br><br><br>		
		<div class="colorlib-search">
			<div class="container">
				<div class="row">
					<div class="col-md-12 search-wrap">
					<div class="search-wrap-2" style="background-color: #dbdbdb;">
					<div class="row">
						<div class="col-md-5">
						<div class="about-desc">
							<div class="about-img-1 animate-box" style="background-image: url(/frontend/images/about-img-2.jpg);"></div>
						</div>
						</div>
						<div class="col-md-7">
					<div class="row">
						<div class="col-md-12 colorlib-heading animate-box">
							<h1 class="heading-big">Sambutan</h1>
							<alert class="alert alert-succsess"><h2>Sambutan Kepala Sekolah</h2></alert>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<p>
							Assalamu'alaikum Wr. Wb. 
							Semoga dengan kehadiran Website ini akan terjalin informasi, komunikasi antar alumni khususnya sebagai salah satu upaya sekolah mendapatkan informasi akan penelusuran tamatan/ alumni dimana saja berada. Dapat memperoleh informasi dengan cepat sehingga dapat mengikuti perkembangan dalam pengetahuan yang berkembang dengan cepat pula. 
							Demikian dan terima kasih.
							</p>
						</div> 
						
					</div>
				</div>
					</div>
		            </div>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-trainers">
			<div class="container">
				<div class="row">
					<div class="col-md-12 colorlib-heading center-heading text-center animate-box">
						<h1 class="heading-big">Guru</h1>
						<h2>Guru Guru</h2>
					</div>
				</div>
				<div class="row">
					

				
					@foreach($guru as $gr)
					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="desc">
								<h3>{{$gr->nama}}</h3>
							<span>Guru</span>
					
							</div>
							<div class="trainer-img" style="background-image: url('{{$gr->getAvatar()}}')"></div>
						</div>
					</div>
					@endforeach
					<div id="colorlib-services">
					<div class="col-md-12 text-center animate-box">
						<p><a href="{{url('/guru')}}" class="btn btn-primary btn-outline btn-lg btn-discover"><span class="icon"><i class="icon-users"></i></span>Lihat Lebih Banyak</a></p>
					</div>
				</div>
				</div>
			</div>
		</div>

		<div class="colorlib-classes">
			<div class="container">
				<div class="row">
					<div class="col-md-12 colorlib-heading center-heading text-center animate-box">
						<h1 class="heading-big">Berita Terbaru</h1>
						<h2>Berita Terbaru</h2>
					</div>
				</div>
				<div class="row">
					@foreach($posts as $post)
					<div class="col-md-4 animate-box">
						<div class="classes">
						
							<div class="classes-img" style="background-image: url('{{$post->thumbnail()}}');">
							</div>
							<div class="wrap">
								<div class="desc">
									
									<h3 class="heading"><a href="{{route('site.single.post', $post->slug)}}">{{$post->title}}</a></h3>
									<div class="text">
										<p >{!! Str::limit($post->content, 35, '.') !!}</p>
										<a href="{{route('site.single.post', $post->slug)}}">Baca Selengkapnya <i class="lnr lnr-arrow-right-circle"></i></a>
									</div>
								</div>
									
								<div class="pricing">
									<p><span><i class="lnr lnr-user">  {{$post->user->name}}</i> &nbsp; &nbsp;</span> <span><i class="lnr lnr-clock">  {{$post->created_at->diffForHumans()}}</i></span>
									&nbsp; </p>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
				<div id="colorlib-services">
					<div class="col-md-12 text-center animate-box">
						<p><a href="{{url('/article')}}" class="btn btn-primary btn-outline btn-lg btn-discover" target="_blank"><span class="icon"><i class="icon-file"></i></span>Lihat Lebih banyak Artikel</a></p>
					</div>
				</div>
			</div>	
		</div>

		<div class="colorlib-event">
			<div class="container">
				<div class="row">
						<div class="col-md-12 colorlib-heading animate-box text-center">
							<h1 class="heading-big text-center">Events</h1>
							<h2 style="text-align: center;">Upcoming Events</h2>
						</div>
						@foreach($events as $event)
					<div class="col-md-6 row-pb-md">
						<div class="row">
							<div class="col-md-12">
								<div class="event-entry animate-box">
									<div class="desc">
										<p class="meta"><span class="day">{{$event->tanggal}}</span><span class="month">{{$event->bulan}}</span></p>
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
				</div> 
				<div id="colorlib-services">
					<div class="col-md-12 text-center animate-box">
						<p><a href="{{url('/event')}}" class="btn btn-primary btn-outline btn-lg btn-discover" target="_blank"><span class="icon"><i class="icon-bullhorn"></i></span>Lihat Lebih Banyak</a></p>
					</div>
				</div>
			</div>
		</div>


		
	
		<div id="colorlib-subscribe" class="subs-img" style="background-image: url(/frontend/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Subscribe Newsletter</h2>
						<p>Subscribe our newsletter and get latest update</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="col-md-12">
							<form class="form-inline qbstp-header-subscribe">
								<div class="col-three-forth">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
									</div>
								</div>
								<div class="col-one-third">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Subscribe Now</button>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection