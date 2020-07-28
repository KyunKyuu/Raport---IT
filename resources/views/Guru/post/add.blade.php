@extends('layouts/main')

@section('title', 'Buat Artikel')
@section('header')
<style>
	.ck-editor__editable {
    min-height: 600px;
    max-height: 600px;
}
</style>
@endsection
@section('content')

		<!-- Table -->
		<h3 class="page-title">Tambah Artikel</h3>
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
					<div class="col-md-8">
				<form action="/guru/post/create" method="post" enctype="multipart/form-data">
		   		@csrf
		   
		   		
				@include('layouts.includes.postCreate')
				</form>
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