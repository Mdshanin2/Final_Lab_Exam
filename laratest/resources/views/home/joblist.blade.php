<!DOCTYPE html>
 
<html>
<head>
	<title>job List</title>
</head>
<body>
	<a href="/jobcreate">create job</a> |
	<a href="/logout">logout</a>

	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			
			<td>Company</td>
			<td>Job_title</td>
			<td>location</td>
			<td>salary</td>
			
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($students); $i++)

			<tr>
				<td>{{$students[$i]['id']}}</td>
				<td>{{$students[$i]['company']}}</td>
				<td>{{$students[$i]['job_title']}}</td>
				<td>{{$students[$i]['location']}}</td>
				<td>{{$students[$i]['salary']}}</td>
			
				<td>
					<a href="{{route('emp.edit', $students[$i]['id'])}}">Edit </a> |
					<a href="/jdelete/{{$students[$i]['id']}}">Delete </a> 
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>