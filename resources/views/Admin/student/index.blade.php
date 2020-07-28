@extends('layouts/main')

@section('title', 'Test euy')

@section('content')

		<!-- Table -->
		<h3 class="page-title">Daftar Pelajar</h3>
		<div class="row">
			
			<a href="/student/exportExcel" class="btn btn-sm btn-success"><i class="fa fa-download"> Export Excel</i></a>
			&nbsp;
			<a href="/student/exportPdf" class="btn btn-sm btn-danger"><i class="fa fa-download"> Export PDF</i></a>
			&nbsp;
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importSiswa"><i class="fa fa-upload"> Import Excel</i></button> 
			<div class="col-md">
			<div class="panel">
				<div class="panel-heading">
					@if( session('pesan'))
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<i class="fa fa-check-circle"></i> {{ session('pesan')}}
			</div>
				

			@endif
						</div>
						<div class="panel">
						
							
						<div class="panel-heading">
							<div class="right col-md-4">
						<form method="get" action="/student">
							<div class="input-group">
								<input class="form-control" type="search" placeholder="cari" name="cari" aria-label="search">
								<span class="input-group-btn"><button type="submit"><i class="fa fa-search"></i></button></span>
							</div>
						</form>	
							</div>
							<button type="button" class="btn tombolTambahData" data-toggle="modal" data-target="#fromModal"><i class="lnr lnr-plus-circle">  Tambah Data</i></button> 
						</div>
						<div class="panel-body">
									
							<table class="table table-hover">
								<thead>
									<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Nis</th>
									<th>Kelas</th>
									<th>Aksi</th>
									
									</tr>
								</thead>
					
								<tbody>
								@foreach( $students as $student )
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $student->nama }}</td>	
										<td>{{ $student->nis}}</td>
										<td>{{ $student->kelas}}</td>
										<td><a href="/student/{{ $student->id }}" class="btn btn-info float-right"><i class="fa fa-search"> Detail</i></a></td>
									</tr>
								@endforeach
								</tbody>
							</table>
							{{$students->links()}}
			</div>
			</div>
			</div>
		</div>

			<div class="modal fade" id="importSiswa" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="judulModal">Tambah Data</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      		<div class="modal-body">
	       			{!!Form::open(['route' => 'siswa_import', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data'])!!}

	       			{!!Form::file('data_siswa')!!}
	      		</div>
	           <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <input type="submit" class="btn btn-primary" value="Import" />
	   		</form>
	      </div>    
	    
	  </div>
	</div>
	</div>


		<div class="modal fade" id="fromModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="/student" method="post">
		   		@csrf
          <input type="hidden" name="id" id="id">
        	<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control @error('nama') is-invalid @enderror"  name="nama" value= "{{ old('nama') }}">
			    @error('nama')
			    <div class="invalid-feedback">{{ $message }}</div>
			    @enderror
			  	</div>
			  	<div class="form-group">
			    <label for="nis">Nis</label>
			    <input type="number" class="form-control @error('nis') is-invalid @enderror"  name="nis" value= "{{ old('nis') }}">
			  	 @error('nis')
			    <div class="invalid-feedback">{{ $message }}</div>
			    @enderror
			  	</div>
			  		<div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value= "{{ old('email') }}">
			  	 @error('email')
			    <div class="invalid-feedback">{{ $message }}</div>
			    @enderror
			  	</div>
			  	<div class="form-group">
			    <label for="kelas">kelas</label>
			    <input type="text" class="form-control @error('kelas') is-invalid @enderror"  name="kelas"  value= "{{ old('kelas') }}">
			     @error('kelas')
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



	</div>

@endsection
