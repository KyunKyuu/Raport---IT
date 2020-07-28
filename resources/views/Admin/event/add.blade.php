@extends('layouts/main')

@section('title', 'Buat Event')
@section('header')
<style>
	.ck-editor__editable {
    min-height: 350px;
    max-height: 350px;
}
</style>
@endsection
@section('content')

		<!-- Table -->
		<h3 class="page-title">Tambah Event</h3>
		<div class="row">
			
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
			

			<div class="panel-body">	
				<div class="row">
					<div class="col-md-6">
				<form action="/event/create" method="post" enctype="multipart/form-data">
		   		@csrf
		   
		   		
				<div class="form-group">
			    <label for="title">Title</label>
			    <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" placeholder="Masukan Title" value="{{old('title')}}">
			    @error('title')
			    <small style="color: red;"><div class="invalid-feedback">{{ $message }}</div></small>
			    @enderror
			  	</div>

			  	<div class="form-group">
			    <label for="oleh">Penyelenggara</label>
			    <input type="text" class="form-control @error('oleh') is-invalid @enderror"  name="oleh" placeholder="Masukan nama penyelenggara" value="{{old('oleh')}}">
			    @error('title')
			     <small style="color: red;"><div class="invalid-feedback">{{ $message }}</div></small>
			    @enderror
			  	</div>

			  	<div class="form-group">
			    <label for="title">Title</label>
			    <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" placeholder="Masukan Title" value="{{old('title')}}">
			    @error('title')
			      <small style="color: red;"><div class="invalid-feedback">{{ $message }}</div></small>
			    @enderror
			  	</div>

			  	<div class="form-group">
			    <label for="tanggal">Tanggal</label>
			    <input type="number" class="form-control @error('tanggal') is-invalid @enderror"  name="tanggal" placeholder="Masukan tanggal" value="{{old('tanggal')}}">
			    @error('tanggal')
			      <small style="color: red;"><div class="invalid-feedback">{{ $message }}</div></small>
			    @enderror
			  	</div>

			  	<div class="form-group">
			    <label for="bulan">Bulan</label>
			    <select type="text" class="form-control @error('bulan') is-invalid @enderror"  name="bulan" placeholder="Masukan bulan" value="{{old('bulan')}}">
			    	<option>Januari</option>
			    	<option>Febuari</option>
			    	<option>Maret</option>
			    	<option>April</option>
			    	<option>Mei</option>
			    	<option>Juni</option>
			    	<option>Juli</option>
			    	<option>Agustus</option>
			    	<option>September</option>
			    	<option>Oktober</option>
			    	<option>November</option>
			    	<option>Desember</option>
				    </select>
					@error('bulan')
					 <small style="color: red;"><div class="invalid-feedback">{{ $message }}</div></small>
				    @enderror

			  	</div>
			    	<div class="form-group">
			    <label for="tempat">Tempat</label>
			    <input type="text" class="form-control @error('tempat') is-invalid @enderror"  name="tempat" placeholder="Masukan tempat" value="{{old('tempat')}}">
			    @error('tempat')
			     <small style="color: red;"><div class="invalid-feedback">{{ $message }}</div></small>
			    @enderror
			  	</div>

			    

					</div>
					<div class="col-md-6">
			  	<div class="form-group">
			  		<label for="content">Content</label>
			  		<textarea name="content" class="form-control" id="content">{{old('content')}}</textarea>
			  		@error('content')
			  		  <small style="color: red;"><div class="invalid-feedback">{{ $message }}</div></small>
			  		@enderror 
			  	</div>
					<div class="input-group">
					   <span class="input-group-btn">
					     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
					       <i class="fa fa-picture-o"></i> Choose
					     </a>
					   </span>
					   <input id="thumbnail" class="form-control" type="text" name="thumbnail">
					 </div>
					 <img id="holder" style="margin-top:15px;max-height:100px;">
					 <div class="input-group"> 
					 <input type="submit" class="btn btn-info" value="Submit">
					 </div>
					</div>
				</div>			
			</div>
			</div>
			</div>
			
		</div>
		
	</div>

@endsection

@section('footer')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
	<script>
		ClassicEditor
		.create( document.querySelector(' #content'))
		.catch( error => {
			console.error( error );
		});

		$(document).ready(function(){
		$('#lfm').filemanager('image');
		});
	
	</script>
@endsection