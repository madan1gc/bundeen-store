<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">


</head>

<body>
    <div class="login-page">

        <div class="wrapper">
            <h1>Login</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>

    </div>
</body>

</html>