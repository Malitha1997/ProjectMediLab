@extends('Layout.patientNavbar')
       @section('content')
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0" data-aos="fade-down" data-aos-duration="1000">Dashboard</h3>
                    </div>

                        <div class="col-md-6 col-xl-3 mb-4" data-aos="fade-down" data-aos-duration="1000">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body" data-aos="fade-down" data-aos-duration="1000">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Doctors</span></div>
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

        @endsection
