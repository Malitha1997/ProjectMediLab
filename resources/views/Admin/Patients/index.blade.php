@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Patient List</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('patients.create') }}">Add Patient</a>

        </div>

    </div>

</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif


<table class="table table-bordered">

  <tr>

     <th>No</th>

     <th>Name</th>

     <th width="280px">Action</th>

  </tr>

    @foreach ($user_patients as $patient)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $patient->f_name }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('patients.show',$patient->user_id )}}">Show</a>



                <a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">Edit</a>



                {!! Form::open(['method' => 'DELETE','route' => ['patients.destroy', $patient->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}



        </td>

    </tr>

    @endforeach

</table>





@endsection
