@extends('Layout.navbar')


@section('content')

<div class="row" data-aos="fade-down" data-aos-duration="1000">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Lab Assistant List</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('lab_assistants.create') }}">Add Lab Assistant</a>

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

     <th width="280px">Action</th>

  </tr>

    @foreach ($user_lab_assistants as $key => $lab_assistant)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $lab_assistant->f_name }} {{ $lab_assistant->l_name }}</td>

        <td>{{ $lab_assistant->telno}}</td>

        <td>{{ $lab_assistant->email}}</td>


        <td>

            <a class="btn btn-info" href="{{ route('lab_assistants.show',$lab_assistant->user_id) }}">Show</a>

            <a class="btn btn-success" href="{{ route('lab_assistants.edit',$lab_assistant->id) }}">Edit</a>

                {!! Form::open(['method' => 'DELETE','route' => ['lab_assistants.destroy', $lab_assistant->usr_id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}


        </td>

    </tr>

    @endforeach

</table>

{!! $user_lab_assistants->render() !!}

@endsection
