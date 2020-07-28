@extends('layouts/main')

@section('title', 'Daftar Post')

@section('content')

		<!-- Table -->
		<h3 class="page-title">Post</h3>
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
							<a href="/postsadd" class="btn btn-sm btn-primary"><i class="lnr lnr-plus-circle"> Add New Post</i></a> 
						</div>
						<div class="panel-body">
									
							<table class="table table-hover">
								<thead>
									<tr>
								
									<th>ID</th>
									<th>Title</th>
									<th>User</th>
									<th>Action</th>
									
									</tr>
								</thead>
					
								<tbody>
								@foreach( $posts as $post )
									<tr>
										
										<td>{{ $post->id }}</td>
										<td>{{ $post->title}}</td>
										<td>{{ $post->user->name}}</td>	
										<td>
										<a href="{{route('site.single.post', $post->slug)}}" class="btn btn-sm btn-info" target="_blank"> View </a>
										@if($post->user->role == 'admin')
										<a href="/post/edit/{{$post->id}}" class="btn btn-sm btn-success"> Edit </a>
										@endif
										
										<form action="/post/delete/{{$post->id}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
											<button type="submit" class="btn btn-sm btn-danger" 
                                       onclick="return confirm('Post Akan dihapus?')" >Delete
                                    		</button>
                                    	</form>

										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
							<div style="text-align: center;">
							{{$posts->links()}}
							</div>
			</div>
			</div>
			</div>
			
		</div>
		
	</div>

@endsection
