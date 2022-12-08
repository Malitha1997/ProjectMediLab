@extends('Layout.navbar')

@section('content')
                <div class="container-fluid">
                    <h3 class="text-dark mb-1">Add Schedule</h3>
                </div><button class="btn btn-primary" id="schedule_list" type="button"><a href="Package_list.html" style="padding-right: 0px;margin-right: -14px;"><span><span style="color: rgb(255, 255, 255);">Schedule list</span></span></a></button>
                <div class="card" id="thumbnail">
                    <div class="card-group">
                        <div class="card">
                            <form style="padding-left: 26px;">
                                <div class="row">
                                    <div class="col">
                                        <div class="card"></div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Doctor's Name</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"><input class="form-control" type="email" placeholder="Doctor's Name"></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card"></div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Designation</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"><input class="form-control" type="email" placeholder="Designation"></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card"></div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Available days</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Select option</button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Sunday</a><a class="dropdown-item" href="#">Monday</a><a class="dropdown-item" href="#">Tuesday</a><a class="dropdown-item" href="#">Wednesday</a><a class="dropdown-item" href="#">Thursday</a><a class="dropdown-item" href="#">Friday</a><a class="dropdown-item" href="#">Saturday</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card"></div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Available time</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"><input class="form-control" type="text" placeholder="Start time"><input class="form-control" type="text" placeholder="End time"></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card"></div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Status</span></h6>
                                            </div>
                                        </div>
                                        <div class="card"></div>
                                    </div>
                                    <div class="col"><input type="radio"><span>Active</span><input type="radio"><span>Inactive</span></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><button class="btn btn-primary" id="btn_save" type="button">Done</button>
@endsection