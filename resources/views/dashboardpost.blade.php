@extends('layout/headeradmin')

@section('container')
<div class="row m-0 p-3">
  <div class="col-md-12" style="text-align:center">
  
	  <h4 style="color:white">Posts List</h4>
  </div>
</div>
<div class="row m-0">
	<div class="col-md-12 p-0">
		<table class="table table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col"  style="width: 10%">Image</th>
      <th scope="col">Title</th>
      <th scope="col"  style="width: 50%">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $data)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>
      	<img src="assets/post/{{$data['img_url']}}" style="width:100%" class="img-fluid"  alt="">
      </td>
      <td>{{$data['title']}}</td>
      <td>{{$data['description']}}</td>
      <td>
        <form method="post" action="update/{{$data['post_id']}}" style="display:inline-block">
            @csrf
            <button class="btn btn-primary" style="color:white;font-weight:bold">EDIT</button>
        </form>
        <form method="post" action="delete/{{$data['post_id']}}" style="display:inline-block">
        @method('delete')
            @csrf
            <button class="btn btn-danger" style="color:white;font-weight:bold;">DELETE</button>
        </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

	</div>
</div>

@endsection