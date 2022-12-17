extends('layout')
@section('contents')

<div class="container">
    <div class="row justify-content-center vh-100">
        <div class="card w-25 my-auto shadow">
            <div class="card-header text-center bg-primary text-white">
                <h2>Login</h2>
            </div>
            <div class="card-body">
                <form action="" method="">
                    <div class="form-group">
                        <label for="uname">User name</label>
                        <input type="uname" id="uname" class="form-control" name="" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" name="" />
                    </div>
                    <button class="btn btn-primary w-100" type="button">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

