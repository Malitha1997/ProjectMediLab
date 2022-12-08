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
                    <form action="" method="">
                        <div class="form-group">
                            <label for="fname">First name</label>
                            <input type="fname" id="fname" class="form-control" name="" />
                        </div> 
                        <div class="form-group">
                            <label for="lname">Last name</label>
                            <input type="lname" id="lname" class="form-control" name="" />
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" id="username" class="form-control" name="" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" name="" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="" />
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">Phone number</label>
                            <input type="phonenumber" id="phonenumber" class="form-control" name="" />
                        </div>
                        <div class="form-group">
                            <label for="bloodgroup">Blood group</label> 
                            <div class="btn-group col-md-6">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select option
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">A+</a></li>
                                    <li><a class="dropdown-item" href="#">A-</a></li>
                                    <li><a class="dropdown-item" href="#">B+</a></li>
                                    <li><a class="dropdown-item" href="#">B-</a></li>
                                    <li><a class="dropdown-item" href="#">O+</a></li>
                                    <li><a class="dropdown-item" href="#">O-</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex">Sex</label>
                            <div class="form-check">
                                <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label col-md-6" for="flexRadioDefault1">
                                  Male
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label col-md-6" for="flexRadioDefault2">
                                  Female
                                </label>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of birth</label>
                            <input type="dob" id="dob" class="form-control" name="" />
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <button type="button" class="btn btn-primary">Browse</button>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="address" id="address" class="form-control" name="" />
                        </div>
                        <button class="btn btn-primary" type="button">Save</button>
                    </form>    
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
