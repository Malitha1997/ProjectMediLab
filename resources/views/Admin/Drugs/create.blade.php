@extends('Layout.navbar')


@section('content')

<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1"><B>Add a New Drug Informations</B></h3>
    </div><button class="btn btn-primary" type="button" data-aos="fade-in" data-aos-duration="1000" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('drugs.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Drug Details</span></span></a></button>
    <div class="card" data-aos="fade-in" data-aos-duration="1000">
        <form style="padding-left: 56px;margin-right: 68px;" method="post" action="{{route('drugs.store')}}">
         {{csrf_field()}}
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Drug Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="drug_name" value="{{ old('drug_name') }}" required>
                @if($errors->has('drug_name'))
                <p class="text-danger">{{ $errors->first('drug_name') }}</p>
                @endif
            </div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Quantity</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="qty" value="{{ old('qty') }}" required>
                @if($errors->has('qty'))
                <p class="text-danger">{{ $errors->first('qty') }}</p>
                @endif
            </div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Issued date</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="issue_date" value="{{ old('issue_date') }}" required>
                @if($errors->has('issue_date'))
                <p class="text-danger">{{ $errors->first('issue_date') }}</p>
                @endif
            </div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Expire date</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="expire_date" value="{{ old('expire_date') }}" required>
                @if($errors->has('expire_date'))
                <p class="text-danger">{{ $errors->first('expire_date') }}</p>
                @endif
            </div>
            </div>

            <button class="btn btn-primary" id="btn_save" type="submit">Add</button>
        </form>
    </div>

@endsection
