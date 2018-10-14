<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" contact="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<title>Contact Us</title>
</head>
<body>
	<div style="width: 500px; margin: 0 auto; margin-top: 90px;">
		@if(session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif

		<h3>Contact Us</h3>

		<form action="{{route('contact')}}" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="exampleFormControlInput1">Your name</label>
				<input type="text" class="form-control" name="name" id="exampleFormControlInput" placeholder="John Doe">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Email address</label>
				<input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>

			<div class="form-group">
				<label for="exampleFormControlTextarea1">Enter Your Message</label>
				<textarea class="form-control"name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>