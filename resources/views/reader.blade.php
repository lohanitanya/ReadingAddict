<!DOCTYPE html>
<html>
<head>
	<title>Reader Details</title>
</head>
<body>
	<form action="/submit" method="GET">
  		First name:<br>
  		<input type="text" name="firstname" value=>
  		<br>
  		Last name:<br>
  		<input type="text" name="lastname" value=>
  		<br>
      ID:<br>
  		<input label="ID" type="number" name="id" value=>
  		<br><br>
  		<input type="submit" value="Submit">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">

	</form> 


</body>
</html>