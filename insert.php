<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="container">
	<h1 class="text-center">insert data </h1>
	<br>
	<div class="col-lg-8 m-auto">
	<form id="myform" action="insertphp.php" method="post">
		<div class="form-group">
			<label>Username:</label>
			<input type="text" name="username" class="form-control">
		</div>

		<div class="form-group">
			<label>Password:</label>
			<input type="text" name="password" class="form-control">
		</div>

		<input type="submit" name="submit" id="submit" value="submit" class="btn btn-success"> </input>
	</form>
	</div>
</div>

<div>
	<br><br>
	<h1 class="text-center bg-dark text-white "> Display Data</h1>
	<br>
	<button id="displaydata" class="btn btn-danger">Display</button>

	<table class="table table-striped table-bordered table-hover text-center">
		<thead>
			<th>Id</th>
			<th>Name</th>
			<th>Password</th>
		</thead>

		<tbody id="response">
			

		</tbody>


	</table>

</div>






<script type="text/javascript">
	
$(document).ready(function(){

	var form = $('#myform');
	
	$('#submit').click(function(){

		$.ajax({

				url: form.attr("action"),
				type: 'post',
				data: $("#myform input").serialize(),

				success: function(data){
					consol.log(data);
				}

		});

	})	 

});

$('#displaydata').click(function(){

	$.ajax({

		url:'displayajax.php',
		type: 'post',

		success:function(responsedata){
			$('#response').html(responsedata);
		}
		
		});
})








</script>

</body>
</html>
