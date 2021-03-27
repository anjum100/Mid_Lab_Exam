


<a href="/general">General USER</a>
<a href="/admin">Admin</a>
<a href="/scout">Scout</a>
<a href="/home">Home</a>
<a href="{{route('home.userlist')}}">View user list</a> |

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Personal Information</h1>

    <form method="post" enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Profile</legend>
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
					<td>Name</td>
					<td><input type="text" name="name" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>Country</td>
					<td><input type="text" name="country" value="{{old('country')}}"></td>
				</tr>

				<tr>
					<td>City</td>
					<td><input type="text" name="city" value="{{old('city')}}"></td>
				</tr>

				<tr>
					<td>dept</td>
					
					<td><input type="text" name="dept" value="{{old('dept')}}"></td>
				</tr>
				

                <tr>
					<td>Type</td>
					<td>
						<select name='type'>
							<option value="admin"> ADMIN </option>
							<option value="user"> USER </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Image</td>
					<td>
						<input type="file" name="myfile">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
					
				</tr>
			</table>
		</fieldset>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>
