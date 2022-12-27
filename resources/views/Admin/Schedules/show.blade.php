@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Show Schedule</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('schedules.index') }}"> Back</a>

        </div>

    </div>

</div>


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Doctor Name:</strong>

            {{ $doctor->f_name }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Available Days:</strong>

            {{ $schedule->available_days }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Available Time :</strong>

            {{ $schedule->available_time }}

        </div>

    </div>



</div>

@endsection
