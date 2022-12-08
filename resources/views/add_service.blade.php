@extends('Layout.navbar')

@section('content')
                <div class="container-fluid">
                    <h3 class="text-dark mb-1">Add Service</h3>
                </div><button class="btn btn-primary" id="btn_appointment_list" type="button" style="margin-right: 2px;padding-right: 0px;"><a href="Service_list.html"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor" id="plus" class="plus">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M128 192C110.3 192 96 177.7 96 160C96 142.3 110.3 128 128 128C145.7 128 160 142.3 160 160C160 177.7 145.7 192 128 192zM200 160C200 146.7 210.7 136 224 136H448C461.3 136 472 146.7 472 160C472 173.3 461.3 184 448 184H224C210.7 184 200 173.3 200 160zM200 256C200 242.7 210.7 232 224 232H448C461.3 232 472 242.7 472 256C472 269.3 461.3 280 448 280H224C210.7 280 200 269.3 200 256zM200 352C200 338.7 210.7 328 224 328H448C461.3 328 472 338.7 472 352C472 365.3 461.3 376 448 376H224C210.7 376 200 365.3 200 352zM128 224C145.7 224 160 238.3 160 256C160 273.7 145.7 288 128 288C110.3 288 96 273.7 96 256C96 238.3 110.3 224 128 224zM128 384C110.3 384 96 369.7 96 352C96 334.3 110.3 320 128 320C145.7 320 160 334.3 160 352C160 369.7 145.7 384 128 384zM0 96C0 60.65 28.65 32 64 32H512C547.3 32 576 60.65 576 96V416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H512C520.8 432 528 424.8 528 416V96C528 87.16 520.8 80 512 80H64C55.16 80 48 87.16 48 96z"></path>
                            </svg><span style="color: rgb(255, 255, 255);">&nbsp; Service list</span></span></a></button>
                <div class="card">
                    <div class="card-group">
                        <div class="card">
                            <form style="padding-left: 26px;">
                                <div class="row">
                                    <div class="col">
                                        <div class="card"></div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Service Name</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"><input class="form-control" type="email" placeholder="Service Name"></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card"></div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Description</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"><input class="form-control" type="text" placeholder="Description"></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card"></div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Quantity</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"><input class="form-control" type="text" placeholder="Quantity"></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card"></div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="text-muted card-subtitle mb-2"><span style="color: rgb(0, 0, 0);">Rate</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"><input class="form-control" type="text" placeholder="Rate"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><button class="btn btn-primary" id="btn_save" type="button">Done</button>
@endsection