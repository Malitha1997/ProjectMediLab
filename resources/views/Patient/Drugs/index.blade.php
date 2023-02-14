@extends('Layout.patientNavbar')


@section('content')

<div class="row" data-aos="fade-down" data-aos-duration="1000">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Drug List</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('drugs.create') }}">Add Drug</a>

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

     <th>Drug name</th>

     <th>Quantity</th>

     <th>Issue date</th>

     <th>Expire date</th>



     <th width="280px">Action</th>

  </tr>

    @foreach ($drugs as $key => $drugs)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $drugs->drug_name }}</td>

        <td>{{ $drugs->qty}}</td>

        <td>{{ $drugs->issue_date}}</td>

        <td>{{ $drugs->expire_date }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('drugs.show',$drugs->drug_id) }}">Show</a>



        </td>

    </tr>

    @endforeach

</table>

{!! $drugs->render() !!}

@endsection
