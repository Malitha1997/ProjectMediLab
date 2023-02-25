@extends('Layout.navbar')

@section('content')

<div class="row" data-aos="fade-down" data-aos-duration="1000">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Appointment List</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('appointment-patient') }}">Add Appointment</a>

        </div>

    </div>

</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif


<table class="table table-bordered text-dark mb-1" >

  <tr>



     <th>Patient name</th>

     <th>Doctor name</th>

     <th>Appointment date</th>

     <th>Appointment time</th>

     <th width="280px">Action</th>

  </tr>

    @foreach ($appointment as $key => $appointments)

    <tr>



        <td>{{ $appointments->patient->user->f_name }} {{ $appointments->patient->user->l_name }}</td>

        <td>Dr. {{ $appointments->doctor->user->f_name}} {{ $appointments->doctor->user->l_name}}</td>

        <td>{{ $appointments->schedule->available_day}}</td>

        <td>{{ $appointments->time }}</td>

        <td>



                <a class="btn btn-success" href="{{ route('appointments.edit',$appointments->id) }}">Edit</a>

                {!! Form::open(['method' => 'DELETE','route' => ['appointments.destroy', $appointments->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Cancel', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}


        </td>

    </tr>

    @endforeach

</table>


@endsection
