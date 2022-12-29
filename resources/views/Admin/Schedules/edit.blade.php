@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Edit Schedule</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('schedules.index') }}"> Back</a>

        </div>

    </div>

</div>


@if (count($errors) > 0)

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

        </ul>@extends('Layout.navbar')

        @section('content')

        <div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
            <h3 class="text-dark mb-1">Add Schedule</h3>
        </div>
        <button class="btn btn-primary" data-aos="fade-down" data-aos-duration="1000" type="button" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('schedules.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Schedule list</span></span></a></button>
        <div class="card" data-aos="fade-in" data-aos-duration="1000">
            <form style="padding-left: 56px;margin-right: 68px;" method="POST" action="{{route('schedules.update',$doctor->user->id)}}" data-aos="fade-in" data-aos-duration="1000">
             {{csrf_field()}}
             @method('PUT')
                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">Doctor Name</lable></div>
                            <div class="col">
                                <select class="form-control" name="doctor_f_name" id="f_name">
                                    <option value="select doctor">--Select Doctor--</option>
                                    @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}">
                                            Dr. {{ $doctor->user->f_name }} {{ $doctor->user->l_name }}
                                        </option>
                                    @endforeach
                                </select>
                            @error('f_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">Available Days</lable></div>
                                <div class="col">
                                    <select id="available_day" name="available_day" class="form-control">
                                        <option value="select day">--Select Day--</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1" >Available Time</label></div>
                            <div class="col">
                            <select id="available_time" name="available_time" class="form-control">
                                <option value="select time ">--Select Time--</option>
                                <option value="from 8.00 AM to 10.00 AM ">from 8.00 AM to 10.00 AM </option>
                                <option value="from 10.00 AM to 12.00 PM">from 10.00 AM to 12.00 PM</option>
                                <option value="from 12.00 PM to 2.00 PM">from 12.00 PM to 2.00 PM</option>
                                <option value="from 2.00 PM to 4.00 PM">from 2.00 PM to 4.00 PM</option>
                                <option value="from 4.00 PM to 6.00 PM">from 4.00 PM to 6.00 PM</option>
                                <option value="from 6.00 PM to 8.00 PM">from 6.00 PM to 8.00 PM</option>
                                <option value="from 8.00 PM to 10.00 PM">from 8.00 PM to 10.00 PM</option>
                            </select>
                        </div>

        </div>
        <button class="btn btn-primary" id="btn_save" type="submit">Done</button>
        </form>
        @endsection


    </div>

@endif


{!! Form::model($schedule, ['method' => 'PATCH','route' => ['schedules.update', $schedule->id]]) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Doctor Name:

            {!! Form::text('f_name', null, array('placeholder' => 'Doctor Name','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Available Day:

            {!! Form::text('available_day', null, array('placeholder' => 'Available Day','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Available Time:

            {!! Form::text('available_time', array('placeholder' => 'Available Time','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>

{!! Form::close() !!}



@endsection
