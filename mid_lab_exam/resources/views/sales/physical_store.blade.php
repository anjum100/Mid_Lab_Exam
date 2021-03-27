<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Physical store</h1><br>
    <a href="/logout">Logout</a>
    <table border="1">
        <tr>
            <td>product ID</td>
            <td>Product name</td>
            <td>Quantity</td>
            <td>Unit price</td>
            <td>Total price</td>
            <td>Customer name</td>
            <td>Customer phone no.</td>
        </tr>
        @for($i=0; $i < count($list); $i++) <tr>
            <td>{{$list[$i]['product_id']}}</td>
            <td>{{$list[$i]['product_name']}}</td>
            <td>{{$list[$i]['quantity']}}</td>
            <td>{{$list[$i]['unit_price']}}</td>
            <td>{{$list[$i]['total_price']}}</td>
            <td>{{$list[$i]['customer_name']}}</td>
            <td>{{$list[$i]['customer_phone']}}</td>
            </tr>
            @endfor
    </table>
</body>

</html>