@extends('Layout.navbar')


@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-1">Add patient</h3>
    </div><button class="btn btn-primary" type="button" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="/patient_list"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Patient list</span></span></a></button>
    <div class="card">
        <form style="padding-left: 56px;margin-right: 68px;" method="POST" action="patients">
         {{csrf_field()}}
            <div class="row">
                <div class="col"><label class="col-form-label">First Name</label></div>
                <div class="col"><input class="form-control" type="text" name="f_name" required></div>
                @error('f_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label">Last Name</label></div>
                <div class="col"><input class="form-control" type="text" name="l_name" required></div>
                @error('l_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label">Password</label></div>
                <div class="col"><input class="form-control" type="password" name="password" required></div>
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label">Confirm Password</label></div>
                <div class="col"><input class="form-control" type="password" name="confirm-password" required></div>
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label">Address</label></div>
                <div class="col"><input class="form-control" type="text" placeholder="House No." name="house_no"><input class="form-control" type="text" placeholder="Street No." name="street_no"><input class="form-control" type="text" placeholder="City" name="city"></div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label">Blood group</label></div>
                <div class="col"><input class="form-control" type="text" name="blood_group"></div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label">Age</label></div>
                <div class="col"><input class="form-control" type="text" name="age"></div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label">Email address</label></div>
                <div class="col"><input class="form-control" type="text" name="email" required></div>
                @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label">Contact No.</label></div>
                <div class="col"><input class="form-control" type="text" name="telno" required></div>
                @error('telno')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label">NIC</label></div>
                <div class="col"><input class="form-control" type="text" name="nic"></div>
            </div>
            <button class="btn btn-primary" id="btn_save" type="submit">Save</button>
        </form>
    </div>

@endsection
