@extends('Layout.labassistantNavbar')

@section('content')

                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Reports</span></div>
                                            <div class="text-dark mb-1">
                                                <?php
                                                    $connection = mysqli_connect("localhost","root","","projectmedilab");

                                                    $query= "SELECT id FROM doctors ORDER BY id";
                                                    $query_run = mysqli_query ($connection, $query);

                                                    $row = mysqli_num_rows($query_run);
                                                    echo '<h3>'.$row.'</h3>';
                                                ?>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Doctors</span></div>
                                            <div class="text-dark mb-1">
                                                <?php
                                                    $connection = mysqli_connect("localhost","root","","projectmedilab");

                                                    $query= "SELECT id FROM doctors ORDER BY id";
                                                    $query_run = mysqli_query ($connection, $query);

                                                    $row = mysqli_num_rows($query_run);
                                                    echo '<h3>'.$row.'</h3>';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Patients</span></div>
                                            <div class="text-dark mb-1">
                                                <?php
                                                    $connection = mysqli_connect("localhost","root","","projectmedilab");

                                                    $query= "SELECT id FROM patients ORDER BY id";
                                                    $query_run = mysqli_query ($connection, $query);

                                                    $row = mysqli_num_rows($query_run);
                                                    echo '<h3>'.$row.'</h3>';
                                                ?>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-xl-8">





                        </div>
                    </div>

@endsection
