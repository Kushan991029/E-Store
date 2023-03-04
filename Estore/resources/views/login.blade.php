<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div>
        <div>
            <h1>E-Store</h1><br>
            <form action="{{url('login')}}" method="post">

            @if(Session::has('success'))
                <p>{{Session::get('success')}}</p>
                @endif
                @if(Session::has('fail'))
                <p>{{Session::get('fail')}}</p>
                @endif

            {{ csrf_field() }} 
                <label for="">Email:</label>
                <input type="email" name="email" id="" required><br>

                <label for="">Password:</label>
                <input type="password" name="password" id="" required><br>

                <button type="submit">Login</button>
            </form>
        </div>
        <br>
        <div>
            <button><a href="{{url('register')}}">Register Now</a></button>
        </div>
    </div>
    
</body>
</html>