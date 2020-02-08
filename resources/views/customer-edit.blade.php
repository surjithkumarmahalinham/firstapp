<!DOCTYPE html>
<html>
<head>
	<title>Customer</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<body>
	<form action="/customers-update" method="POST">
		{{csrf_field()  }}
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>First Name </label>
					<input type="hidden" name="id" value="{{ $customer['id'] }}">
					<input type="text" name="fname" placeholder="Enter name" class="form-control" value="{{ $customer['fname'] }}">
				</div>
				<div class="form-group">
					<label>Last Name </label>
					<input type="text" name="lname" placeholder="Enter number" class="form-control" value="{{ $customer['lname'] }}">
				</div>
				<div class="form-group">
					<label>Email </label>
					<input type="text" name="email" placeholder="Enter email" class="form-control" value="{{ $customer['email'] }}">
				</div>
				<div class="form-group">
					<label>Region </label>
					<input type="text" name="region" placeholder="Enter email" class="form-control" value="{{ $customer['region'] }}">
				</div>
				<div class="form-group">
					<label>Country</label>
					<input type="text" name="countryname" placeholder="Enter email" class="form-control" value="{{ $customer['countryname'] }}">
				</div>
				<div class="form-group">
					<label>State </label>
					<input type="text" name="statename" placeholder="Enter email" class="form-control" value="{{ $customer['statename'] }}">
				</div>
				<div class="form-group">
					<label>City </label>
					<input type="text" name="cityname" placeholder="Enter email" class="form-control" value="{{ $customer['cityname'] }}">
				</div>
				<input type="submit" name="submit" class="btn-success" value="Update">
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			</div>
		</div>
</form>