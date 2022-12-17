@extends('Layout.navbar')
       @section('content')
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0" data-aos="fade-down" data-aos-duration="1000">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" data-aos="fade-down" data-aos-duration="1000" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2" data-aos="fade-down" data-aos-duration="1000">
                                <div class="card-body" data-aos="fade-down" data-aos-duration="1000">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Patients</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>000AAA</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4" data-aos="fade-down" data-aos-duration="1000">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body" data-aos="fade-down" data-aos-duration="1000">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Patient Id</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>505</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-info py-2" data-aos="fade-down" data-aos-duration="1000">
                                <div class="card-body" data-aos="fade-down" data-aos-duration="1000">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Name</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>R.P.Silva</span></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-start-info py-2" data-aos="fade-down" data-aos-duration="1000">
                        <div class="card-body" data-aos="fade-down" data-aos-duration="1000">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Age</span></div>
                                    <div class="row g-0 align-items-center">
                                        <div class="col-auto">
                                            <div class="text-dark fw-bold h5 mb-0 me-3"><span>50</span></div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-info py-2" data-aos="fade-down" data-aos-duration="1000">
                <div class="card-body" data-aos="fade-down" data-aos-duration="1000">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>E-mail</span></div>
                            <div class="row g-0 align-items-center">
                                <div class="col-auto">
                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>max@gmail.com</span></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="col-md-6 col-xl-3 mb-4">
    <div class="card shadow border-start-info py-2" data-aos="fade-down" data-aos-duration="1000">
        <div class="card-body" data-aos="fade-down" data-aos-duration="1000">
            <div class="row align-items-center no-gutters">
                <div class="col me-2">
                    <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Disease</span></div>
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="text-dark fw-bold h5 mb-0 me-3"><span>xxxxxxx</span></div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
<div class="col-md-6 col-xl-3 mb-4">
    <div class="card shadow border-start-info py-2" data-aos="fade-down" data-aos-duration="1000">
        <div class="card-body" data-aos="fade-down" data-aos-duration="1000">
            <div class="row align-items-center no-gutters">
                <div class="col me-2">
                    <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>_Contact-No</span></div>
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="text-dark fw-bold h5 mb-0 me-3"><span>+9477 2431960</span></div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
@endsection
        