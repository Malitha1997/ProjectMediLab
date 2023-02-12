@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Dr. {{ $user->f_name }} {{ $user->l_name }}</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('doctors.index') }}"> Back</a>

        </div>

    </div>

</div>

<table class="table text-dark">
    <tr>
        <th scope="col">Name</th>
        <td>Dr. {{ $user->f_name }} {{ $user->l_name }}</td>
    </tr>

    <tr>
        <th scope="col">Email</th>
        <td>{{ $user->email }}</td>
    </tr>

    <tr>
        <th scope="col">Contact No</th>
        <td>{{ $user->doctor->telno }}</td>
    </tr>

    <tr>
        <th scope="col">Address</th>
        <td>{{ $user->doctor->address_line1 }} , {{ $user->doctor->address_line2 }} , {{ $user->doctor->address_line3 }}.</td>
    </tr>

    <tr>
        <th scope="col">Age</th>
        <td>{{ $user->doctor->age }}</td>
    </tr>

    <tr>
        <th scope="col">NIC</th>
        <td>{{ $user->doctor->nic }}</td>
    </tr>

    <tr>
        <th scope="col">Speciality</th>
        <td>{{ $user->doctor->speciality }}</td>
    </tr>

    <tr>
        <th scope="col">Qualification</th>
        <td>{{ $user->doctor->qualification }}</td>
    </tr>

</table>


@endsection
