@extends('layout/headerselainhome')

@section('container')
<div class="container" style="padding-top:10%">
	<div class="row m-0">
		<div class="col-md-3 pt-5" >
			<h1 style="color:white">Welcome back.</h1>
			
		</div>
		<div class="col-md-6" >
			<div style="background-color:#0C0000;padding:40px;border-radius:20px">
			{{ Form::open(array('action' => 'UserController@login')) }}
    @csrf
			<div style="text-align:center">
				<img src="assets/logo.png" alt="" style="width:70%">
			</div>
			
			<div class="form-group pt-5">
				<label for="email" style="color:white">Email</label>
				<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
			</div>
			<div class="form-group" style="color:white">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<div style="text-align:center">
			<button type="submit" class="btn btn-primary">Log in</button>
			</div>
			
			</form>
			</div>
		</div>
			<div class="col-md-3 pt-5">
				<h1 style="color:white">Do A review today.</h1>
				
			</div>
	</div>
			
</div>

		
@endsection