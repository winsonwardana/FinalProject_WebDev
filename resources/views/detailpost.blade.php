@extends('layout/headerselainhome')

@section('container')
<div class="container" style="padding-top:5%">
	@foreach($post as $post)
	<div class="row m-0">
		<div class="col-md-6 " >
			<img src="/assets/post/{{$post['img_url']}}" alt="" class="img-fluid">
			
		</div>
		<div class="col-md-6" >
			<div style="background-color:white;padding:40px;border-radius:20px">
		<!-- start comment section	 -->
		<div class="row m-0">
		<div class="col-md-12 " >
			<h4>Description:</h4>
			<p>{{$post["description"]}}</p>
		</div>
		</div>
		@endforeach
		<?php
		$id = $post['post_id'];
		?>
		<?php 
		if(Session::get('first_name') != ""){
		?>
				<div class="row pb-2 m-0">
			<div class="col-md-3">
				<img src="/assets/profilepic.png" alt="" class="img-fluid">
			</div>
			<form method="post" id="formImgInp" action="/comment/{{$id}}">

    @csrf
		<div class="col-md-9">
				<p>{{Session::get('first_name')}}</p>
				<input type="text" placeholder="Insert comment" name="comment" >
				<button type="submit" class="btn btn-primary mt-3 ">Submit</button>

			</div>
		</div>	
		<?php
		
		}else{

		
			

		?>

		<p> <span><a href="{{  url ('/login')}}">Login </a> </span>		 to comment</p>

		<?php
		}
		?>



		


		<hr>
		@foreach($comments	 as $comments	)
		<?php
        
				$std = Http::get(env('API_UR2L','35.240.231.119').'http://127.0.0.1:8002/api/getUserDetail/'.$comments['user_id'])[0]
            ?>
		<div class="row pb-2 m-0">
			<div class="col-md-3">
				<img src="/assets/profilepic.png" alt="" class="img-fluid">

			</div>

			<div class="col-md-9">
				<p class="m-0"> <span style="color:blue">{{$std['first_name']}} :</span>{{$comments['comment']}}</p>
				<p class="m-0" style="font-size:10px; color:grey">Commented on {{$comments['created_at']}}</p>
				</div>
		</div>

		@endforeach

		


				





			</div>
		</div>
	</div>
</div>

		
@endsection