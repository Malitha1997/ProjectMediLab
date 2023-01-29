@extends('Layout.navbar')


@section('content')


<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1">Add Lab Assistant</h3>
    </div><button class="btn btn-primary" type="button" data-aos="fade-in" data-aos-duration="1000" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('lab_assistants.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Lab Assistant list</span></span></a></button>
    <div class="card" data-aos="fade-in" data-aos-duration="1000">

        <form style="padding-left: 56px;margin-right: 68px;" method="post" action="{{route('lab_assistants.store')}}">
         {{csrf_field()}}
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1" for="f_name">First Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" value="{{ old('f_name') }}" name="f_name">
                @if($errors->has('f_name'))
                <p class="text-danger">{{ $errors->first('f_name') }}</p>
                @endif
                </div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1" for="l_name">Last Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" value="{{ old('l_name') }}" name="l_name" required>
                @if($errors->has('l_name'))
                <p class="text-danger">{{ $errors->first('l_name') }}</p>
                @endif
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1" for="password">Password</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="password" name="password" value="{{ old('password') }}" required></div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1" for="confirm-password">Confirm Password</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="password" name="confirm-password" value="{{ old('confirm-password') }}" required>
                @if($errors->has('password'))
                <p class="text-danger">{{ $errors->first('password') }}</p>
                @endif
                </div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1" for="house_no">Address</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" placeholder="House No." name="house_no" value="{{ old('house_no') }}" required>
                @if($errors->has('house_no'))
                <p class="text-danger">{{ $errors->first('house_no') }}</p>
                @endif
                <input class="form-control text-dark mb-1" type="text" placeholder="Street No." name="street_no" value="{{ old('street_no') }}" required>
                @if($errors->has('street_no'))
                <p class="text-danger">{{ $errors->first('street_no') }}</p>
                @endif
                <input class="form-control text-dark mb-1" type="text" placeholder="City" name="city" value="{{ old('city') }}" required>
                @if($errors->has('city'))
                <p class="text-danger">{{ $errors->first('city') }}</p>
                @endif
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1" for="age">Age</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="age" value="{{ old('age') }}" required>
                @if($errors->has('age'))
                <p class="text-danger">{{ $errors->first('age') }}</p>
                @endif
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1" for="email">Email address</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                <p class="text-danger">{{ $errors->first('email') }}</p>
                @endif
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1" for="telno">Contact No.</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="telno" value="{{ old('telno') }}" required>
                @if($errors->has('telno'))
                <p class="text-danger">{{ $errors->first('telno') }}</p>
                @endif
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1" forn="nic">NIC</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="nic" value="{{ old('nic') }}" required>
                @if($errors->has('nic'))
                <p class="text-danger">{{ $errors->first('nic') }}</p>
                @endif
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1" for="qualification">Qualification</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="qualification" value="{{ old('qualification') }}" required>
                @if($errors->has('qualification'))
                <p class="text-danger">{{ $errors->first('qualification') }}</p>
                @endif
                </div>
            </div>
            <button class="btn btn-primary" id="btn_save" type="submit">Save</button>
        </form>
    </div>

@endsection
