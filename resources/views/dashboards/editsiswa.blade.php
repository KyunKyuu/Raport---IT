@extends('layouts/main')

@section('title', 'edit data')

@section('content')

					<h3 class="page-title">Edit Data</h3>
					<div class="row col-md-8">
						<div class="panel">
								<div class="panel-body">
	
		   
		   	<form action="/siswa/{{$student->id}}" method="post" enctype="multipart/form-data">
		   		@csrf
		   		@method('patch')
		   		
				<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control @error('nama') is-invalid @enderror"  name="nama" value= "{{ $student->nama }}">
			    @error('nama')
			    <div class="invalid-feedback">{{ $message }}</div>
			    @enderror
			  	</div>
			  
			  	<div class="form-group">
			    <label for="nis">Nis</label>
			    <input type="text" class="form-control @error('nis') is-invalid @enderror"  name="nis" value= "{{ $student->nis }}">
			  	 @error('nis')
			    <div class="invalid-feedback">{{ $message }}</div>
			    @enderror
			  	</div>
			  	<div class="form-group">
			    <label for="kelas">kelas</label>
			    <input type="text" class="form-control @error('kelas') is-invalid @enderror"  name="kelas"  value= "{{ $student->kelas }}">
			     @error('kelas')
			    <div class="invalid-feedback">{{ $message }}</div>
			    @enderror
			  	</div>
			  	<div class="form-group">
			    <label for="avatar">Foto Profile</label>
			    <input type="file" class="form-control"  name="avatar"  value= "{{ $student->avatar }}">
		
			  	</div>
			  <button type="submit" class="btn btn-primary">
			  	Edit Data
			  </button>
			</form>
		</div>

</div>
</div>


	@endsection