@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1"> View Drug Informations</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('drug.index') }}"> Back</a>

        </div>

    </div>

</div>


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Drug Name:

            {{ $drugs->drug_name }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Quantity :

            {{ $drugs->qty }}

        </div>


    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Issued date :

            {{ $drugs->issue_date }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Expire date :

            {{ $drugs->expire_date }}

        </div>


</div>

@endsection
