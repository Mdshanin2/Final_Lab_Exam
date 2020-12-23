<!DOCTYPE html>

<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('emp.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit job</legend>
			<table border="1">

			
				<tr>
					<td>Company</td>
					<td><input type="text" name="company" value="{{$company}}"></td>
				</tr>
				<tr>
					<td>job title</td>
					<td><input type="text" name="job_title" value="{{$job_title}}"></td>
				</tr>	
				<td>location</td>
					<td><input type="text" name="location" value="{{$location}}"></td>
				</tr>
				<tr>
					<td>salary</td>
					<td><input type="number" name="salary" value="{{$salary}}"></td>
				</tr>
				
	
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html>