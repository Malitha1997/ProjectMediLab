@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Report</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('reports.index') }}"> Back</a>

        </div>

    </div>

</div>

<table class="table text-dark">
    <tr>
        <th scope="col">Name</th>
        <td>{{ $reports->patient->user->f_name }} {{ $reports->patient->user->l_name }}</td>
    </tr>
    <tr>
        <th scope="col">Contact No.</th>
        <td>{{ $reports->patient->telno }} </td>
    </tr>
    <tr>
        <th scope="col">Email</th>
        <td>{{ $reports->patient->user->email }} </td>
    </tr>
    <tr>
        <th scope="col">Address</th>
        <td>{{ $reports->patient->address_line1}} , {{ $reports->patient->address_line2}} , {{ $reports->patient->address_line3}}.</td>
    </tr>
    <tr>
        <th scope="col">Description</th>
        <td>{{ $reports->description }}</td>
    </tr>
    <tr>
        <th scope="col">File</th>
        <td>{{ $reports->report_file }}</td>
    </tr>

</table>


@endsection
