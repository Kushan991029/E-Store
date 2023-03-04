<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord page</title>
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
            <button><a href="{{url('newproduct')}}">Create new product</a></button><hr>

            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
            </thead>

            <tbody>
                @php
                        $i = 1;
                    @endphp

                    @foreach($data as $product_details)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$product_details->product_name}}</td>
                        <td>{{$product_details->detail}}</td>
                        <td>{{$product_details->price}}</td>
                        <td>
                            <a href="{{url('showproduct/'.$product_details->id)}}">Show</a>
                            <a href="{{url('editproduct/'.$product_details->id)}}">Edit</a>
                            <a href="{{url('deleteproduct/'.$product_details->id)}}">Delete</a>
                        </td>
                    </tr>   
                    @endforeach
            </tbody>
                
            </table>
        </div>
    </div>
</body>
</html>