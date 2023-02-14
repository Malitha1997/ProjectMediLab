@extends('Layout.navbar')


@section('content')

<h3 class="text-dark mb-1">Payment</h3>
                </div><button class="btn btn-primary" id="btn_bill_list" type="button" style="margin-right: 2px;padding-right: 0px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M128 192C110.3 192 96 177.7 96 160C96 142.3 110.3 128 128 128C145.7 128 160 142.3 160 160C160 177.7 145.7 192 128 192zM200 160C200 146.7 210.7 136 224 136H448C461.3 136 472 146.7 472 160C472 173.3 461.3 184 448 184H224C210.7 184 200 173.3 200 160zM200 256C200 242.7 210.7 232 224 232H448C461.3 232 472 242.7 472 256C472 269.3 461.3 280 448 280H224C210.7 280 200 269.3 200 256zM200 352C200 338.7 210.7 328 224 328H448C461.3 328 472 338.7 472 352C472 365.3 461.3 376 448 376H224C210.7 376 200 365.3 200 352zM128 224C145.7 224 160 238.3 160 256C160 273.7 145.7 288 128 288C110.3 288 96 273.7 96 256C96 238.3 110.3 224 128 224zM128 384C110.3 384 96 369.7 96 352C96 334.3 110.3 320 128 320C145.7 320 160 334.3 160 352C160 369.7 145.7 384 128 384zM0 96C0 60.65 28.65 32 64 32H512C547.3 32 576 60.65 576 96V416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H512C520.8 432 528 424.8 528 416V96C528 87.16 520.8 80 512 80H64C55.16 80 48 87.16 48 96z"></path>
                    </svg><a href="#"><span><span style="color: rgb(255, 255, 255);">&nbsp;Payment List</span></span></a></button><img id="patient_image" class="patient_image">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">

            <form onsubmit="SendEmail(); reset(); return false;">

                                    <tr>
                                        <td><span style="color: rgb(0, 0, 0);">E-mail</span></td>
                                        <th><input class="form-control" type="text" id="service_name" placeholder="abc@gmail.com." name="e_mail" required>
                                            <span style="color: rgb(0, 0, 0);">Card Accepted</span>

                                            <head>
                                                <style>
                                                     div.CS {
                                                    margin: 5px;
                                                    border: 1px solid #ccc;
                                                    float: left;
                                                    width: 180px;
                                                     }

                                                     div.CS:hover {
                                                      border: 1px solid #777;
                                                     }

                                                    div.CS{
                                                    width: 100%;
                                                    height: auto;
                                                    }

                                                    div.desc {
                                                    padding: 15px;
                                                    text-align: center;
                                                    }
                                                 </style>
                                            </head>

                                            <body>

                                            <div class="CS">
                                              <a target="_blank" href="visa.png">
                                                <img src="visa.png" alt="Forest" width="200" height="200">
                                              </a>

                                            </div>

                                            </body>




                                    </tr>

                                    <tr>

                                    <th><span style="font-weight: normal !important; color: rgb(0, 0, 0);">State</span></th>
                                        <th><input class="form-control" type="text" id="service_name" placeholder="abc" name="state" required>

                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        </th>

                                    <th><span style="font-weight: normal !important; color: rgb(0, 0, 0);">Credit card Number</span></th>
                                            <th><input class="form-control" type="number" id="service_name" placeholder="123456" name="credit_card_number" required>

                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                            </th>
                                    </tr>

                                    <tr>



                                    <th><span style="font-weight: normal !important; color: rgb(0, 0, 0);">Expire month</span></th>
                                    <th><input class="form-control" type="text" id="service_name" placeholder=January name="expire_monnth" required>

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </th>

                                    <th><span style="font-weight: normal !important; color: rgb(0, 0, 0);">Expire year</span></th>
                                    <th><input class="form-control" type="text" id="service_name" placeholder="2023" name="expire_year" required>

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </th>



                                    <td><span style="font-weight: normal !important; color: rgb(0, 0, 0);">CVV</span></td>
                                    <th><input class="form-control" type="number" id="service_name" placeholder="123" name="cvv" required>

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </th>

                                    </tr>
                                </table>
                            </tbody>
                                    <div>
                                        <button class="btn btn-primary " id="btn_save" type="button" onclick="savefunction()">Save</button>

                                    <script>src="https://smtpjs.com/v3/smtp.js"</script>

                                    <script>
                                    function SendEmail()
                                    {
                                        Host : "smtp.gmail.com",
                                        Username : "yddivya24@gmail.com",
                                        Password : "pwdpayment"
                                        To : 'yddivya24@gmail.com',
                                        From : document.getElementById("email").value,
                                        Subject : "New Payment Enquiry",
                                        Body : "Name: " +document.getElementById("Credit card Number").value
                                        "<br> Email: " +document.getElementById("email").value
                                        "<br> CCV : " +document.getElementById("CCV").value

                                        }.then(
                                        message => alert(Email sent succesfully.)
                                        );
                                    }

                                    </script>
                                    </div>





                        </div>
                    </div>
                </div>
            </form>
            </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Telehealth2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>


