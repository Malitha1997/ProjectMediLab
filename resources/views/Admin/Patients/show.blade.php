@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1"> Show Patient</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>

        </div>

    </div>

</div>

<table class="table text-dark">
    <tr>
        <th scope="col">Name</th>
        <td>{{ $user->f_name }} {{ $user->l_name }}</td>
    </tr>

    <tr>
        <th scope="col">Email</th>
        <td>{{ $user->email }}</td>
    </tr>

    <tr>
        <th scope="col">Contact No</th>
        <td>{{ $user->patient->telno }}</td>
    </tr>

    <tr>
        <th scope="col">Address</th>
        <td>{{ $user->patient->house_no }} , {{ $user->patient->street_no }} , {{ $user->patient->city }}
        </td>
    </tr>

    <tr>
        <th scope="col">Age</th>
        <td>{{ $user->patient->age }}</td>
    </tr>

    <tr>
        <th scope="col">NIC</th>
        <td>{{ $user->patient->nic }}</td>
    </tr>

    <tr>
        <th scope="col">Blood group</th>
        <td>{{ $user->patient->blood_group }}</td>
    </tr>
</table>


@endsection
