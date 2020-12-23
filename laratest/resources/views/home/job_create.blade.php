<!DOCTYPE html>
 
<html>
<head>
	<title>Create new job</title>
</head>
<body>
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Create Job</legend>
			<table>
				<tr>
					<td>Company</td>
					<td><input type="text" name="company" ></td>
				</tr>
				<tr>
					<td>job_title</td>
					<td><input type="text" name="job_title" ></td>
				</tr>
				<tr>
					<td>location</td>
					<td><input type="text" name="location" ></td>
				</tr>
				<tr>
					<td>Salary</td>
					<td><input type="number" name="salary" ></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
		
</body>
</html>
