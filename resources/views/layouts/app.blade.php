<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $page }} - {{ config("app.name") }}</title>
    <!--===============================================================================================  -->
    <link rel="icon" type="image/png" href="{{asset('images/logo.jpeg')}}" />
    <!--===============================================================================================-->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <!-- data -toggle -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css.css') }}" />

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--=====================Datatables ============================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha512-rRQtF4V2wtAvXsou4iUAs2kXHi3Lj9NE7xJR77DE7GHsxgY9RTWy93dzMXgDIG8ToiRTD45VsDNdTiUagOFeZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_log/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <!--===================== CHART JS ============================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
    <script src="https://kit.fontawesome.com/ba65625497.js" crossorigin="anonymous"></script>

</head>

<body>
    @if(session('session_change') != 1)
        @include('users.change')
    @endif
    <div id="app">
        @include('layouts.navs.sidebar')

        <div id="main" class="layout-navbar">

            <header class="mb-3">
                @include('layouts.navs.navbar')
            </header>
            @yield('content') @include('layouts.navs.footer')
        </div>

    </div>

    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>


    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#btn_logout').click(function() {
                document.logout.submit();
            });
        });
    </script>
    <script src="{{ asset('assets/js/mazer.js') }}"></script>
    <script src="{{ asset('js/alert.js') }}"></script>
    <script>
        let today = new Date();
        let year = today.getFullYear();
        $('#copy_rigth').append('Copyright \u00A9 2022 - ' + year + ' | <a href="https://sssas.com.co/" target="_blank">Smart Solutions S.A.S.</a> Todos los derechos reservados.');
    </script>
    <!-- ABRIR MODAL CUANDO ENTRA POR PRIMERA VEZ -->

    @if(session('session_change') != 1))
    <script>
        $(document).ready(function() {
            $('#modal_pass_prim').modal('show');
            //ACTUALIZAR CLAVE
            $(document).on('click', '#btn_update_pass_new', function() {
                let id = $("#id_pass").val();
                let new_pass_prim = $("#new_pass_prim").val();
                let confirm = $("#confirm_pass").val();

                if (new_pass_prim.trim() == "") {
                    alert_error("Ingrese una nueva contraseña válida");
                } else if (confirm.trim() == "") {
                    alert_error("Ingrese una confirmación contraseña válida");
                } else if (new_pass_prim != confirm) {
                    alert_error("Confirmación incorrecta");
                    $('#confirm_pass').val('');
                } else {
                    $.ajax({
                        url: "{{ route('update_pass_prim') }}",
                        data: {
                            id: id,
                            new_pass_prim: new_pass_prim,
                        },
                        type: "post",
                        beforeSend: function() {
                            $('#btn_update_pass_new').prop('disabled', true);
                            $('#btn_update_pass_new').empty();
                            $('#btn_update_pass_new').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                        },
                        success: function(response) {
                            if (response.response) {
                                alert_success(response.msg);
                                $('#btn_update_pass_new').prop('disabled', false);
                                $('#btn_update_pass_new').empty();
                                $('#btn_update_pass_new').append('Actualizar');
                                $("#id_pass").val('');
                                $("#new_pass_prim").val('');
                                $("#confirm_pass").val('');
                                $('#modal_pass_prim').modal('hide');
                            } else {
                                alert_error(response.msg);
                                $('#btn_update_pass_new').prop('disabled', false);
                                $('#btn_update_pass_new').empty();
                                $('#btn_update_pass_new').append('Actualizar');
                            }
                        },

                        error: function(x, xs, xt) {
                            alert_error('Ocurrio un error');
                            $('#btn_update_pass_new').prop('disabled', false);
                            $('#btn_update_pass_new').empty();
                            $('#btn_update_pass_new').append('Actualizar');
                        },
                    });
                }
            });
        });
    </script>
    @endif
    @stack('js')
</body>

</html>