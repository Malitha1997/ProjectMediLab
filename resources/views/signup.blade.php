<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="{{asset('cssfile/bootstrap.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center vh-100">
            <div class="card w-50 my-auto shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h2>Signup</h2>
                </div>
                <div class="card-body">
                    @foreach($errors->all() as $error)
                    <div class='alert alert-danger' role='alert'>
                            {{ $error }}
                    </div>

                    @endforeach
                    <form action="users" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="fname">Username</label>
                            <input type="fname" id="name" class="form-control" name="username" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password" />
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm password</label>
                            <input type="password" id="password" class="form-control" name="password" />
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
