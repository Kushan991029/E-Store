<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee Page</title>
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
            <h3>Edit an Employee</h3>
            <form action="{{url('updateemployee')}}" method="post">
            {{ csrf_field() }}   
                <input type="hidden" value="{{$data->id}}" name="id">
                <label for="">Name:</label>
                <input type="text" name="name" id="" placeholder="{{$data->name}}"><br>

                <label for="">Email:</label>
                <input type="email" name="email" id="" placeholder="{{$data->email}}"><br>

                <label for="">Gender:</label>
                <select name="gender" id="" placeholder="{{$data->gender}}">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br>

                <label for="">Address:</label>
                <input type="text" name="address" id="" placeholder="{{$data->address}}"><br>

                <label for="">Mobile Number:</label>
                <input type="text" name="mobile" id="" placeholder="{{$data->mobile}}"><br>

                <input type="submit" value="Update">
            </form>
        </div>
    </div>
</body>
</html>