<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<body>

<h2 align="center">Client Management System</h2>


    <h3 align="center">Create New Account</h3>

    <h3 align="center">Alrady registered? Click Login </h3>
    <h3 align="center"><a href="/login"  >Login</a></h3>

    <h1 align="center">Registration</h1>


    <form method="post" enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Registration</legend>
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
					<td>Full Name</td>
					<td><input type="text" name="full_name" value="{{old('full_name')}}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Country</td>
					<td><input type="text" name="country" value="{{old('country')}}"></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" name="phone" value="{{old('phone')}}"></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" value="{{old('city')}}"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name" value="{{old('company_name')}}"></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>
					
            <select name='type'>
                        <option> </option>
                        <option value="admin">Admin</option>
                        <option value="customer">Customer</option>
                        <option value="accountant">Accountant</option>
                        <option value="Sales and Marketing Person">Sales and Marketing Person</option>
                        <option value="Business Partner">Business Partner</option>
                    </select>
                    
					</td>
				</tr>
				<tr>
					<td>Date Added</td>
					<td><input type="date" name="date_added" value="{{old('date_added')}}"></td>
					<td></td>
					<td><input type="submit" name="submit" value="Register"></td>

				</tr>
			</table>
			
		</fieldset>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>
