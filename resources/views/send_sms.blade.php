@extends('Layout.navbar')

@section('content')
                <div class="container-fluid">
                    <h3 class="text-dark mb-1">Send SMS</h3>
                </div>
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3"><label class="form-label" for="email"><strong>Patient Id</strong><br></label><input class="form-control" type="email" id="email" placeholder="" name="email"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3"><label class="form-label" for="first_name"><strong>Patient Name</strong><br></label><input class="form-control" type="text" id="first_name" placeholder="John" name="first_name"></div>
                                    <div class="form-group mb-3"><label class="form-label" for="email"><strong>Contact Number</strong><br></label><input class="form-control" type="email" id="contact_No" placeholder="07xxxxxxxx" name="contact_No"></div>
                                    <div class="form-group mb-3"><label class="form-label" for="address"><strong>Description</strong></label><input class="form-control" type="text" id="address" placeholder="" name="address"></div>
                                    <div class="form-group mb-3">
                                        <fieldset></fieldset>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><button class="btn btn-primary" id="btn_save" type="button">Send</button>
@endsection