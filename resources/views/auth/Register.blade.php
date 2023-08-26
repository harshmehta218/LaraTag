<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register Form</h2>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                @if ($errors->has('name'))
                    <span class="invalid feedback" style='color: red' role="alert">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                @if ($errors->has('email'))
                    <span class="invalid feedback" style='color: red'
                        role="alert">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                @if ($errors->has('password'))
                    <span class="invalid feedback" style='color: red'
                        role="alert">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="pwd">Confirm password:</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="Enter Confirm password"
                    name="confirm_password">
                @if ($errors->has('confirm_password'))
                    <span class="invalid feedback" style='color: red'
                        role="alert">{{ $errors->first('confirm_password') }}</span>
                @endif
            </div>
            <div>
                <a href="{{route('user.login')}}">login</a>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

</body>

</html>
