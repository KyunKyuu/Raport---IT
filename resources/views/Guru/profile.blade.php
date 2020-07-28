@extends('layouts/main')

@section('title', 'Detail pelajar')
@section('xtable')
<link rel="stylesheet" href="/assets/css/bootstrap-editable.css">
@endsection
@section('content')
		
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										
										<h3 class="name">{{$guru->nama}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								
									
									
									
									
								
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								@if( session('sukses'))
								<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<i class="fa fa-check-circle"></i> {{ session('sukses')}}
								</div>
								@elseif(session('error'))
								<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<i class="fa fa-times-circle"></i> {{ session('error')}}
								</div>

			@endif
							
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Mata Pelajaran Yang Diajar Oleh Guru <b>{{$guru->nama}}</b></h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											
											<tr>
												
												
												<th>Nama</th>
												<th>Semester</th>
											
											</tr>
										</thead>
										<tbody>
											@foreach($guru->mapel as $mapel)
											<tr>
												<td>{{$mapel->nama}}</td>
												<td>{{$mapel->semester}}</td>
												
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
@section('tablex')
<script src="/assets/js/bootstrap-editable.min.js"></script>
<script>
	$(document).ready(function() {
    $('.nilai').editable();
});
</script>
@endsection