@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center vh-100%">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">{{ __('Signup') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('patients.store') }}">
                        @csrf
                        <div class="form-group">
                        <div class="row ">
                            <label for="f_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col">
                                <input id="f_name" type="text" class="form-control @error('f_name') is-invalid @enderror" name="f_name" value="{{ old('f_name') }}" required autocomplete="f_name" autofocus>

                                @error('f_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row ">
                            <label for="l_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col">
                                <input id="l_name" type="text" class="form-control @error('l_name') is-invalid @enderror" name="l_name" value="{{ old('l_name') }}" required autocomplete="l_name" autofocus>

                                @error('l_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row ">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row ">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row ">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col">
                                <div class="col"><input class="form-control text-dark mb-1" type="text" placeholder="House No." name="house_no"><input class="form-control text-dark mb-1" type="text" placeholder="Street No." name="street_no"><input class="form-control text-dark mb-1" type="text" placeholder="City" name="city"></div>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row ">
                            <label for="blood_group" class="col-md-4 col-form-label text-md-end ">{{ __('Blood group') }}</label>
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
                        </div>

                        <div class="form-group">
                        <div class="row ">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>
                            <div class="col">
                                <input class="form-control text-dark mb-1" type="text" name="age">
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row ">
                            <label for="telno" class="col-md-4 col-form-label text-md-end">{{ __('Contact No.') }}</label>
                            <div class="col">
                                <input class="form-control text-dark mb-1" type="text" name="telno">
                                @error('telno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row ">
                            <label for="nic" class="col-md-4 col-form-label text-md-end">{{ __('NIC') }}</label>
                            <div class="col">
                                <input class="form-control text-dark mb-1" type="text" name="nic">
                            </div>
                        </div>
                        </div>

                        <button class="btn btn-primary" id="btn_save" type="submit">Done</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
