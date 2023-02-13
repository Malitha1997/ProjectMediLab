@extends('Layout.doctorNavbar')

@section('content')

                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Appointments per Day</span></div>
                                            <div class="text-dark mb-1">
                                                <?php
                                                    $connection = mysqli_connect("localhost","root","","projectmedilab");

                                                    $query= "SELECT id FROM appointments ORDER BY id";
                                                    $query_run = mysqli_query ($connection, $query);

                                                    $row = mysqli_num_rows($query_run);
                                                    echo '<h3>'.$row.'</h3>';
                                                ?>
                                                </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Appointments per Week</span></div>
                                            <div class="text-dark mb-1">
                                                <?php
                                                    $connection = mysqli_connect("localhost","root","","projectmedilab");

                                                    $query= "SELECT id FROM appointments ORDER BY id";
                                                    $query_run = mysqli_query ($connection, $query);

                                                    $row = mysqli_num_rows($query_run);
                                                    echo '<h3>'.$row.'</h3>';
                                                ?>
                                                </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

@endsection
