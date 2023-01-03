@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1"> Show Appointment</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('appointments.index') }}"> Back</a>

        </div>

    </div>

</div>


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Name:

            {{ $appointments->patient_id }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

           Email:

            {{ $appointments->doctor_id }}

        </div>

    </div>

</div>

@endsection
