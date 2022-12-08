@extends('Layout.navbar')

@section('content')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Doctor list</h3>
                </div><button class="btn btn-primary" id="add_patient" type="button"><a href="Add_doctor.html"><span style="color: rgb(255, 255, 255);">+Add doctor</span></a></button>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                            <option value="10" selected="">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>&nbsp;</label></div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Doctor ID</th>
                                        <th>Picture</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email Address</th>
                                        <th>Phone number</th>
                                        <th>Mobile number</th>
                                        <th>Speciality</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td><img width="100" height="80"></td>
                                        <td>Malitha</td>
                                        <td>Halahakoon</td>
                                        <td>test@gmail.com</td>
                                        <td>0411234567</td>
                                        <td>0711234567</td>
                                        <td>Cell 8</td>
                                    </tr>
                                    <tr>
                                        <td>002</td>
                                        <td><img></td>
                                        <td>firstname1</td>
                                        <td>lastname1</td>
                                        <td>test1@gmail.com</td>
                                        <td><br>0411234567<br><br></td>
                                        <td><br>0711234567<br><br></td>
                                        <td>Cell 8</td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td><img></td>
                                        <td><br>firstname2<br><br></td>
                                        <td><br>lastname2<br><br></td>
                                        <td><br>test2@gmail.com<br><br></td>
                                        <td><br>0411234567<br><br></td>
                                        <td><br>0711234567<br><br></td>
                                        <td>Cell 8</td>
                                    </tr>
                                    <tr>
                                        <td>004</td>
                                        <td><img></td>
                                        <td><br>firstname3<br><br></td>
                                        <td><br>lastname3<br><br></td>
                                        <td><br>test3@gmail.com<br><br></td>
                                        <td><br>0411234567<br><br></td>
                                        <td><br>0711234567<br><br></td>
                                        <td>Cell 8</td>
                                    </tr>
                                    <tr>
                                        <td>005</td>
                                        <td><img></td>
                                        <td><br>firstname4<br><br></td>
                                        <td><br>lastname4<br><br></td>
                                        <td><br>test4@gmail.com<br><br></td>
                                        <td><br>0411234567<br><br></td>
                                        <td><br>0711234567<br><br></td>
                                        <td>Cell 8</td>
                                    </tr>
                                    <tr>
                                        <td>006</td>
                                        <td><img></td>
                                        <td><br>firstname5<br><br></td>
                                        <td><br>lastname5<br><br></td>
                                        <td><br>test5@gmail.com<br><br></td>
                                        <td><br>0411234567<br><br></td>
                                        <td><br>0711234567<br><br></td>
                                        <td>Cell 8</td>
                                    </tr>
                                    <tr>
                                        <td>007</td>
                                        <td><img></td>
                                        <td><br>firstname6<br><br></td>
                                        <td><br>lastname6<br><br></td>
                                        <td><br>test6@gmail.com<br><br></td>
                                        <td><br>0411234567<br><br></td>
                                        <td><br>0711234567<br><br></td>
                                        <td>Cell 8</td>
                                    </tr>
                                    <tr>
                                        <td>008</td>
                                        <td><img></td>
                                        <td><br>firstname7<br><br></td>
                                        <td><br>lastname7<br><br></td>
                                        <td><br>test7@gmail.com<br><br></td>
                                        <td><br>0411234567<br><br></td>
                                        <td><br>0711234567<br><br></td>
                                        <td>Cell 8</td>
                                    </tr>
                                    <tr>
                                        <td>009</td>
                                        <td><img></td>
                                        <td><br>firstname8<br><br></td>
                                        <td><br>lastname8<br><br></td>
                                        <td><br>test8@gmail.com<br><br></td>
                                        <td><br>0411234567<br><br></td>
                                        <td><br>0711234567<br><br></td>
                                        <td>Cell 8</td>
                                    </tr>
                                    <tr>
                                        <td>010</td>
                                        <td><img></td>
                                        <td><br>firstname9<br><br></td>
                                        <td><br>lastname9<br><br></td>
                                        <td><br>test9@gmail.com<br><br></td>
                                        <td><br>0411234567<br><br></td>
                                        <td><br>0711234567<br><br></td>
                                        <td>Cell 8</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Summary 1</td>
                                        <td>Summary 2</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
@endsection