@extends('Layout.navbar')


@section('content')

<div class="row" data-aos="fade-down" data-aos-duration="1000">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Appointment List</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('appointments.create') }}">Add Appointment</a>

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

     <th>No</th>

     <th>Patient ID</th>

     <th>Doctor name</th>

     <th>Appointment date</th>

     <th>Appointment time</th>

     <th width="280px">Action</th>

  </tr>

    @foreach ($appointment_doctors as $key => $appointments)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $appointments->patient_id }}</td>
s
        <td>{{ $appointments->doctor_id}}</td>
s
        <td>{{ $appointments->date}}</td>
s
        <td>{{ $appointments->time }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('doctors.show',$appointments->id) }}">Show</a>

                <a class="btn btn-success" href="{{ route('appointments.edit',$appointments->id) }}">Edit</a>

                {!! Form::open(['method' => 'DELETE','route' => ['appointments.destroy', $appointments->usr_id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}


        </td>

    </tr>

    @endforeach

</table>

{!! $appointment_doctors->render() !!}

@endsection
