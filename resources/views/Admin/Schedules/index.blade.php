@extends('Layout.navbar')


@section('content')

<div class="row" data-aos="fade-down" data-aos-duration="1000">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Schedule List</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('schedules.create') }}">Add Schedule</a>

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

     <th>Doctor Name</th>

     <th>Available Days</th>

     <th>Available Time</th>

     <th width="280px">Action</th>

  </tr>

    @foreach ($doctor_schedules as $key => $schedule)

    <tr>

        <td>{{ ++$i }}</td>

        <td>Dr. {{ $schedule->doctor->user->f_name}} {{ $schedule->doctor->user->l_name}}</td>

        <td>{{ $schedule->available_day}}</td>

        <td>{{ $schedule->available_time}}</td>


        <td>

            <a class="btn btn-info" href="{{ route('schedules.show',$schedule->id) }}">Show</a>



                <a class="btn btn-primary" href="{{ route('schedules.edit',$schedule->id) }}">Edit</a>



                {!! Form::open(['method' => 'DELETE','route' => ['schedules.destroy', $schedule->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}


        </td>

    </tr>

    @endforeach

</table>

{!! $doctor_schedules->render() !!}

@endsection
