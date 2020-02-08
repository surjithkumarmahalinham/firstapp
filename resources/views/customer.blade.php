<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
     <script type="text/javascript" src="typeahead.js"></script>
	  <title>Add Customer</title>
   </head>
   <body>
	<h2 class="glyphicon glyphicon-user"><b>Customer</b></h2><br><br>
	<table class = "table table-striped"><tr><td><b><label>Filter</label></b><input type="text" name="filter" autocomplete="off" id="search_text" class="form-control"></td>
      <td><a href="/customers"> 
	  <span style="margin-left:730px; width:200px;"">
	  <input  class="btn btn-default" type="button" name="add" value="Add customer"></td></span>
	  </tr></table><br><br>

	<form action="/customers" method="POST">
		{{csrf_field()  }}
	<div class = "container">
      <h3 class="glyphicon glyphicon-user">AddCustomer</h3><br><br>
        
        <label>First Name</label><input style="border-left:5px solid #00b300; width:500px;" type="text" class="form-control" name="fname"><br>
		<label>Last Name </label><input style="border-left:5px solid #00b300; width:500px;" type="text" class="form-control" name="lname"><br>
		<label>Gender </label><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;<input type="radio" name="gender" value="Male" >Male
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="gender" value="FeMale" >Female<br><br>
		<label>Email</label> 
		<input style="border-left:5px solid #00b300; width:500px;" type="text" class="form-control" name="email" ><br>
	
		<label> Region</label><br/> 
		<input style="border-left:5px solid #00b300; width:500px;" type="text" name="region" id="txtRegion" class="form-control"/><br>
		
		<label> Country</label><br/> 
		<input style="border-left:5px solid #00b300; width:500px;" type="text" name="countryname" id="txtCountry" class="form-control"/><br>
		
		<label> State</label><br/> 
		<input style="border-left:5px solid #00b300; width:500px;" type="text" name="statename" id="txtState" class="form-control"/><br>
		
		<label> City</label><br/> 
		<input style="border-left:5px solid #00b300; width:500px;" type="text" name="cityname" id="txtCity" class="form-control"/><br>
				<input type="submit" name="submit" class="btn-success">
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			</div>
		</div>
</form>
</table>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>City</th>
					<th>State</th>
					<th>Country</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
					@foreach($customers as $customer)
					<tr>
						<td>{{ $customer['fname'] }}</td>
						<td>{{ $customer['lname'] }}</td>
						<td>{{ $customer['cityname'] }}</td>
						<td>{{ $customer['statename'] }}</td>
						<td>{{ $customer['countryname'] }}</td>
						<td>
							<a href="/customers/{{ $customer['id'] }}">
								<button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></a>
						    <a href="/customers-delete/{{ $customer['id'] }}">
						    	<button class="btn btn-danger btn-xs" onClick="return confirm("Do you really want to delete");">
								<span class="glyphicon glyphicon-trash"></i></button></a></a></td></tr>
						@endforeach
					</tbody>
				</table>
	
	</body>
	</html>