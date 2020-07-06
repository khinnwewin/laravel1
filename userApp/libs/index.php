<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<title>User App</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	
	<script>
            $(document).ready(function() {
            $("#create-user").click(function(event){
             $('#page-content').load('create_form.php');
            });
         });
     </script>
 <script src="process.js"></script>

</head>
<body>
	  
	

	<div class="container">
		<div class='page-header'>
			<h1 id='page-title'>User Application</h1>
		</div>
		<div id="message" class="message"></div>
		
 
		<div id='create-user' class='btn btn-primary float-right'>
			<span class='glyphicon glyphicon-plus'></span>Create User
		</div>
		<div id='read-user' class='btn btn-primary float-right'>
			<span class='glyphicon glyphicon-plus'></span>Read User
		</div>
		<br/><br/><br/>
		<div id='page-content'>

		</div>
	</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</body>
</html>