<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MediLab</title>
    <link rel="stylesheet" href="{{asset('cssfile/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('cssfile/FPE-Gentella-form-elements.css')}}">
    <link rel="stylesheet" href="{{asset('cssfile/Hero-Clean-Reverse-images.css')}}">
    <link rel="stylesheet" href="{{asset('cssfile/Navbar-Right-Links-icons.css')}}">
    <link rel="stylesheet" href="{{asset('cssfile/Sidebar-navbar.css')}}">
    <link rel="stylesheet" href="{{asset('cssfile/styles.css')}}">

    <script src="{{asset('jsfile/bootstrap.min.js')}}"></script>
    <script src="{{asset('jsfile/aos.min.js')}}"></script>
    <script src="{{asset('jsfile/bs-init.js')}}"></script>
    <script src="{{asset('jsfile/theme.js')}}"></script>
    <script src="{{asset('jsfile/chart.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light shadow-sm py-3 fixed-top" data-aos="fade-down" data-aos-duration="950" style="border-width: 0px;border-color: rgb(42,132,222);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-md bs-icon-circle d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor">
            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
            <path d="M352.4 243.8l-49.83 99.5c-6.009 12-23.41 11.62-28.92-.625L216.7 216.3l-30.05 71.75L88.55 288l176.4 182.2c12.66 13.07 33.36 13.07 46.03 0l176.4-182.2l-112.1 .0052L352.4 243.8zM495.2 62.86c-54.36-46.98-137.5-38.5-187.5 13.06L288 96.25L268.3 75.92C218.3 24.36 135.2 15.88 80.81 62.86C23.37 112.5 16.84 197.6 60.18 256h105l35.93-86.25c5.508-12.88 23.66-13.12 29.54-.375l58.21 129.4l49.07-98c5.884-11.75 22.78-11.75 28.67 0l27.67 55.25h121.5C559.2 197.6 552.6 112.5 495.2 62.86z"></path>
        </svg></span><span>Medilab</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" data-aos="fade" data-aos-once="true" id="navcol-2">
                <ul class="navbar-nav ms-auto" >
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item dropdown" data-aos="zoom-in-down" style="overflow: visible;transition: ease-in-out;backdrop-filter: opacity(1);"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Services</a>
                        <div class="dropdown-menu" data-aos="fade-down"><a class="dropdown-item" data-aos="fade-down" href="#">Appointment for doctor&nbsp;</a><a class="dropdown-item" data-aos="fade-down" href="#">Pharmacy</a><a class="dropdown-item" data-aos="fade-down" href="#">Laboratory</a></div>
                    </li>
                </ul><button class="btn btn-primary" type="button"><a href="{{ route('register') }}"><span><span style="color: rgb(255, 255, 255);">Signup</span></span></a></button>
            </div><button class="btn btn-primary" id="btn_login" type="button"><a href="/login"><span><span style="color: rgb(255, 255, 255);">Login</span></span></a></button>
        </div>
    </nav>
    <div id="banar" class="banar">
        <section data-aos="fade-down" data-aos-duration="1000">
            <div class="container h-100 position-relative" style="top: -50px;">
                <div class="row gy-5 gy-lg-0 row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-body pt-5 p-4" style="--bs-body-bg: #ffffff;">
                                <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center position-absolute mb-3 bs-icon lg" style="top: -30px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M160 256C160 185.3 217.3 128 288 128C358.7 128 416 185.3 416 256C416 326.7 358.7 384 288 384C217.3 384 160 326.7 160 256zM288 336C332.2 336 368 300.2 368 256C368 211.8 332.2 176 288 176C287.3 176 286.7 176 285.1 176C287.3 181.1 288 186.5 288 192C288 227.3 259.3 256 224 256C218.5 256 213.1 255.3 208 253.1C208 254.7 208 255.3 208 255.1C208 300.2 243.8 336 288 336L288 336zM95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6V112.6zM288 80C222.8 80 169.2 109.6 128.1 147.7C89.6 183.5 63.02 225.1 49.44 256C63.02 286 89.6 328.5 128.1 364.3C169.2 402.4 222.8 432 288 432C353.2 432 406.8 402.4 447.9 364.3C486.4 328.5 512.1 286 526.6 256C512.1 225.1 486.4 183.5 447.9 147.7C406.8 109.6 353.2 80 288 80V80z"></path>
                                </svg></div>
                                <h4 class="card-title text-dark">Vision</h4>
                                <p class="card-text">Tele health system envisions a world with access to quality health care and to essential information, in order to achieve better health for all.&nbsp;</p>
                            </div>
                            <div class="card-footer p-4 py-3"><a href="#">Learn more&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg></a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body pt-5 p-4" style="--bs-body-bg: #ffffff;">
                                <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center position-absolute mb-3 bs-icon lg" style="top: -30px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M463.1 256c8.75 0 15.1-7.25 15.1-16S472.7 224 463.1 224c-8.75 0-15.1 7.25-15.1 16S455.2 256 463.1 256zM287.1 176c48.5 0 87.1-39.5 87.1-88S336.5 0 287.1 0S200 39.5 200 88S239.5 176 287.1 176zM80 256c8.75 0 15.1-7.25 15.1-16S88.75 224 80 224S64 231.3 64 240S71.25 256 80 256zM75.91 375.1c.6289-.459 41.62-29.26 100.1-50.05L176 432h223.1l-.0004-106.8c58.32 20.8 99.51 49.49 100.1 49.91C508.6 381.1 518.3 384 527.9 384c14.98 0 29.73-7 39.11-20.09c15.41-21.59 10.41-51.56-11.16-66.97c-1.955-1.391-21.1-14.83-51.83-30.85C495.5 279.2 480.7 288 463.1 288c-26.25 0-47.1-21.75-47.1-48c0-3.549 .4648-6.992 1.217-10.33C378.6 217.2 334.4 208 288 208c-59.37 0-114.1 15.01-160.1 32.67C127.6 266.6 106 288 80 288C69.02 288 58.94 284 50.8 277.7c-18.11 10.45-29.25 18.22-30.7 19.26c-21.56 15.41-26.56 45.38-11.16 66.97C24.33 385.5 54.3 390.4 75.91 375.1zM335.1 344c13.25 0 23.1 10.75 23.1 24s-10.75 24-23.1 24c-13.25 0-23.1-10.75-23.1-24S322.7 344 335.1 344zM240 248c13.25 0 23.1 10.75 23.1 24S253.3 296 240 296c-13.25 0-23.1-10.75-23.1-24S226.8 248 240 248zM559.1 464H16c-8.75 0-15.1 7.25-15.1 16l-.0016 16c0 8.75 7.25 16 15.1 16h543.1c8.75 0 15.1-7.25 15.1-16L575.1 480C575.1 471.3 568.7 464 559.1 464z"></path>
                                </svg></div>
                                <h4 class="card-title text-dark">How we work</h4>
                                <p class="card-text">We offer health information services for users. We tailor our programs <br>to the specific needs of the target group and their situation. Read more<br> about how we work and what we offer in our services as mentioned below.<br><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body pt-5 p-4" style="--bs-body-bg: #ffffff;">
                                <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center position-absolute mb-3 bs-icon lg" style="top: -30px;"><svg class="bi bi-flag" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"></path>
                                </svg></div>
                                <h4 class="card-title text-dark">Mission</h4>
                                <p class="card-text">We support tele health professionals in Sri lanka, most vulnerable <br>societies to ensure quality health for everyone in need by providing <br>digital health and information.<br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><img src="{{asset('img/background6.jpg')}}" width="1193" height="972" style="margin-bottom: -392px;">
        <div id="content" class="content">
            <h1 data-aos="zoom-in" data-aos-duration="1000" id="h1" class="h1" style="border-color: rgb(0,0,0);text-shadow: 0px 0px;--bs-body-color: #000000;">Make your day today life healthy</h1>
        </div>
        <div class="col">
            <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"></div>
        </div>
        <div id="count" class="count">
            <div class="container py-4 py-xl-5">
                <div class="row gy-4 row-cols-2 row-cols-md-4">
                    <div class="col">
                        <div class="text-center d-flex flex-column justify-content-center align-items-center py-3" data-aos="fade-down" data-aos-duration="1000">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M423.9 255.8L411 413.1c-3.3 40.7-63.9 35.1-60.6-4.9l10-122.5-41.1 2.3c10.1 20.7 15.8 43.9 15.8 68.5 0 41.2-16.1 78.7-42.3 106.5l-39.3-39.3c57.9-63.7 13.1-167.2-74-167.2-25.9 0-49.5 9.9-67.2 26L73 243.2c22-20.7 50.1-35.1 81.4-40.2l75.3-85.7-42.6-24.8-51.6 46c-30 26.8-70.6-18.5-40.5-45.4l68-60.7c9.8-8.8 24.1-10.2 35.5-3.6 0 0 139.3 80.9 139.5 81.1 16.2 10.1 20.7 36 6.1 52.6L285.7 229l106.1-5.9c18.5-1.1 33.6 14.4 32.1 32.7zm-64.9-154c28.1 0 50.9-22.8 50.9-50.9C409.9 22.8 387.1 0 359 0c-28.1 0-50.9 22.8-50.9 50.9 0 28.1 22.8 50.9 50.9 50.9zM179.6 456.5c-80.6 0-127.4-90.6-82.7-156.1l-39.7-39.7C36.4 287 24 320.3 24 356.4c0 130.7 150.7 201.4 251.4 122.5l-39.7-39.7c-16 10.9-35.3 17.3-56.1 17.3z"></path>
                                </svg></div>
                            <div class="px-3">
                                <?php
                                                $connection = mysqli_connect("localhost","root","","projectmedilab");

                                                $query= "SELECT id FROM patients ORDER BY id";
                                                $query_run = mysqli_query ($connection, $query);

                                                $row = mysqli_num_rows($query_run);
                                                echo '<h3>'.$row.'</h3>';
                                            ?>
                                <p class="mb-0">Patients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center d-flex flex-column justify-content-center align-items-center py-3" data-aos="fade-down" data-aos-duration="1000">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M352 128C352 198.7 294.7 256 223.1 256C153.3 256 95.1 198.7 95.1 128C95.1 57.31 153.3 0 223.1 0C294.7 0 352 57.31 352 128zM287.1 362C260.4 369.1 239.1 394.2 239.1 424V448C239.1 452.2 241.7 456.3 244.7 459.3L260.7 475.3C266.9 481.6 277.1 481.6 283.3 475.3C289.6 469.1 289.6 458.9 283.3 452.7L271.1 441.4V424C271.1 406.3 286.3 392 303.1 392C321.7 392 336 406.3 336 424V441.4L324.7 452.7C318.4 458.9 318.4 469.1 324.7 475.3C330.9 481.6 341.1 481.6 347.3 475.3L363.3 459.3C366.3 456.3 368 452.2 368 448V424C368 394.2 347.6 369.1 320 362V308.8C393.5 326.7 448 392.1 448 472V480C448 497.7 433.7 512 416 512H32C14.33 512 0 497.7 0 480V472C0 393 54.53 326.7 128 308.8V370.3C104.9 377.2 88 398.6 88 424C88 454.9 113.1 480 144 480C174.9 480 200 454.9 200 424C200 398.6 183.1 377.2 160 370.3V304.2C162.7 304.1 165.3 304 168 304H280C282.7 304 285.3 304.1 288 304.2L287.1 362zM167.1 424C167.1 437.3 157.3 448 143.1 448C130.7 448 119.1 437.3 119.1 424C119.1 410.7 130.7 400 143.1 400C157.3 400 167.1 410.7 167.1 424z"></path>
                            </svg></div>
                            <div class="px-3">
                                <?php
                                                $connection = mysqli_connect("localhost","root","","projectmedilab");

                                                $query= "SELECT id FROM doctors ORDER BY id";
                                                $query_run = mysqli_query ($connection, $query);

                                                $row = mysqli_num_rows($query_run);
                                                echo '<h3>'.$row.'</h3>';
                                            ?>
                                <p class="mb-0">Doctors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer" class="footer">
            <footer class="text-white bg-dark" data-aos="fade-down" data-aos-duration="1000">
                <div class="container py-4 py-lg-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                            <h3 class="fs-6 text-white">Services</h3>
                            <ul class="list-unstyled">
                                <li><a class="link-light" href="#">Consultant/booking</a></li>
                                <li><a class="link-light" href="#">Pharmacy</a></li>
                                <li><a class="link-light" href="#">Laboratory</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                            <h3 class="fs-6 text-white">About</h3>
                            <ul class="list-unstyled">
                                <li><a class="link-light" href="#">Hospital</a></li>
                                <li><a class="link-light" href="#">Team</a></li>
                                <li><a class="link-light" href="#">Legacy</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                            <h3 class="fs-6 text-white">Careers</h3>
                            <ul class="list-unstyled">
                                <li><a class="link-light" href="#">Job openings</a></li>
                                <li><a class="link-light" href="#">Employee success</a></li>
                                <li><a class="link-light" href="#">Benefits</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center pt-3">
                        <p class="mb-0">Copyright © MediLab</p>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                </svg></li>
                            <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg></li>
                            <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                </svg></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>

</html>
