@extends('layouts.app', ['page' => 'USUARIOS']) @section('content')
<div class="loader"></div>
<div id="main-content">
    <!--ADD-->
    @include('rol.add')
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
                                    <label for="floatingInput">Descripción</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="show_nombre" maxlength="40" disabled>
                                    <label for="floatingInput">Nombre</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary rounded-pill ">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--UPDATE-->
    @include('rol.edit')
    <!--CARD-->
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Roles</h3>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <button id="btn_modal_add" class="bca btn float-end btn-success rounded-pill"> Agregar Rol</button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="tblUsers" style="width: 100% !important;">
                    <thead class="nowrap">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
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
    $('#rol').addClass('active');
</script>
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
                
                datatable.row.add([
                    c,
                    r.ROL,
                    r.DESCRIPCION,
                    '<div class="tdw">' +
                    '<a class="btn btn_show p-1" data-id="' + r.ID + '" data-nombre="' + r.ROL + '" data-rol="' + r.ROL + '" data-documento="' + r.DESCRIPCION + '" data-telefono="' + r.TELEFONO + '" data-correo="' + r.CORREO + '" data-usuario="' + r.USERNAME + '" data-estado="' + r.ESTADO + '">' +
                    '<i class="fas fa-eye fa-1x"></i>' +
                    '</a>' +
                    '<a class="btn btn_edit p-1" data-id="' + r.ID + '" data-nombre="' + r.ROL + '" data-rol="' + r.ROL + '" data-documento="' + r.DESCRIPCION + '" data-telefono="' + r.TELEFONO + '" data-correo="' + r.CORREO + '" data-usuario="' + r.USERNAME + '" data-estado="' + r.ESTADO + '">' +
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
                targets: [3],
                sortable: false
            }],
            language: idiomas,
        });

        //FUNCION GET USUARIOS
        $.ajax({
            url: "{{ route('get_roles') }}",
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
            let rol = $('#rol_e').val();
            let descripcion = $('#descripcion').val();

             if (descripcion == "" ) {
                alert_error('Ingrese un descripcion');
            } else if (rol == "") {
                console.log(rol);
                alert_error('Seleccione un rol');
            } else {
                $.ajax({
                    url: "{{ route('add_roles') }}",
                    data: {
                        nombre: rol,
                        descripcion: descripcion,
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
        $(document).on('click', '.btn_show', function() {
            let id = $(this).attr("data-id");
            let nombre = $(this).attr("data-nombre");
            let documento = $(this).attr("data-documento");
            
            let estado = $(this).attr("data-estado");
            $('#show_documento').val(documento);
            $('#show_nombre').val(nombre);
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
@endpush