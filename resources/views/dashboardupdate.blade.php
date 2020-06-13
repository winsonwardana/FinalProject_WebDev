@extends('layout/headeradmin')

@section('container')
@foreach($data as $data)
  <div class="container" style="padding-top:5%">
	<div class="row m-0">
		<div class="col-md-6" >
			<img src="/assets/post/{{$data->img_url}}" alt="" class="img-fluid">
		</div>
		<div class="col-md-6" >
			<div style="background-color:white;padding:40px;border-radius:20px">
			<form method="post"  id="formImgInp" action="/dashboard-update/{{$data->post_id}}" enctype="multipart/form-data">
			@method('patch')
    		@csrf
			<div class="form-group">
				<label for="foto" style="color:white">Insert Photo</label>
				<input accept="image/*" id="upload" type="file"  name="foto" onchange="readURL(this);" class="form-control ">
			</div>
			<div class="form-group">
				<label for="title" style="color:white">Title</label>
				<input value="{{$data->title}}" name="title" type="text" class="form-control" id="title" placeholder="Input title">
			</div>
			<div class="form-group">
				<label for="description" style="color:white">Description</label>
				<textarea name="description" class="form-control" id="description" rows="4" placeholder="Description">{{$data->description}}</textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
			
			</div>
		</div>
	</div>
</div>

	@endforeach

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

@endsection