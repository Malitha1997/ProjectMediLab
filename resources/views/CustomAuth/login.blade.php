<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="{{asset('cssfile/bootstrap.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center vh-100">
                <div class="card w-25 my-auto shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="login-user" method="post">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}></div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}></div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="uname">User name</label>
                                <input type="uname" id="uname" class="form-control" name="username" vlaue="{{ old('username') }}"/>
                                <span class="text-danger">@error('username') {{ $message }} @enderror </span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password" />
                                <span class="text-danger">@error('password') {{ $message }} @enderror </span>
                            </div>
                            <button class="btn btn-primary w-100" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
