@extends('layouts/main')

@section('title', 'Daftar Event')

@section('content')

		<!-- Table -->
		<h3 class="page-title">Event</h3>
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
							<a href="/eventadd" class="btn btn-sm btn-primary"><i class="lnr lnr-plus-circle"> Add New Event</i></a> 
						</div>
						<div class="panel-body">
									
							<table class="table table-hover">
								<thead>
									<tr>
								
									<th>No</th>
									<th>Title</th>
									<th>Diselenggarakan oleh</th>
									<th>Waktu</th>
									<th>Action</th>
									</tr>
								</thead>
					
								<tbody>
								@foreach( $events as $event )
									<tr>
										
										<td>{{ $loop->iteration }}</td>
										<td>{{ $event->title}}</td>
										<td>{{ $event->oleh}}</td>
										<td>{{ $event->tanggal}}&nbsp;{{ $event->bulan}}</td>	
										<td>
										<a href="" class="btn btn-sm btn-success"> Edit </a>
										<a href="" class="btn btn-sm btn-danger"> Delete </a>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
							<div style="text-align: center;">
							{{$events->links()}}
							</div>
			</div>
			</div>
			</div>
			
		</div>
		
	</div>

@endsection
