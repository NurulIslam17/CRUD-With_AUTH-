<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<title>Show Data</title>
	</head>

	<body>
		<div class="container">
			<h2 class="text-center p-2">Add User Information</h2>
			<a href="{{url('/')}}" class="btn btn-primary bg-success m-1"> Show Data</a>

			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4 p-2 bg-primary">
				<form action="{{url('/update/'.$selectId->id)}}" method="post">
				@csrf
				<div class="mb-3">
					<label for="name" class="form-label">User Name</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$selectId->name}}" id="name" value="{{ old('name') }}" placeholder="Your name">
					@error('name')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror

				</div>

				<div class="mb-3">
					<label for="email" class="form-label">Email address</label>
					<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$selectId->email}}" id="email" value="{{ old('email') }}" placeholder="User Email">
					@error('email')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror

				</div>

				<div class="mb-3">
					<label for="city" class="form-label">City</label> 
					<input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$selectId->city}}" id="city" value="{{ old('city') }}" placeholder="City Name">
					@error('city')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror

				</div>

				<div class="mb-3">
					<label for="country" class="form-label">Country</label>
					<input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{$selectId->country}}" id="country" value="{{ old('country') }}"  placeholder="From where">
					@error('country')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror

				</div>

				<div class="mb-3 text-center">
					<input type="submit" class="btn btn-success" value="Update">
				</div>
				</form>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>


		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>

	</html>