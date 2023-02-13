@extends('Layout.navbar')


@section('content')

<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1">Edit Drug informations</h3>
    </div><button class="btn btn-primary" type="button" data-aos="fade-in" data-aos-duration="1000" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('drugs.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Drug Details</span></span></a></button>
    <div class="card" data-aos="fade-in" data-aos-duration="1000">
        <form style="padding-left: 56px;margin-right: 68px;" method="post" action="{{route('drugs.update',$drugs->drug_name)}}" enctype="multipart/form-data">
         {{csrf_field()}}
         @method('PUT')
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Drug Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="drug_name" value="{{ $drugs->drug_name }}" required></div>
                @error('drug_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Quantity</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="Quantity" value="{{ $drugs->qty }}" required></div>
                @error('qty')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Issued date</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="date" name="issue_date" value="{{ $drugs->issue_date }}" required></div>
                @error('issue_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Expire date</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="date" name="expire_date" value="{{ $drugs->expire_date }}" required></div>
                @error('expire_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>



            <button class="btn btn-primary" id="btn_save" type="submit">Save</button>
        </form>
    </div>

@endsection
