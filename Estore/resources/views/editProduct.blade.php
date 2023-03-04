<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product Page</title>
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
            <h3>Edit a Product</h3>
            <form action="{{url('updateproduct')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" value="{{$data->id}}" name="id" >
                <label for="">Name:</label>
                <input type="text" name="productname" id="" placeholder="{{$data->product_name}}"><hr>

                <label for="">Detail:</label>
                <input type="text" name="detail" id="" placeholder="{{$data->detail}}">
                <br>

                <label for="">Price:</label>
                <input type="number" name="price" id="" placeholder="{{$data->price}}">

                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</body>
</html>