@extends('layouts/main')

@section('title', 'Dashboard')

@section('content')
	<div class="profile-left">
<div class="panel"> 
<div class="panel-body">
		<br><br>
	<div class="metric">
		<span class="icon"><i class="lnr lnr-users"></i></span>
			<p>
			<span class="number">{{totalSiswa()}}</span>
			<span class="title">Siswa</span>
			</p>
	</div>



	<div class="metric">
		<span class="icon"><i class="lnr lnr-user"></i></span>
			<p>
			<span class="number">{{totalGuru()}}</span>
			<span class="title">Guru</span>
			</p>
	</div>
</div>
</div>
</div>
<div class="profile-right">
<div class="panel">
	<div class="panel-heading">
	<h3 class="panel-title">Daftar Ranking 5 Besar</h3>
	<div class="right">
	<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
	<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
	</div>
	</div>
	<div class="panel-body">
	<ul class="list-unstyled task-list">
								
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Nama</th>
												<th>Nilai Rata-Rata</th>
												
											</tr>
										</thead>
										<tbody>
											@foreach(ranking5Besar() as $ranking)
											<tr>
												<td><b>{{$loop->iteration}}</b></td>
												<td>{{$ranking->nama}}</td>
												<td>{{$ranking->rataRataNilai}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</ul>
							</div>
								</div>
							</div>
					
							
@endsection