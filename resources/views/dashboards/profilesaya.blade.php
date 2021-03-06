@extends('layouts/main')

@section('title', 'Detail pelajar')

@section('content')
		
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{$siswa->getAvatar()}}" class="img-circle shadow" alt="Avatar" width="115">
										<h3 class="name">{{$siswa->nama}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												{{$siswa->mapel->count()}} <span>Mapel</span>
											</div>
											<div class="col-md-4 stat-item">
												{{$siswa->ratanilai()}} <span>Nilai Rata Rata </span>
											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Nis <span>{{$siswa->nis}}</span></li>
											<li>Email <span>{{auth()->user()->email}}</span></li>
											<li>Kelas <span>{{$siswa->kelas->nama}}</span></li>
											<li>Dibuat <span>{{$siswa->created_at->format('d F Y')}}</span></li>
											<li>Website <span><a href="https://www.themeineed.com">www.themeineed.com</a></span></li>
										</ul>
									</div>
									
										<div class="text-center d-inline">
										<a href="/siswa/{{$siswa->id}}/edit" class="btn facebook-bg"><i class="fa fa-edit" style="color:white;"> Edit Profile</i></a>
									</div>
								
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								
							
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Riwayat Nilai</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											
											<tr>
												
												<th>Kode</th>
												<th>Nama</th>
												<th>Semester</th>
												<th>Nilai</th>
												<th>Guru</th>
												
											</tr>
										</thead>
										<tbody>
											@foreach ($siswa->mapel as $mapel)
											<tr>
												<td>{{$mapel->kode}}</td>
												<td>{{$mapel->nama}}</td>
												<td>{{$mapel->semester}}</td>
												<td><a href="#" class="nilai" data-type="text" data-pk="{{$mapel->id}}" data-url="/api/student/{{$siswa->id}}/editnilai" data-title="Masukan Nilai">{{$mapel->pivot->nilai}}</a></td>
												<td><a href="/guru/{{$mapel->guru_id}}/profile">{{$mapel->guru->nama}}</a></td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
							</div>
						</div>
					</div>
				
			

@endsection
