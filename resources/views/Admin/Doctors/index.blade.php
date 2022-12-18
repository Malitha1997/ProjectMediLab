@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Doctor List</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('doctors.create') }}">Add Doctor</a>

          </div>

        <div class="pull-right">

        @can('role-create')

            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>

            @endcan

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

    @foreach ($user_doctors as $doctor)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $role->name }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('doctors.show',$role->id) }}">Show</a>

            @can('role-edit')

                <a class="btn btn-primary" href="{{ route('doctors.edit',$role->id) }}">Edit</a>

            @endcan

            @can('role-delete')

                {!! Form::open(['method' => 'DELETE','route' => ['doctors.destroy', $role->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}

            @endcan

        </td>

    </tr>

    @endforeach

</table>



@endsection
