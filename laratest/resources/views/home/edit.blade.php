<!DOCTYPE html>

<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit User</legend>
			<table border="1">

				<tr>
					<td>Employer Name</td>
					<td><input type="text" name="name" value="{{$employer_name}}"></td>
				</tr>
				<tr>
					<td>Company</td>
					<td><input type="text" name="company" value="{{$company}}"></td>
				</tr>
				<tr>
					<td>Contact no</td>
					<td><input type="text" name="contact" value="{{$contact_number}}"></td>
				</tr>	
				<td>Username</td>
					<td><input type="text" name="username" value="{{$username}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" value="{{$password}}"></td>
				</tr>
				<!-- <tr>
					<td>Name</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Cgpa</td>
					<td><input type="text" name="cgpa" value=""></td>
				</tr>
				<tr>
					<td>dept</td>
					<td><input type="text" name="dept" value=""></td>
				</tr>-->
	
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html>