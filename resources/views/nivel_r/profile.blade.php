@extends('layouts.app', ['page' => 'PERFIL']) @section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Perfil</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body text-center">
                            <div class="row ">
                                <div class="user-img align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('assets/images/faces/user.png') }}" style="    height: 100px;
                                        width: 100px;" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h3>{{ $user->USERNAME }}</h3>
                            </div>
                            <div class="row">
                                <h6 id="profile_correo">{{ $user->CORREO }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <button id="btn_modal_pass" class="bca btn float-end btn-success rounded-pill">Cambiar
                            contraseña</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="modal_pass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Cambiar contraseña</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="card m-0">
                                        <div class="card-body text-center">
                                            <div class="form">
                                                <input type="hidden" id="id_pass" value="{{ $user->ID }}">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group position-relative has-icon-left">
                                                            <div class="form-floating mb-3">
                                                                <span class="btn-show-pass">
                                                                    <i class="zmdi zmdi-eye"></i>
                                                                </span>
                                                                <input type="password" placeholder="A" class="form-control input-number" autocomplete="off" id="pass">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-shield-lock"></i>
                                                                </div>
                                                                <label for="floatingInput" class="left_30">Contraseña
                                                                    actual</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group position-relative has-icon-left">
                                                            <div class="form-floating mb-3">
                                                                <span class="btn-show-pass">
                                                                    <i class="zmdi zmdi-eye"></i>
                                                                </span>
                                                                <input type="password" placeholder="A" class="form-control input-number" autocomplete="off" id="new_pass">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-shield-lock"></i>
                                                                </div>
                                                                <label for="floatingInput" class="left_30">Nueva
                                                                    contraseña</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group position-relative has-icon-left">
                                                            <div class="form-floating mb-3">
                                                                <span class="btn-show-pass">
                                                                    <i class="zmdi zmdi-eye"></i>
                                                                </span>
                                                                <input type="password" placeholder="A" class="form-control input-number" autocomplete="off" id="confirm_pass">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-shield-lock"></i>
                                                                </div>
                                                                <label for="floatingInput" class="left_30">Confirmar
                                                                    contraseña</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="btn_update_pass" class="btn float-end btn-success rounded-pill">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="col-lg-8">
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Mis datos</h4>
                        </div>
                        <div class="card-body">
                            <div class="form">
                                <input type="hidden" id="id" value="{{ $user->ID }}">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input disabled value="{{ $user->DOCUMENTO }}" type="text" class="form-control input-number">
                                            <label for="floatingInput">Documento</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $user->NOMBRE }}" type="text" class="form-control" id="nombre" maxlength="40" disabled>
                                            <label for="floatingInput">Nombre</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $user->TELEFONO }}" type="text" class="form-control input-number" id="telefono" maxlength="15">
                                            <label for="floatingInput">Teléfono</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $user->CORREO }}" type="text" class="form-control" id="correo" maxlength="40">
                                            <label for="floatingInput">Correo electrónico</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input disabled value="{{ $user->USERNAME }}" type="text" class="form-control">
                                            <label for="floatingInput">Usuario</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button id="btn_update" class="bca btn float-end btn-success rounded-pill">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
</div>
@endsection @push('js')
<script src="{{ asset('assets_log/js/main.js') }}"></script>
<script>
    $(document).on('click', '#btn_modal_pass', function() {
        $('#modal_pass').modal('show');
    });

    //ACTUALIZAR CLAVE
    $(document).on('click', '#btn_update_pass', function() {
        let id = $("#id_pass").val();
        let pass = $("#pass").val();
        let new_pass = $("#new_pass").val();
        let confirm = $("#confirm_pass").val();

        if (pass.trim() == "") {
            alert_error("Ingrese una contraseña válida.");
        } else if (new_pass.trim() == "") {
            alert_error("Ingrese una nueva contraseña válida.");
        } else if (confirm.trim() == "") {
            alert_error("Ingrese una confirmación contraseña válida.");
        } else if (new_pass != confirm) {
            alert_error("Confirmación incorrecta.");
            $('#confirm_pass').val('');
        } else {
            $.ajax({
                url: "{{ route('update_pass') }}",
                data: {
                    id: id,
                    pass: pass,
                    new_pass: new_pass,
                },
                type: "post",
                beforeSend: function() {
                    $('#btn_update_pass').prop('disabled', true);
                    $('#btn_update_pass').empty();
                    $('#btn_update_pass').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                },
                success: function(response) {
                    if (response.response) {
                        alert_success(response.msg);
                        $('#btn_update_pass').prop('disabled', false);
                        $('#btn_update_pass').empty();
                        $('#btn_update_pass').append('Actualizar');
                        $("#id_pass").val('');
                        $("#pass").val('');
                        $("#new_pass").val('');
                        $("#confirm_pass").val('');
                        $('#modal_pass').modal('hide');
                    } else {
                        alert_error(response.msg);
                        $('#btn_update_pass').prop('disabled', false);
                        $('#btn_update_pass').empty();
                        $('#btn_update_pass').append('Actualizar');
                    }
                },

                error: function(x, xs, xt) {
                    alert_error('Ocurrio un error');
                    $('#btn_update_pass').prop('disabled', false);
                    $('#btn_update_pass').empty();
                    $('#btn_update_pass').append('Actualizar');
                },
            });
        }
    });

    //ACTUALIZAR INFORMACIÓN
    $(document).on('click', '#btn_update', function() {
        let val_num = /^[0-9]/;
        let val_name = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u;
        let val_mail =
            /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
        let val_user = /^(?=.{6,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/;
        let id = $('#id').val();
        let nombre = $('#nombre').val();
        let telefono = $('#telefono').val();
        let correo = $('#correo').val();

        if (nombre == "") {
            alert_error('Ingrese un nombre.');
        } else if (!val_name.test(nombre) || nombre.lenght > 40) {
            alert_error('Ingrese un nombre válido.');
        } else if (telefono == "") {
            alert_error('Ingrese un teléfono.');
        } else if (!val_num.test(telefono) || telefono.lenght > 15) {
            alert_error('Ingrese un teléfono valido.');
        } else if (correo == "") {
            alert_error('Ingrese un correo electrónico.');
        } else if (!val_mail.test(correo) || correo.lenght > 40) {
            alert_error('Ingrese un correo electrónico válido.');
        } else {
            $.ajax({
                url: "{{ route('update_profile') }}",
                data: {
                    id: id,
                    nombre: nombre,
                    telefono: telefono,
                    correo: correo,
                },
                type: "post",
                beforeSend: function() {
                    $('#btn_update').prop('disabled', true);
                    $('#btn_update').empty();
                    $('#btn_update').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                },
                success: function(response) {
                    if (response.response) {
                        alert_success(response.msg);
                        $('#btn_update').prop('disabled', false);
                        $('#btn_update').empty();
                        $('#btn_update').append('Actualizar');
                        $('#profile_correo').empty();
                        $('#profile_correo').append(correo);
                    } else {
                        alert_error(response.msg);
                        $('#btn_update').prop('disabled', false);
                        $('#btn_update').empty();
                        $('#btn_update').append('Actualizar');
                    }
                },

                error: function(x, xs, xt) {
                    alert_error('Ocurrio un error');
                    $('#btn_update').prop('disabled', false);
                    $('#btn_update').empty();
                    $('#btn_update').append('Actualizar');
                },
            });
        }
    });
</script>
@endpush()