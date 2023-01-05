@extends('Layout.navbar')


@section('content')

<div class="row" data-aos="fade-down" data-aos-duration="1000">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Doctor List</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('doctors.create') }}">Add Doctor</a>

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

     <th>Name</th>

     <th>Contact No</th>

     <th>Email Address</th>

     <th>Speciality</th>

     <th width="280px">Action</th>

  </tr>

    @foreach ($user_doctors as $key => $doctor)

    <tr>

        <td>{{ ++$i }}</td>

        <td>Dr.{{ $doctor->f_name }} {{ $doctor->l_name }}</td>

        <td>{{ $doctor->telno}}</td>

        <td>{{ $doctor->email}}</td>

        <td>{{ $doctor->speciality }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('doctors.show',$doctor->user_id) }}">Show</a>



                <a class="btn btn-success" href="{{ route('doctors.edit',$doctor->id) }}">Edit</a>





                {!! Form::open(['method' => 'DELETE','route' => ['doctors.destroy', $doctor->usr_id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}


        </td>

    </tr>

    @endforeach

</table>

{!! $user_doctors->render() !!}

@endsection
