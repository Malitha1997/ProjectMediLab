@extends('Layout.navbar')


@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-1">Add Doctor</h3>
    </div><button class="btn btn-primary" type="button" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('doctors.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Doctor list</span></span></a></button>
    <div class="card">
        <form style="padding-left: 56px;margin-right: 68px;" method="post" action="{{route('doctors.store')}}">
         {{csrf_field()}}
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">First Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="f_name" required></div>
                @error('f_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Last Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="l_name" required></div>
                @error('l_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Password</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="password" name="password" required></div>
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Confirm Password</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="password" name="confirm-password" required></div>
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Address</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" placeholder="House No." name="house_no"><input class="form-control" type="text" placeholder="Street No." name="street_no"><input class="form-control" type="text" placeholder="City" name="city"></div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Age</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="age"></div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Email address</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="email" required></div>
                @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Contact No.</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="telno" required></div>
                @error('telno')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">NIC</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="nic"></div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Speciality</label></div>
                <div class="col">
                    <select id="speciality" name="speciality">
                        <option value="Dermatologists">Dermatologists</option>
                        <option value="Cardiologists">Cardiologists</option>
                        <option value="Ophthalmologists">Ophthalmologists</option>
                        <option value="Endocrinologists">Endocrinologists</option>
                        <option value="Gastroenterologists">Gastroenterologists</option>
                        <option value="Dermatology">Dermatology</option>
                        <option value="Anesthesiology">Anesthesiology</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Qualification</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="qualification"></div>
            </div>
            <button class="btn btn-primary" id="btn_save" type="submit">Save</button>
        </form>
    </div>

@endsection
