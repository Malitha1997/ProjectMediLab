@extends('Layout.navbar')


@section('content')

<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1">Edit patient</h3>
    </div><button class="btn btn-primary" data-aos="fade-down" data-aos-duration="1000" type="button" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="/patient_list"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Patient list</span></span></a></button>
    <div class="card" data-aos="fade-in" data-aos-duration="1000">

        <form style="padding-left: 56px;margin-right: 68px;" method="POST" action="{{route('patients.update',$patient->user->id)}}">
         {{csrf_field()}}

         @method('PUT')
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">First Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="f_name" value="{{ $patient->user->f_name }}" required></div>
                @error('f_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Last Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="l_name" value="{{ $patient->user->l_name }}" required></div>
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
                <div class="col"><input class="form-control text-dark mb-1" type="text" placeholder="Address Line 1" name="address_line1" value="{{ $patient->address_line1 }}"><input class="form-control text-dark mb-1" type="text" placeholder="Address Line 2" name="address_line2" value="{{ $patient->address_line2 }}"><input class="form-control text-dark mb-1" type="text" placeholder="Address Line3" name="address_line3" value="{{ $patient->address_line3 }}"></div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Blood group</label></div>
                    <div class="col">
                        <select id="blood_group" name="blood_group" class="form-control">
                            <option value="--Select option--">--Select option--</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Age</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="age" value="{{ $patient->age }}"></div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Email address</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="email" value="{{ $patient->user->email }}"required></div>
                @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Contact No.</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="telno" value="{{ $patient->telno }}" required></div>
                @error('telno')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">NIC</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="nic" value="{{ $patient->nic }}"></div>
            </div>
            <div class="row">
                <div class="col"><button class="btn btn-primary" id="btn_save" type="submit">Save</button></div>
            </div>
            </form>
    </div>

@endsection
