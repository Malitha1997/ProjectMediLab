@extends('Layout.navbar')


@section('content')

<div class="row" data-aos="fade-down" data-aos-duration="1000">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Report list</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('reports.create') }}">Add report</a>

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



     <th>Patient Name</th>

     <th>Contact No</th>

     <th>Email Address</th>



     <th width="280px">Action</th>

  </tr>

    @foreach ($reports as $key => $rep)

    <tr>

        <td>{{ $rep->patient->user->f_name }}</td>

        <td>{{ $rep->patient->telno}}</td>

        <td>{{ $rep->patient->user->email}}</td>



        <td>

            <a class="btn btn-info" href="{{ route('reports.show',$rep->id) }}">Show</a>



                <a class="btn btn-primary" href="{{ route('reports.edit',$rep->id) }}">Edit</a>





                {!! Form::open(['method' => 'DELETE','route' => ['reports.destroy', $rep->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}


        </td>

    </tr>

    @endforeach

</table>



@endsection
