<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product Page</title>
</head>
<body>
    <div>
        <div>
            <h1>E-Store</h1><br>

            <button><a href="{{url('admin')}}">Admin Name</a></button>
            <button><a href="{{url('products')}}">Products</a></button>
            <button><a href="{{url('employees')}}">Employees</a></button>
            <button><a href="{{url('logout')}}">Logout</a></button>
        </div>
        <div>
            <h3>Details of Employee</h3>

            <p>Name: {{$data->name}}</p>
            <p>Email: {{$data->email}}</p>
            <p>Gender: {{$data->gender}}</p>
            <p>Address: {{$data->address}}</p>
            <p>Mobile No: {{$data->mobile}}</p>
            
        </div>
    </div>
</body>
</html>