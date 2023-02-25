@extends('Layout.navbar')


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

    @foreach ($drugs as $key => $drug)

    <tr>

        

        <td>{{ $drug->drug_name }}</td>

        <td>{{ $drug->qty}}</td>

        <td>{{ $drug->issue_date}}</td>

        <td>{{ $drug->expire_date }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('drugs.show',$drug->id) }}">Show</a>

            <a class="btn btn-success" href="{{ route('drugs.edit',$drug->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['drugs.destroy', $drug->id],'style'=>'display:inline']) !!}

                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}


        </td>

    </tr>

    @endforeach

</table>



@endsection
