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
                    <form action="patients" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="fname" id="name" class="form-control" name="p_f_name" />
                        </div>
                        <div class="form-group">
                            <label for="fname">Last Name</label>
                            <input type="fname" id="name" class="form-control" name="p_l_name" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" name="p_email" />
                        </div>
                        <div class="form-group">
                            <label for="fname">Username</label>
                            <input type="fname" id="name" class="form-control" name="p_username" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="p_password" />
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm password</label>
                            <input type="password" id="password" class="form-control" name="p_password" />
                        </div>
                        <div class="row">
                            <div class="col"><label class="col-form-label">Address</label></div>
                            <div class="col"><input class="form-control" type="text" placeholder="House No." name="house_no"><input class="form-control" type="text" placeholder="Street No." name="street_no"><input class="form-control" type="text" placeholder="City" name="city"></div>
                        </div>
                        <div class="form-group">
                            <div class="col"><label class="col-form-label">Contact Number</label></div>
                            <div class="col"><input class="form-control" type="text" name="p_telno"></div>
                        </div>
                        <div class="form-group">
                            <div class="col"><label class="col-form-label">Age</label></div>
                            <div class="col"><input class="form-control" type="text" name="age"></div>
                        </div>
                        <div class="form-group">
                            <div class="col"><label class="col-form-label">NIC</label></div>
                            <div class="col"><input class="form-control" type="text" name="nic"></div>
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
