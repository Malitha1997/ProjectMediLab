@extends('Layout.patientNavbar')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1"> Show User</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>

        </div>

    </div>


<table class="table text-dark">
        <tr>
            <th scope="col">Name</th>
            <td>{{ $user->f_name }}</td>
        </tr>

        <tr>
            <th scope="col">Email</th>
            <td>{{ $user->email }}</td>
        </tr>

        <tr>
            <th scope="col">Role</th>
            <td>
                @if(!empty($user->getRoleNames()))

                @foreach($user->getRoleNames() as $v)

                    <label>{{ $v }}</label>

                @endforeach

            @endif
            </td>
        </tr>
</table>


</div>

@endsection
