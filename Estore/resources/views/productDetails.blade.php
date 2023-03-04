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
                            <a href="{{url('orderproduct/'.$product_details->id)}}">Place Order</a>
                        </td>
                    </tr>   
                    @endforeach
            </tbody>
                
            </table>
        </div>
    </div>
</body>
</html>