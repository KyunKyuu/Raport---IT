@extends('layouts/main')

@section('title', 'Detail pelajar')
@section('header')
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
										<img src="{{$student->getAvatar()}}" class="img-circle shadow" alt="Avatar" width="115">
										<h3 class="name">{{$student->nama}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												{{$student->mapel->count()}} <span>Mapel</span>
											</div>
											<div class="col-md-4 stat-item">
												{{$student->ratanilai()}} <span>Nilai Rata Rata </span>
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
											<li>Nis <span>{{$student->nis}}</span></li>
											<li>Email <span>{{$student->email}}</span></li>
											<li>Kelas <span>{{$student->kelas}}</span></li>
											<li>Dibuat <span>{{$student->created_at->format('d F Y')}}</span></li>
											<li>Website <span><a href="https://www.themeineed.com">www.themeineed.com</a></span></li>
										</ul>
									</div>
									<form action="/student/{{$student->id}}" method="post">
											@method('delete')
											@csrf
									
									
									<div class="text-center d-inline">
										<a href="/student/{{$student->id}}/edit" class="btn facebook-bg"><i class="fa fa-edit" style="color:white;"> Edit</i></a>
										<button type="submit" class="btn google-plus-bg" onclick="return confirm('Yakin ingin Dihapus?')"><i class="fa fa-trash" style="color:white;"> Hapus</i></button>
									    <a href="/student" class="btn github-bg"><i class="fa fa-arrow-left" style="color:white;"> Kembali</i></a>
									</div>
								</form>
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
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#fromModal"><i class="lnr lnr-pencil">  Tambah Nilai</i></button> 
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Riwayat Nilai</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											
											<tr>
												
												<th>#</th>
												<th>Nama</th>
												<th>Semester</th>
												<th>Nilai</th>
												<th>Guru</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($student->mapel as $mapel)
											<tr>
												<td>{{$loop->iteration}}</td>
												<td>{{$mapel->nama}}</td>
												<td>{{$mapel->semester}}</td>
												<td><a href="#" class="nilai" data-type="text" data-pk="{{$mapel->id}}" data-url="/api/student/{{$student->id}}/editnilai" data-title="Masukan Nilai">{{$mapel->pivot->nilai}}</a></td>
												<td><a href="/guru/{{$mapel->guru_id}}/profile">{{$mapel->guru->nama}}</a></td>
										<form action="/student/{{$student->id}}/{{$mapel->id}}/deletenilai" method="post">
											@method('delete')
											@csrf
												<td><button type="submit"  class="label label-danger" onclick="return confirm('Yakin ingin Dihapus?')">Hapus</button></td>
										</form>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
							</div>
						</div>
					</div>
				<div class="modal fade" id="fromModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Nilai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="/student/{{$student->id}}/addnilai" method="post">
		   		@csrf

		   		<div class="form-group">
		   			<label for="mapel">Pilih Mapel</label>
		   			<select class="form-control" id="mapel" name="mapel">
		   				@foreach($matapelajaran as $mp)
		   				<option value="{{$mp->id}}">{{$mp->nama}}</option>
		   				@endforeach
		   			</select>
		   		</div>

          <input type="hidden" name="id" id="id">
        	<div class="form-group">
			    <label for="nilai">Nilai</label>
			    <input type="text" class="form-control @error('nilai') is-invalid @enderror"  name="nilai" value= "{{ old('nilai') }}" placeholder="Masukan Nilai">
			    @error('nilai')
			    <div class="invalid-feedback">{{ $message }}</div>
			    @enderror
			  	</div>
			  	


        	
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
   
      </div>

       </form>
    </div>
  </div>
</div>


</div>
			

@endsection
@section('footer')
<script src="/assets/js/bootstrap-editable.min.js"></script>

<script>
	$(document).ready(function() {
    $('.nilai').editable();
});
</script>
@endsection