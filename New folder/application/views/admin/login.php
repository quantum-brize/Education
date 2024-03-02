<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams LMS</title>
    <link rel="shortcut icon" type="<?=base_url()?>image/x-icon" href="assets/img/favicon.svg">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/feather.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/dropzone/dropzone.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/aos/aos.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <style>
    [wire\:loading],
    [wire\:loading\.delay],
    [wire\:loading\.inline-block],
    [wire\:loading\.inline],
    [wire\:loading\.block],
    [wire\:loading\.flex],
    [wire\:loading\.table],
    [wire\:loading\.grid],
    [wire\:loading\.inline-flex] {
        display: none;
    }

    [wire\:loading\.delay\.none],
    [wire\:loading\.delay\.shortest],
    [wire\:loading\.delay\.shorter],
    [wire\:loading\.delay\.short],
    [wire\:loading\.delay\.default],
    [wire\:loading\.delay\.long],
    [wire\:loading\.delay\.longer],
    [wire\:loading\.delay\.longest] {
        display: none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    :root {
        --livewire-progress-bar-color: #2299dd;
    }

    [x-cloak] {
        display: none;
    }
    </style>
</head>

<body>

    <div class="main-wrapper log-wrap">
        <div class="row">

            <div class="col-md-6 login-bg">
                <div class="owl-carousel login-slide owl-theme">
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="<?=base_url()?>assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>DreamsLMS Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="<?=base_url()?>assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>DreamsLMS Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="<?=base_url()?>assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>DreamsLMS Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 login-wrap-bg">

                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="w-100">
                            <div class="img-logo">
                                <img src="<?=base_url()?>assets/img/logo.svg" class="img-fluid" alt="Logo">
                                <div class="back-home">
                                    <a href="index.html">Back to Home</a>
                                </div>
                            </div>
                            <h1>Sign into Your Account</h1>
                            <!-- <form > -->
                                <!-- <input type="hidden" name="_token" value="zys1Tptzq1HI08KoIbQVmNfiSHcbaFnOtaw18XRv" autocomplete="off"> -->
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" class="form-control" name="userEmail" id="userEmail">
                                    <div class="text-danger pt-2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input" name="password" id="password">
                                        <span class="feather-eye-off toggle-password"></span>
                                        <div class="text-danger pt-2">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="forgot">
                                    <span><a class="forgot-link" href="forgot-password.html">Forgot Password
                                            ?</a></span>
                                </div> -->
                                <div class="remember-me">
                                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                        <input type="checkbox" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button id="loginBtn" class="btn btn-primary btn-start">Sign In</button>
                                </div>
                            <!-- </form> -->
                        </div>
                    </div>
                    <div class="google-bg text-center">
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/js/jquery.waypoints.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/js/jquery.counterup.min.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/select2/js/select2.min.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/slick/slick.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/aos/aos.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/js/ckeditor.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/swiper/js/swiper.min.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/feather/feather.min.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/apexchart/apexcharts.min.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/apexchart/chart-data.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/js/circle-progress.min.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/plugins/dropzone/dropzone.min.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/js/validation.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script data-navigate-once="true" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="<?=base_url()?>assets/js/script.js" type="4bc358f7c609fbc07272dae2-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="4bc358f7c609fbc07272dae2-|49" defer=""></script>

    <script>
        $(document).ready(function () {
            var base_url = 'http://localhost/student_website/'
            $('#loginBtn').click(function () {
                let userName = $('#userEmail').val();
                let password = $('#password').val();

                $.ajax({
                    type: "POST",
                    url: base_url+'admin/Admin/admin_login',
                    data: {
                        userName: userName,
                        password: password
                    },
                    success: function(response){
                        resp = JSON.parse(response)
                        // Toastify({
                        //     text: resp.message.toUpperCase(),
                        //     duration: 3000,
                        //     position: "center",
                        //     stopOnFocus: true,
                        //     style: {
                        //         background: resp.status ? 'darkgreen' : 'darkred',
                        //     },

                        // }).showToast();
                        if (resp.status && resp.role == 'admin') {
                            setTimeout(function () {
                                location.href = '<?= base_url('admin/home') ?>'
                            }, 1000)
                        }else if (resp.status && resp.role == 'centre') {
                            setTimeout(function () {
                                location.href = '<?= base_url('home') ?>'
                            }, 1000)
                        }else if (resp.status && resp.role == 'student') {
                            setTimeout(function () {
                                location.href = '<?= base_url('home') ?>'
                            }, 1000)
                        }
                    },
                    error: function(xhr, status, error){
                        console.error(xhr.responseText);
                    }
                });
                
            })

        });
    </script>
</body>

</html>