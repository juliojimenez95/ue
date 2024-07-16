@extends('layouts.app', ['page' => 'USUARIOS']) @section('content')
<div class="loader"></div>
<div id="main-content">
    <!--ADD-->
    @include('users.add')
    <!--SHOW-->
    <div class="modal fade" id="modal_show" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detalle usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control input-number" id="show_documento" placeholder="name@example.com" maxlength="10" disabled>
                                    <label for="floatingInput">Documento</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="show_nombre" maxlength="40" disabled>
                                    <label for="floatingInput">Nombres</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control input-number" id="show_apellido" maxlength="10" disabled>
                                    <label for="floatingInput">Apellidos</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="show_correo" maxlength="40" disabled>
                                    <label for="floatingInput">Correo electrónico</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="show_usuario" maxlength="20" disabled>
                                    <label for="floatingInput">Usuario</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="div_rol_show">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <select id="show_rol" class="form-control" disabled>
                                        <option value="2">Vendedora</option>
                                        <option value="3">Transferencista</option>
                                    </select>
                                    <label for="floatingInput">Perfil</label>
                                </div>
                            </div>
                        </div>
                        <fieldset disabled>
                            <div class="row text-center">
                                <div class="col">
                                    <div class="form-group text-center">
                                        <input type="checkbox" id="show_status" class="check_status" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary rounded-pill ">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--UPDATE-->
    @include('users.edit')
    <!--CARD-->
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Usuarios</h3>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <button id="btn_modal_add" class="bca btn float-end btn-success rounded-pill"> Agregar usuario</button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="tblUsers" style="width: 100% !important;">
                    <thead class="nowrap">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Empresa</th>
                            <th>rol</th>
                            <th>Estado</th>
                            <th style="width: 5.3rem !important;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection @push('js')
<script>
    $(document).ready(function() {
        //IDIOMA DE DATATABLES
        let idiomas = {
            "decimal": "",
            "emptyTable": "No hay informaci\u00F3n",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        };

        //LENAR TABLA
        function addRowDatable(data) {
            let c = datatable.rows().count() + 1;
            data.forEach(r => {
                let estado = '<span class="badge bg-danger rounded-pill">Inactivo</span>';
                if (r.ESTADO == 1) {
                    estado = '<span class="badge bg-success rounded-pill">Activo</span>';
                }
                datatable.row.add([
                    c,
                    r.USUARIO,
                    r.empresa_nombre,
                    r.rol_nombre,
                    estado,
                    '<div class="tdw">' +
                    '<a class="btn btn_show p-1" data-id="' + r.ID + '" data-nombre="' + r.NOMBRES + '" data-rol="' + r.ID_ROL + '" data-documento="' + r.DOCUMENTO + '" data-apellido="' + r.APELLIDOS + '" data-empresa="' + r.ID_EMPRESA + '" data-usuario="' + r.USUARIO + '" data-estado="' + r.ESTADO + '">' +
                    '<i class="fas fa-eye fa-1x"></i>' +
                    '</a>' +
                    '<a class="btn btn_edit p-1" data-id="' + r.ID + '" data-nombre="' + r.NOMBRES + '" data-rol="' + r.ID_ROL + '" data-documento="' + r.DOCUMENTO + '" data-apellido="' + r.APELLIDOS + '" data-empresa="' + r.ID_EMPRESA + '" data-usuario="' + r.USUARIO + '" data-estado="' + r.ESTADO + '">' +
                    '<i class="fas fa-edit fa-1x"></i>' +
                    '</a></div>',
                ]).draw(false);
                c++;
            });
            $(".loader").fadeOut("slow");
        }

        //CONFIGURACION DE DATATABLES
        let datatable = $('#tblUsers').DataTable({
            responsive: true,
            destroy: true,
            columnDefs: [{
                targets: [5],
                sortable: false
            }],
            language: idiomas,
        });

        //FUNCION GET USUARIOS
        $.ajax({
            url: "{{ route('get_users') }}",
            dataType: "json",
            type: "POST",
            data: {},
            success: function(response) {
                if (response.response) {
                    addRowDatable(response.data);
                } else {
                    alert_error('Error al cargar datos');
                    $(".loader").fadeOut("slow");
                }
            },
            error: function(response) {
                alert_error("Ocurrió un error, intenta más tarde");
                $(".loader").fadeOut("slow");
            }
        });

        //LIMPIAR TODOS LOS CAMPOS
        function clear() {
            $('#documento').val('');
            $('#nombre').val('');
            $('#telefono').val('');
            $('#correo').val('');
            $('#usuario').val('');
        }

        //VALIDACIONES
        $('.input-number').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        //FUNCION AGREGAR USUARIO
        $(document).on('click', '#btn_modal_add', function() {
            $('#modal_add').modal('show');
        });
        $(document).on('click', '#btn_guardar', function() {
            let val_num = /^[0-9]/;
            let val_name = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u;
            let val_mail =
                /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
            let val_user = /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/;
            let nombre = $('#nombre').val();
            let documento = $('#documento').val();
            let apellidos = $('#apellidos').val();
            let empresa = $('#empresa').val();
            let usuario = $('#usuario').val();
            let rol = $('#rol_add').val();

            if (documento == "" || !val_num.test(documento)) {
                alert_error('Ingrese un documento válido');
            } else if (nombre == "" || !val_name.test(nombre)) {
                alert_error('Ingrese un nombre válido');
            } else if (empresa == "" ) {
                alert_error('Ingrese una empresa válida');
            } else if (usuario == "" || !val_user.test(usuario)) {
                alert_error('Ingrese un usuario válido');
            } else if (rol == "") {
                alert_error('Seleccione un rol válido');
            } else {
                $.ajax({
                    url: "{{ route('store_users') }}",
                    data: {
                        documento: documento,
                        nombre: nombre,
                        apellidos: apellidos,
                        empresa: empresa,
                        usuario: usuario,
                        rol: rol,
                    },
                    type: "post",
                    beforeSend: function() {
                        $('#btn_guardar').prop('disabled', true);
                        $('#btn_guardar').empty();
                        $('#btn_guardar').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                    },
                    success: function(response) {
                        if (response.response) {
                            alert_success(response.msg);
                            addRowDatable(response.data);
                            $("#modal_add").modal("hide");
                            clear();
                            $('#btn_guardar').prop('disabled', false);
                            $('#btn_guardar').empty();
                            $('#btn_guardar').append('Guardar');
                        } else {
                            alert_error(response.msg);
                            $('#btn_guardar').prop('disabled', false);
                            $('#btn_guardar').empty();
                            $('#btn_guardar').append('Guardar');
                        }
                    },

                    error: function(x, xs, xt) {
                        alert_error(response.msg);
                        $('#btn_guardar').prop('disabled', false);
                        $('#btn_guardar').empty();
                        $('#btn_guardar').append('Guardar');
                    },
                });
            }
        });

        //FUNCIÓN TRAER LOS DATOS PARA EDITAR
        $(document).on('click', '.btn_edit', function() {
            let id = $(this).attr("data-id");
            let nombre = $(this).attr("data-nombre");
            let documento = $(this).attr("data-documento");
            let apellido = $(this).attr("data-apellido");
            let correo = $(this).attr("data-empresa");
            let usuario = $(this).attr("data-usuario");
            let rol = $(this).data('rol');
            let estado = $(this).attr("data-estado");
            $('#edit_id').val(id);
            $('#edit_documento').val(documento);
            $('#edit_nombre').val(nombre);
            $('#edit_telefono').val(apellido);
            $('#edit_correo').val(correo);
            $('#edit_rol').val(rol);
            $('#edit_usuario').val(usuario);
            if (rol == 1) {
                $("#div_rol_edit").hide();
            } else {
                $("#div_rol_edit").show();
            }

            if (estado == 1) {
                $('#edit_status').bootstrapToggle('on')
            } else {
                $('#edit_status').bootstrapToggle('off')
            }
            $('#modal_edit').modal('show');
        });

        //FUNCION VER USUARIO
        $(document).on('click', '.btn_show', function() {
            let id = $(this).attr("data-id");
            let nombre = $(this).attr("data-nombre");
            let documento = $(this).attr("data-documento");
            let apellido = $(this).attr("data-apellido");
            let correo = $(this).attr("data-empresa");
            let usuario = $(this).attr("data-usuario");
            let rol = $(this).data('rol');
            if (rol == 1) {
                $("#div_rol_show").hide();
            } else {
                $("#div_rol_show").show();
            }
            let estado = $(this).attr("data-estado");
            $('#show_documento').val(documento);
            $('#show_nombre').val(nombre);
            $('#show_apellido').val(apellido);
            $('#show_correo').val(correo);
            $('#show_rol').val(rol);
            $('#show_usuario').val(usuario);
            if (estado == 1) {
                $('#show_status').bootstrapToggle('on')
            } else {
                $('#show_status').bootstrapToggle('off')
            }
            $('#modal_show').modal('show');
        });

        //FUNCION ACTUALIZAR USUARIO
        $(document).on('click', '#btn_update', function() {
            let val_num = /^[0-9]/;
            let val_name = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u;
            let val_mail =
                /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
            let val_user = /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/;
            let id = $('#edit_id').val();
            let nombre = $('#edit_nombre').val();
            let telefono = $('#edit_telefono').val();
            let correo = $('#edit_correo').val();
            let usuario = $('#edit_usuario').val();
            let rol = $('#edit_rol').val();
            let estado = $("#edit_status").prop('checked');
            let status = '';
            if (estado) {
                status = 1;
            } else {
                status = 0;
            }
            if (nombre == "" || !val_name.test(nombre)) {
                alert_error('Ingrese un nombre válido');
            } else if (telefono == "" || !val_num.test(telefono)) {
                alert_error('Ingrese un teléfono válido');
            } else if (correo == "" || !val_mail.test(correo)) {
                alert_error('Ingrese un correo electrónico válido');
            } else if (usuario == "" || !val_user.test(usuario)) {
                alert_error('Ingrese un usuario válido');
            } else if (rol == "") {
                alert_error('Seleccione un rol válido');
            } else {
                $.ajax({
                    url: "{{ route('update_users') }}",
                    data: {
                        id: id,
                        nombre: nombre,
                        telefono: telefono,
                        correo: correo,
                        usuario: usuario,
                        rol: rol,
                        status: status
                    },
                    type: "post",
                    beforeSend: function() {
                        $('#btn_update').prop('disabled', true);
                        $('#btn_update').empty();
                        $('#btn_update').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                    },
                    success: function(response) {
                        if (response.response) {
                            $(".loader").fadeIn();
                            alert_success(response.msg);
                            datatable.clear().draw();
                            addRowDatable(response.data);
                            $("#modal_edit").modal("hide");
                            $('#btn_update').prop('disabled', false);
                            $('#btn_update').empty();
                            $('#btn_update').append('Guardar');
                        } else {
                            alert_error(response.msg);
                            $('#btn_update').prop('disabled', false);
                            $('#btn_update').empty();
                            $('#btn_update').append('Guardar');

                        }
                    },
                    error: function(x, xs, xt) {
                        alert_error(response.msg);
                        $('#btn_update').prop('disabled', false);
                        $('#btn_update').empty();
                        $('#btn_update').append('Guardar');

                    },
                });
            }
        });

    });
</script>
<script>
    $('#usuarios').addClass('active');
</script>
@endpush