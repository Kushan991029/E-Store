<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee Page</title>
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
            <h3>Enroll a New Employee</h3>
            <form action="{{url('addemployee')}}" method="post">
            {{ csrf_field() }}   
                <label for="">Name:</label>
                <input type="text" name="name" id="" ><br>

                <label for="">Email:</label>
                <input type="email" name="email" id="" ><br>

                <label for="">Gender:</label>
                <select name="gender" id="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br>

                <label for="">Address:</label>
                <input type="text" name="address" id="" ><br>

                <label for="">Mobile Number:</label>
                <input type="text" name="mobile" id="" ><br>

                <label for="">Password:</label>
                <input type="password" name="password" id="" ><br>

                <input type="submit" value="Enroll">
            </form>
        </div>
    </div>
</body>
</html>