@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1"> Show Lab Assistant</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('lab_assistants.index') }}"> Back</a>

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
        <td>{{ $user->lab_assistant->telno }}</td>
    </tr>

    <tr>
        <th scope="col">Address</th>
        <td>{{ $user->lab_assistant->house_no }} , {{ $user->lab_assistant->street_no }} , {{ $user->lab_assistant->city }}</td>
    </tr>

    <tr>
        <th scope="col">Age</th>
        <td>{{ $user->lab_assistant->age }}</td>
    </tr>

    <tr>
        <th scope="col">NIC</th>
        <td>{{ $user->lab_assistant->nic }}</td>
    </tr>

    <tr>
        <th scope="col">Qualification</th>
        <td>{{ $user->lab_assistant->qualification }}</td>
    </tr>

</table>


@endsection
