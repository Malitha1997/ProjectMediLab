@extends('Layout.navbar')

@section('content')
                <div class="container-fluid">
                    <h3 class="text-dark mb-1">Add doctor</h3>
                </div><button class="btn btn-primary" type="button" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="Doctor_list.html"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Doctor list</span></span></a></button>
                <div class="card"></div>
                <div class="card-group">
                    <div class="card">
                        <form style="padding-left: 26px;">
                            <div class="row">
                                <div class="col">
                                    <div class="card"></div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">First Name</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><input class="form-control" type="email" placeholder="First Name"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card"></div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Last Name</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><input class="form-control" type="email" placeholder="Last Name"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card"></div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Email Address</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><input class="form-control" type="email" placeholder="user@example.com"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card"></div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Password</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><input class="form-control" type="email" placeholder="******"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card"></div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Phone Number</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><input class="form-control" type="email" placeholder="07********"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card"></div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Designation</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><input class="form-control" type="email" placeholder="Designation"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card"></div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Blood group</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Select option</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">A+</a><a class="dropdown-item" href="#">A-</a><a class="dropdown-item" href="#">B+</a><a class="dropdown-item" href="#">B-</a><a class="dropdown-item" href="#">O+</a><a class="dropdown-item" href="#">O-</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card"></div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Sex</span></h6>
                                        </div>
                                    </div>
                                    <div class="card"></div>
                                </div>
                                <div class="col"><input type="radio"><span>Male</span><input type="radio"><span>Female</span></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card"></div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Age</span></h6>
                                        </div>
                                    </div>
                                    <div class="card"></div>
                                </div>
                                <div class="col"><input class="form-control" type="email" placeholder="Age"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card"></div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Picture</span></h6>
                                        </div>
                                    </div>
                                    <div class="card"></div>
                                </div>
                                <div class="col"><input class="form-control" type="file"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card">
                                                <h6 class="text-muted mb-2"><span style="color: rgb(0, 0, 0);">Address</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><input class="form-control" type="text" placeholder="House No."><input class="form-control" type="text" placeholder="Street No."><input class="form-control" type="text" placeholder="City"></div>
                                <div class="w-100"></div>
                            </div>
                        </form>
                    </div>
                </div><button class="btn btn-primary" id="btn_save" type="button">Save</button>
    @endsection
           