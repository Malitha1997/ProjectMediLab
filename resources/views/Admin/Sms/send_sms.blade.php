@extends('Layout.navbar')

@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-1">Send SMS to Patient</h3>
    </div>
    <div class="card shadow mb-3">
        <div class="card-body">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <form class="sms-form" method="POST" action="{{ route('send_sms') }}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col">
                        <div class="form-group mb-3">
                            <label class="form-label" for="email"><strong>Patient Id</strong><br></label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" placeholder="" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group mb-3">
                            <label class="form-label" for="first_name"><strong>Patient Name</strong><br></label>
                            <input class="form-control @error('first_name') is-invalid @enderror" type="text" id="first_name" placeholder="John" name="first_name" value="{{ old('first_name') }}">
                            @error('first_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="contact_No"><strong>Contact Number</strong><br></label>
                            <input class="form-control @error('contact_No') is-invalid @enderror" type="tel" id="contact_No" placeholder="94xxxxxxxx" name="contact_No" value="{{ old('contact_No') }}">
                            @error('contact_No')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="msg"><strong>Description</strong></label>
                            <textarea class="form-control @error('msg') is-invalid @enderror" id="msg" name="msg">{{ old('msg') }}</textarea>
                            @error('msg')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" id="btn_save" type="submit">Send</button>
            </form>
        </div>
    </div>
@endsection
