@extends('layout/headerselainhome')

@section('container')
<div class="container" style="padding-top:10%">
	<div class="row m-0">
		<div class="col-md-6 pt-5" >
			<img src="assets/logo.png" alt="">
			<h1 style="color:white">Join us Today.</h1>
			<h3 style="color:white">Do a review in our production</h3>
		</div>
		<div class="col-md-6" >
			<div style="background-color:white;padding:40px;border-radius:20px">
			{{ Form::open(array('action' => 'UserController@store')) }}
    @csrf
			
			<div class="form-group">
					<label for="name">Name</label>
					<input type="name" class="form-control" name="name" id="name" placeholder="">
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="">
				</div>
		
				<button type="submit" class="btn btn-primary" style="text-align:center">Join us Now</button>
			</form>
			<p>Have an account? <span style="color:blue"> <a href="login">Log in</a></span></p>
			
			</div>
		</div>
	</div>
</div>

		
@endsection