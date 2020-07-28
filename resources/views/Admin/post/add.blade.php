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
		<h3 class="page-title">Tambah Post</h3>
		<div class="row">
			
			<div class="col-md">
			<div class="panel">

			

			<div class="panel-body">	
				<div class="row">
					<div class="col-md-8">
				<form action="/post/create" method="post" enctype="multipart/form-data">
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