<!DOCTYPE html>
 
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Employer name</td>
			<td>company</td>
			<td>contact number</td>
			<td>Username</td>
			<td>password</td>
			
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($students); $i++)

			<tr>
				<td>{{$students[$i]['id']}}</td>
				<td>{{$students[$i]['employer_name']}}</td>
				<td>{{$students[$i]['company']}}</td>
				<td>{{$students[$i]['contact_number']}}</td>
				<td>{{$students[$i]['username']}}</td>
				<td>{{$students[$i]['password']}}</td>
			
				<td>
					<a href="{{route('home.edit', $students[$i]['id'])}}">Edit </a> |
					<a href="/delete/{{$students[$i]['id']}}">Delete </a> 
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>