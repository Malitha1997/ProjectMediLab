@extends('Layout.navbar')

@section('content')
                <div class="container-fluid">
                    <h3 class="text-dark mb-1">Add packege</h3>
                </div><button class="btn btn-primary" id="btn_package_list" type="button" style="margin-right: 2px;padding-right: 0px;"><a href="Service_list.html"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor" id="plus" class="plus">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M128 192C110.3 192 96 177.7 96 160C96 142.3 110.3 128 128 128C145.7 128 160 142.3 160 160C160 177.7 145.7 192 128 192zM200 160C200 146.7 210.7 136 224 136H448C461.3 136 472 146.7 472 160C472 173.3 461.3 184 448 184H224C210.7 184 200 173.3 200 160zM200 256C200 242.7 210.7 232 224 232H448C461.3 232 472 242.7 472 256C472 269.3 461.3 280 448 280H224C210.7 280 200 269.3 200 256zM200 352C200 338.7 210.7 328 224 328H448C461.3 328 472 338.7 472 352C472 365.3 461.3 376 448 376H224C210.7 376 200 365.3 200 352zM128 224C145.7 224 160 238.3 160 256C160 273.7 145.7 288 128 288C110.3 288 96 273.7 96 256C96 238.3 110.3 224 128 224zM128 384C110.3 384 96 369.7 96 352C96 334.3 110.3 320 128 320C145.7 320 160 334.3 160 352C160 369.7 145.7 384 128 384zM0 96C0 60.65 28.65 32 64 32H512C547.3 32 576 60.65 576 96V416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H512C520.8 432 528 424.8 528 416V96C528 87.16 520.8 80 512 80H64C55.16 80 48 87.16 48 96z"></path>
                            </svg><span style="color: rgb(255, 255, 255);">&nbsp; Packege list</span></span></a></button>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive" style="padding-bottom: 63px;margin-bottom: 8px;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><span style="font-weight: normal !important; color: rgb(0, 0, 0);">Package name</span><span style="font-weight: normal !important; color: rgb(255, 0, 0);">*</span></th>
                                        <th><input type="text" id="service_name" class="service_name"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span style="color: rgb(0, 0, 0);">Description</span> <span style="color: rgb(255, 0, 0);">*</span></td>
                                        <td><input type="text" id="description" class="description"></td>
                                    </tr>
                                    <tr>
                                        <td><span style="color: rgb(0, 0, 0);">Package including</span><span style="color: rgb(255, 0, 0);">*</span></td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Service</th>
                                                            <th>Quantity</th>
                                                            <th>Rate</th>
                                                            <th>Add/Remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><span style="color: rgb(0, 0, 0);">Student</span></td>
                                                            <td><span style="color: rgb(0, 0, 0);">1</span></td>
                                                            <td><span style="color: rgb(0, 0, 0);">20000</span></td>
                                                            <td><button class="btn btn-primary" id="btn_add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                        <path d="M200 344V280H136C122.7 280 112 269.3 112 256C112 242.7 122.7 232 136 232H200V168C200 154.7 210.7 144 224 144C237.3 144 248 154.7 248 168V232H312C325.3 232 336 242.7 336 256C336 269.3 325.3 280 312 280H248V344C248 357.3 237.3 368 224 368C210.7 368 200 357.3 200 344zM0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H384C392.8 432 400 424.8 400 416V96C400 87.16 392.8 80 384 80H64C55.16 80 48 87.16 48 96z"></path>
                                                                    </svg></button><button class="btn btn-primary" id="btn_delete" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                        <path d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"></path>
                                                                    </svg></button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span style="color: rgb(0, 0, 0);">Discount</span><span style="color: rgb(255, 0, 0);">*</span></td>
                                        <td><input type="text" id="Rate" class="Rate"></td>
                                    </tr>
                                    <tr>
                                        <td><span style="color: rgb(0, 0, 0);">Status</span> <span style="color: rgb(255, 0, 0);">*</span></td>
                                        <td><input type="radio"><span><span style="color: rgb(0, 0, 0);">Active</span></span><input type="radio"><span><span style="color: rgb(0, 0, 0);">Inactive</span></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><button class="btn btn-primary" type="button">Save</button>
                    </div>
                </div>
@endsection
            