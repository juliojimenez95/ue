@extends('layouts.app', ['page' => 'USUARIOS']) @section('content')
<div class="loader"></div>
<div id="main-content">
    <!--ADD-->
    @include('empresa.add')
    <!--SHOW-->
    <div class="modal fade" id="modal_show" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detalle Empresa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="show_tipo_empresa" disabled>
                                    <label for="show_tipo_empresa">Tipo de Empresa</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="show_razon_social" disabled>
                                    <label for="show_razon_social">Razón Social</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="show_direccion" disabled>
                                    <label for="show_direccion">Dirección</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="show_telefono" disabled>
                                    <label for="show_telefono">Teléfono</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="show_email" disabled>
                                    <label for="show_email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="show_contacto" disabled>
                                    <label for="show_contacto">Contacto</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="show_sector" disabled>
                                    <label for="show_sector">Sector</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="show_num_empleados" disabled>
                                    <label for="show_num_empleados">Número de Empleados</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <select id="show_activo" class="form-control" disabled>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                    <label for="show_activo">Activo</label>
                                </div>
                            </div>
                        </div>
                        <fieldset disabled>
                            <div class="row text-center">
                                <div class="col">
                                    <div class="form-group text-center">
                                        <input type="checkbox" id="show_status_empresa" class="check_status"
                                            data-toggle="toggle" data-on="Activo" data-off="Inactivo"
                                            data-onstyle="success" data-offstyle="danger">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary rounded-pill">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!--UPDATE-->
    @include('empresa.edit')
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
                <button id="btn_modal_add" class="bca btn float-end btn-success rounded-pill"> Agregar usaurio</button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="tblUsers" style="width: 100% !important;">
                    <thead class="nowrap">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Correo</th>
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
        $(document).ready(function () {
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
                        r.RAZON_SOCIAL,
                        r.DOCUMENTO,
                        r.CORREO,
                        estado,
                        '<div class="tdw">' +
                        '<a class="btn btn_show p-1" data-id="' + r.ID + '" data-nombre="' + r.RAZON_SOCIAL + '" data-rol="' + r.ROL + '" data-documento="' + r.DOCUMENTO + '" data-telefono="' + r.TELEFONO + '" data-correo="' + r.CORREO + '" data-usuario="' + r.USERNAME + '" data-estado="' + r.ESTADO + '">' +
                        '<i class="fas fa-eye fa-1x"></i>' +
                        '</a>' +
                        '<a class="btn btn_edit p-1" data-id="' + r.ID + '" data-nombre="' + r.RAZON_SOCIAL + '" data-rol="' + r.ROL + '" data-documento="' + r.DOCUMENTO + '" data-telefono="' + r.TELEFONO + '" data-correo="' + r.CORREO + '" data-usuario="' + r.USERNAME + '" data-estado="' + r.ESTADO + '">' +
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
                success: function (response) {
                    if (response.response) {
                        addRowDatable(response.data);
                    } else {
                        alert_error('Error al cargar datos');
                        $(".loader").fadeOut("slow");
                    }
                },
                error: function (response) {
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
            $('.input-number').on('input', function () {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            //FUNCION AGREGAR USUARIO
            $(document).on('click', '#btn_modal_add', function () {
                $('#modal_add').modal('show');
            });
            $(document).on('click', '#btn_guardar_empresa', function () {
                let val_num = /^[0-9]+$/;
                let val_name = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u;
                let val_mail =
                    /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;

                let tipo_id = $('#tipo_id').val();
                let razon_social = $('#razon_social').val();
                let direccion = $('#direccion').val();
                let telefono = $('#telefono').val();
                let email = $('#email').val();
                let contacto = $('#contacto').val();
                let sector = $('#sector').val();
                let num_empleados = $('#num_empleados').val();
                let activo = $('#activo').val();

                if (tipo_id == "" || tipo_id == "Seleccionar Tipo de Empresa") {
                    alert_error('Seleccione un tipo de empresa válido');
                } else if (razon_social == "" || !val_name.test(razon_social)) {
                    alert_error('Ingrese una razón social válida');
                } else if (direccion == "") {
                    alert_error('Ingrese una dirección válida');
                } else if (telefono == "" || !val_num.test(telefono)) {
                    alert_error('Ingrese un teléfono válido');
                } else if (email == "" || !val_mail.test(email)) {
                    alert_error('Ingrese un correo electrónico válido');
                } else if (contacto == "" || !val_name.test(contacto)) {
                    alert_error('Ingrese un contacto válido');
                } else if (sector == "" || !val_name.test(sector)) {
                    alert_error('Ingrese un sector válido');
                } else if (num_empleados == "" || !val_num.test(num_empleados)) {
                    alert_error('Ingrese un número de empleados válido');
                } else {
                    $.ajax({
                        url: "{{ route('add_empresas') }}",
                        data: {
                            tipo_id: tipo_id,
                            razon_social: razon_social,
                            direccion: direccion,
                            telefono: telefono,
                            email: email,
                            contacto: contacto,
                            sector: sector,
                            num_empleados: num_empleados,
                            activo: activo,
                        },
                        type: "post",
                        beforeSend: function () {
                            $('#btn_guardar_empresa').prop('disabled', true);
                            $('#btn_guardar_empresa').empty();
                            $('#btn_guardar_empresa').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                        },
                        success: function (response) {
                            if (response.response) {
                                alert_success(response.msg);
                                addRowDatable(response.data);
                                $("#modal_add").modal("hide");
                                clear();
                                $('#btn_guardar_empresa').prop('disabled', false);
                                $('#btn_guardar_empresa').empty();
                                $('#btn_guardar_empresa').append('Guardar');
                            } else {
                                alert_error(response.msg);
                                $('#btn_guardar_empresa').prop('disabled', false);
                                $('#btn_guardar_empresa').empty();
                                $('#btn_guardar_empresa').append('Guardar');
                            }
                        },
                        error: function (x, xs, xt) {
                            alert_error(response.msg);
                            $('#btn_guardar_empresa').prop('disabled', false);
                            $('#btn_guardar_empresa').empty();
                            $('#btn_guardar_empresa').append('Guardar');
                        },
                    });
                }
            });


            //FUNCIÓN TRAER LOS DATOS PARA EDITAR
            $(document).on('click', '.btn_edit', function () {
                let id = $(this).attr("data-id");
                let nombre = $(this).attr("data-nombre");
                let documento = $(this).attr("data-documento");
                let telefono = $(this).attr("data-telefono");
                let correo = $(this).attr("data-correo");
                let usuario = $(this).attr("data-usuario");
                let rol = $(this).data('rol');
                let estado = $(this).attr("data-estado");
                $('#edit_id').val(id);
                $('#edit_documento').val(documento);
                $('#edit_nombre').val(nombre);
                $('#edit_telefono').val(telefono);
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
            $(document).on('click', '.btn_show', function () {
                let tipoEmpresa = $(this).attr("data-tipo-empresa");
                let razonSocial = $(this).attr("data-nombre");
                let direccion = $(this).attr("data-direccion");
                let telefono = $(this).attr("data-telefono");
                let email = $(this).attr("data-email");
                let contacto = $(this).attr("data-contacto");
                let sector = $(this).attr("data-sector");
                let numEmpleados = $(this).attr("data-num-empleados");
                let activo = $(this).attr("data-activo");

                $('#show_tipo_empresa').val(tipoEmpresa);
                $('#show_razon_social').val(razonSocial);
                $('#show_direccion').val(direccion);
                $('#show_telefono').val(telefono);
                $('#show_email').val(email);
                $('#show_contacto').val(contacto);
                $('#show_sector').val(sector);
                $('#show_num_empleados').val(numEmpleados);
                $('#show_activo').val(activo);

                if (activo == 1) {
                    $('#show_status_empresa').bootstrapToggle('on');
                } else {
                    $('#show_status_empresa').bootstrapToggle('off');
                }

                $('#modal_show').modal('show');
            });


            //FUNCION ACTUALIZAR USUARIO
            $(document).on('click', '#btn_update', function () {
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
                        beforeSend: function () {
                            $('#btn_update').prop('disabled', true);
                            $('#btn_update').empty();
                            $('#btn_update').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                        },
                        success: function (response) {
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
                        error: function (x, xs, xt) {
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