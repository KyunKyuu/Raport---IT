					<div class="form-group">
			  		<label for="content">Content</label>
			  		<textarea name="content" class="form-control" id="content">{{old('content')}}</textarea>
			  		@error('content')
			  		  <small style="color: red;"><div class="invalid-feedback">{{ $message }}</div></small>
			  		 @enderror
			  		
			  	</div>


			  	
					</div>
					<div class="col-md-4">
					<div class="form-group">
			    <label for="title">Title</label>
			    <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" placeholder="Masukan Title" value="{{old('title')}}">
			    @error('title')
			      <small style="color: red;"><div class="invalid-feedback">{{ $message }}</div></small>
			    @enderror
			  	</div>

			  	<div class="form-group">
			    <label for="category">Category</label>
			    <select  class="form-control" id="category" name="category" >
			    	<option disabled selected="">Pilih Kategori</option>
			    	@foreach($categories as $category)
			    		<option value="{{$category->id}}">{{$category->nama}}</option>
			    	@endforeach
			    </select>
			    @error('category')
			      <small style="color: red;"><div class="invalid-feedback">{{ $message }}</div></small>
			    @enderror
			  	</div>

			  	<div class="form-group">
			    <label for="tags">Tags</label>
			    <select  class="form-control" id="tags" name="tags[]" multiple>
			    	<option disabled selected="">Pilih Kategori</option>
			    	@foreach($tags as $tag)
			    		<option value="{{$tag->id}}">{{$tag->nama}}</option>
			    	@endforeach
			    </select>
			    @error('tag')
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