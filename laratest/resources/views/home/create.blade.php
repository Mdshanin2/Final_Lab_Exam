@extends('layout/navbar')


@section('title')
Create Student
@endsection

@section('head')
Create New User
@endsection


@section('content')
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Create Employer</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>Employer Name</td>
					<td><input type="text" name="name" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>Company</td>
					<td><input type="text" name="company" value="{{old('company')}}"></td>
				</tr>
				<tr>
					<td>Contact no</td>
					<td><input type="text" name="contact" value="{{old('contact')}}"></td>
				</tr>
				<!-- <tr>
					<td>type</td>
					<td><input type="text" name="type" value=></td>
				</tr>
				<tr>
					<td>Photo</td>
					<td><input type="file" name="myimg"></td>
				</tr> -->
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

@endsection