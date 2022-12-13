@extends('Layout.navbar')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-1">Add User</h3><button class="btn btn-primary" type="button" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="User_list.html"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">User list</span></span></a></button>
</div>
@foreach($errors->all() as $error)
                    <div class='alert alert-danger' role='alert'>
                            {{ $error }}
                    </div>

                    @endforeach
<form style="padding-left: 56px;margin-right: 68px"; method="post" action="users">
    {{ csrf_field() }}
    <div class="row">
        <div class="col"><label class="col-form-label">Username</label></div>
        <div class="col"><input class="form-control" type="text" name="username"></div>
    </div>
    <div class="row">
        <div class="col"><label class="col-form-label">Password</label></div>
        <div class="col"><input class="form-control" type="password" name="password"></div>
    </div>
    <div class="row">
        <div class="col"><label class="col-form-label">Confirm Password</label></div>
        <div class="col"><input class="form-control" type="password" name="password"></div>
    </div>
    <div class="row">
        <div class="col"><label class="col-form-label">Role</label></div>
        <div class="col"><input class="form-control" type="text" name="role"></div>
    </div>
    <div class="row">
        <div class="col"><label class="col-form-label">Email</label></div>
        <div class="col"><input class="form-control" type="email" placeholder="user@example.com" name="email"></div>
    </div><button class="btn btn-primary" id="btn_save" type="submit">Save</button>
</form>
@endsection
