


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
					<td>:</td>
					<td> mishu </td>
				</tr>
				<tr>
					<td>Password</td>
					
					<td>:</td>
					<td> 123456</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td> Mishu </td>
				</tr>
				<tr>
					<td>Country</td>
					<td>:</td>
					<td> Bangladesh </td>
				</tr>

				<tr>
					<td>City</td>
					<td>:</td>
					<td> Dhaka</td>
				</tr>

				<tr>
					<td>dept</td>
					
					<td>:</td>
					<td> Manager </td>
				

                <tr>
					<td>Type</td>
					<td>:</td>
					<td> User </td>
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
