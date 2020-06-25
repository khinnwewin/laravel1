<!DOCTYPE html>
<html>
<head>
	<title>	Upload File</title>
</head>
<body>
	<form class="index.html" action="{{URL::to(/store)}}" encrypt="multipart/form.data" method="post">
		<input type="file" name="image" value="">
		<input type="text" name="_token" value="{{csrf-token{}}}">
		<br>	
		<button type="submit" name="button">Upload Images</button>
	</form>

</body>
</html>