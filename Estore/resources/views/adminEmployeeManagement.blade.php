<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management page</title>
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
            <button><a href="{{url('newemployee')}}">Enroll new Employee</a></button><hr>

            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
            </thead>

            <tbody>
                @php
                        $i = 1;
                    @endphp

                    @foreach($data as $employee_details)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$employee_details->name}}</td>
                        <td>{{$employee_details->email}}</td>
                        <td>{{$employee_details->mobile}}</td>
                        <td>
                            <a href="{{url('showemployee/'.$employee_details->id)}}">Show</a>
                            <a href="{{url('editemployee/'.$employee_details->id)}}">Edit</a>
                            <a href="{{url('deleteemployee/'.$employee_details->id)}}">Delete</a>
                        </td>
                    </tr>   
                    @endforeach
            </tbody>
                
            </table>
        </div>
    </div>
</body>
</html>