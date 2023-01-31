@extends('Layout.navbar')


@section('content')

<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1">Add Report</h3>
    </div><button class="btn btn-primary" type="button" data-aos="fade-down" data-aos-duration="1000" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('reports.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 5px;margin-left: 5px;margin-right: 5px;"><span style="color: rgb(255, 255, 255);">Report list</span></span></a></button>

    <div class="card" data-aos="fade-down" data-aos-duration="1000">
        <form style="padding-left: 56px;margin-right: 68px;" method="post" action="{{route('reports.store')}}">
         {{csrf_field()}}

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Patient Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="patient_name" value="{{ old('patient_name') }}" required>
                    @if($errors->has('patient_name'))
                    <p class="text-danger">{{ $errors->first('patient_name') }}</p>
                    @endif</div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Description</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="description" value="{{ old('description') }}" required>
                    @if($errors->has('description'))
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                    @endif</div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Doctor Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="doctor_id" value="{{ old('doctor_id') }}" required>
                    @if($errors->has('doctor_id'))
                    <p class="text-danger">{{ $errors->first('doctor_id') }}</p>
                    @endif</div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Lab Assistant Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="lab_assistant_id" value="{{ old('lab_assistant_id') }}" required>
                    @if($errors->has('lab_assistant_id'))
                    <p class="text-danger">{{ $errors->first('lab_assistant_id') }}</p>
                    @endif</div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Test Bill Id</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="test_bill_id" value="{{ old('test_bill_id') }}" required>
                    @if($errors->has('test_bill_id'))
                    <p class="text-danger">{{ $errors->first('test_bill_id') }}</p>
                    @endif</div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Uplaod Report File </label></div>


                    <div class="col">
                        <input class="form-control text-dark mb-1" type="file" name="report_file" value="{{ old('report_file') }}" required>
                        @if($errors->has('report_file'))
                        <p class="text-danger">{{ $errors->first('report_file') }}</p>
                        @endif
                    </div>
                </div>
                <button class="btn btn-primary" id="btn_save" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
