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
            <h3>Add a new Product</h3>
            <form action="{{url('addproduct')}}" method="post">
            {{ csrf_field() }}
                <label for="">Name:</label>
                <input type="text" name="productname" id=""><hr>

                <label for="">Detail:</label>
                <input type="text" name="detail" id="">
                <br>

                <label for="">Price:</label>
                <input type="number" name="price" id="">

                <button type="submit">Add</button>
            </form>
        </div>
    </div>
</body>
</html>