@extends('Layout.navbar')


@section('content')

<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1">Edit Doctor</h3>
    </div><button class="btn btn-primary" type="button" data-aos="fade-in" data-aos-duration="1000" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('doctors.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Doctor list</span></span></a></button>
    <div class="card" data-aos="fade-in" data-aos-duration="1000">
        <form style="padding-left: 56px;margin-right: 68px;" method="PUT" action="{{route('reports.update',$patient->id)}}" enctype="multipart/form-data">
         {{csrf_field()}}
         @method('PUT')
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Patient Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="patient_name" value="{{ $reports->patient->user->f_name }} {{ $reports->patient->user->l_name }}" required>
                @if($errors->has('patient_name'))
                <p class="text-danger">{{ $errors->first('patient_name') }}</p>
                @endif
                </div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Doctor Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="doctor_name" value="{{ $reports->doctor->user->f_name }} {{ $reports->doctor->user->l_name }}" required>
                @if($errors->has('doctor_name'))
                <p class="text-danger">{{ $errors->first('doctor_name') }}</p>
                @endif
                </div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Lab Assistant Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="lab_assistant_name" value="{{ $reports->lab_assistant->user->f_name }} {{ $reports->lab_assistant->user->l_name }}" required>
                @if($errors->has('lab_assistant_name'))
                <p class="text-danger">{{ $errors->first('lab_assistant_name') }}</p>
                @endif
                </div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Description</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="lab_assistant_name" value="{{ $reports->description }}" required>
                @if($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
                @endif
                </div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Report file</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="report_file" value="{{ $reports->report_file }}" required>
                @if($errors->has('report_file'))
                <p class="text-danger">{{ $errors->first('report_file') }}</p>
                @endif
                </div>
            </div>


            <button class="btn btn-primary" id="btn_save" type="submit">Save</button>
        </form>
    </div>

@endsection
