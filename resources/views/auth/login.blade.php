<!DOCTYPE html>
<html lang="es">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================  -->
    <link rel="icon" type="image/png" href="{{asset('images/logo.jpeg')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_log/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_log/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha512-rRQtF4V2wtAvXsou4iUAs2kXHi3Lj9NE7xJR77DE7GHsxgY9RTWy93dzMXgDIG8ToiRTD45VsDNdTiUagOFeZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_log/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_log/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_log/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_log/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_log/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_log/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_log/css/main.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
    <!--===============================================================================================-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <span class="login100-form-title p-b-26">
                    <img src="{{asset('images/logo.jpeg')}}" alt="" style="max-width: 100%; height: auto;">
                </span>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" id="username" autofocus placeholder="Username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input type="password" class="form-control form-control-xl" id="pass" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" id="btn_login">
                            Iniciar sesion
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_log/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_log/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets_log/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_log/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_log/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets_log/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_log/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_log/js/main.js') }}"></script>
    <script>
        function alert_error(msg) {
            const Toast = Swal.mixin({
                toast: true
                , position: "bottom-end"
                , showConfirmButton: false
                , timer: 3000
                , timerProgressBar: true
                , didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                }
            , });

            Toast.fire({
                icon: "error"
                , title: msg
            , });
        }

        function alert_success(msg) {
            const Toast = Swal.mixin({
                toast: true
                , position: "bottom-end"
                , showConfirmButton: false
                , timer: 1000
                , timerProgressBar: true
                , didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                }
            , });

            Toast.fire({
                icon: "success"
                , title: msg
            , });
        }

        $(document).on("click", "#btn_login", function() {
            let username = $("#username").val();
            let pass = $("#pass").val();

            const val_name = /[a-zA-Z0-9]/;
            //const val_pass =  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}$/;
            if (username == "") {
                alert_error("Ingrese un usuario.");
            } else if (!val_name.test(username)) {
                alert_error("Ingrese un usuario válido.");
            } else if (pass == "") {
                alert_error("Ingrese una contraseña.");
            } else if (pass.trim() == "") {
                alert_error("Ingrese una contraseña válida.");
            } else {
                $.ajax({
                    url: "{{route('/login')}}"
                    , data: {
                        username: username
                        , pass: pass
                    , }
                    , type: "post"
                    , beforeSend: function() {
                        $('#btn_login').prop('disabled', true);
                        $('#btn_login').empty();
                        $('#btn_login').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>  CARGANDO');
                    }
                    , success: function(response) {
                        if (response.response) {
                            alert_success(response.msg);
                            setTimeout(() => {
                                location.href = "{{route('home')}}";
                            }, 1100);
                        } else {
                            alert_error(response.msg);
                            $('#btn_login').prop('disabled', false);
                            $('#btn_login').empty();
                            $('#btn_login').append('INICIAR SESION');
                        }
                    },

                    error: function(x, xs, xt) {
                        alert_error(response.msg);
                        $('#btn_login').prop('disabled', false);
                        $('#btn_login').empty();
                        $('#btn_login').append('INICIAR SESION');
                    }
                , });
            }
        });

    </script>
    <script type="text/javascript">
    </script>
</body>
</html>
