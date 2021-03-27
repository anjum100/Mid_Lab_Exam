<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/a.css')}}">
</head>
<body  >
	<h1 align="center">Login Page</h1>

	<form method="post">
        {{-- @csrf --}}
       {{--  {{csrf_field()}} --}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >

		<fieldset >
		
			
			<table  align="center"  >
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input  type="submit" name= "submit" value="Login" style="color: green;"></td>
					<td></td>
					<td><a href="{{route('registration')}}" style="color:green">Not registered yet?</td>
				</tr>
			</table>
		</fieldset>
	</form>


    {{session('msg')}}

</body>
</html>
