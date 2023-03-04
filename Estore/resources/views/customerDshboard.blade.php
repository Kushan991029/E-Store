<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashbord page</title>
</head>
<body>
    <div>
        <div>
            <h1>E-Store</h1><br>

            <button><a href="{{url('customer')}}">Customer Name</a></button>
            <button><a href="{{url('placeorder')}}">Place orders</a></button>
            <button><a href="{{url('logout')}}">Logout</a></button>
        </div>
        <div>
            <p>Welcome to Customer Dashboard</p>
        </div>
    </div>
</body>
</html>