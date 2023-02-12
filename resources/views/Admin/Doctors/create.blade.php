@extends('Layout.navbar')


@section('content')


<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1">Add Doctor</h3>
    </div><button class="btn btn-primary" type="button" data-aos="fade-in" data-aos-duration="1000" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('doctors.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Doctor list</span></span></a></button>
    <div class="card" data-aos="fade-in" data-aos-duration="1000">

        <form style="padding-left: 56px;margin-right: 68px;" method="post" action="{{route('doctors.store')}}">
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
                <div class="col"><input class="form-control text-dark mb-1" type="text" placeholder="Address Line 1" name="address_line1" value="{{ old('address_line1') }}" required>
                @if($errors->has('address_line1'))
                <p class="text-danger">{{ $errors->first('address_line1') }}</p>
                @endif
                <input class="form-control text-dark mb-1" type="text" placeholder="Address Line 2" name="address_line2" value="{{ old('address_line2') }}" required>
                @if($errors->has('address_line2'))
                <p class="text-danger">{{ $errors->first('address_line2') }}</p>
                @endif
                <input class="form-control text-dark mb-1" type="text" placeholder="Address Line 3" name="address_line3" value="{{ old('address_line3') }}" required>
                @if($errors->has('address_line3'))
                <p class="text-danger">{{ $errors->first('address_line3') }}</p>
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
                <div class="col"><label class="col-form-label text-dark mb-1" for="speciality">Speciality</label></div>
                <div class="col">
                    <select id="speciality" name="speciality" class="form-control text-dark mb-1" required>
                        <option value="--Select option--">--Select option--</option>
                        <option value="Dermatologists">Dermatologists</option>
                        <option value="Cardiologists">Cardiologists</option>
                        <option value="Ophthalmologists">Ophthalmologists</option>
                        <option value="Endocrinologists">Endocrinologists</option>
                        <option value="Gastroenterologists">Gastroenterologists</option>
                        <option value="Dermatology">Dermatology</option>
                        <option value="Anesthesiology">Anesthesiology</option>
                    </select>
                    @error('speciality')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
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
