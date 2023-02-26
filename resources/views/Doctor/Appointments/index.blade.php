@extends('Layout.doctorNavbar')

@section('content')

<div class="row" data-aos="fade-down" data-aos-duration="1000">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Appointment List</h2>

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

    <th>Appointment date</th>

    <th>Appointment time</th>

    <th width="280px">Action</th>

  </tr>

    @foreach ($appointment_users as $key => $appointments)

    <tr>


        <td>{{ $appointments->patient->user->f_name }} {{ $appointments->patient->user->l_name }}</td>

        <td>{{ $appointments->schedule->available_day}}</td>

        <td>{{ $appointments->time }}</td>

        <td>


                {!! Form::open(['method' => 'DELETE','route' => ['appointments.destroy', $appointments->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Cancel Appointment', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}


        </td>

    </tr>

    @endforeach

</table>

{!! $appointment_users->render() !!}

@endsection
