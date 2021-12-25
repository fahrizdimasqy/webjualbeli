<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="shortcut icon" href="{{ asset('logo/favicon.png') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                <h5>Form Login</h5>
                <form action="/actionlogin" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        @if($errors->has('username'))
                                <label style="color:red" class="login-field-icon fui-user" for="login-name">password Jangan kosong</label>
                        @endif  
                    </div>
                <button type="submit" class="btn btn-primary"> Login </button>
                @if(Session::has('failed'))
                        <p style="color:red">Username Atau Password Anda Salah</p>
                 @endif
                </form>
                </div>
            </div>
        </div>
    </body>
</html>