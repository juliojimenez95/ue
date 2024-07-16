@extends('layouts.app', ['page' => 'ASIGNACIONES']) @section('content')
<div class="loader"></div>
<div id="main-content">
    <!--ADD-->
    @include('user_laboratory.add')
    <!--SHOW-->
    <div class="modal fade" id="modal_show" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                    <input type="text" class="form-control input-number" id="show_documento"
                                        placeholder="name@example.com" maxlength="10" disabled>
                                    <label for="floatingInput">Documento</label>
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
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control input-number" id="show_telefono"
                                        maxlength="10" disabled>
                                    <label for="floatingInput">Teléfono</label>
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
                        <fieldset disabled>
                            <div class="row text-center">
                                <div class="col">
                                    <div class="form-group text-center">
                                        <input type="checkbox" id="show_status" class="check_status"
                                            data-toggle="toggle" data-on="Activo" data-off="Inactivo"
                                            data-onstyle="success" data-offstyle="danger">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal"
                        class="btn btn-secondary rounded-pill ">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--UPDATE-->
    @include('user_laboratory.edit')
    <!--CARD-->
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Asignar laboratorios</h3>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <button id="btn_modal_add" class="bca btn float-end btn-success rounded-pill"> Asignar laboratorios</button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="tblUsers" style="width: 100% !important;">
                    <thead class="nowrap">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>LABORATORIOS</th>
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

        //CONFIGURACION DE DATATABLES LABORATORIOS AGREGAR
        let datatableLA = $('#tblLaboratorios_add').DataTable({
            destroy: true,
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }, {
                targets: [1],
                visible: false,
                searchable: false
            }],
            select: {
                style: 'multi',
                selector: 'td:first-child'
            },
            order: [[1, 'asc']],
            language: idiomas,
        });

        //CONFIGURACION DE DATATABLES LABORATORIOS EDITAR
        let datatableLE = $('#tblLaboratorios_edit').DataTable({
            destroy: true,
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }, {
                targets: [1],
                visible: false,
                searchable: false
            }],
            select: {
                style: 'multi',
                selector: 'td:first-child'
            },
            order: [[1, 'asc']],
            language: idiomas,
        });

        //ADD
        $('#tblLaboratorios_add tbody').on('click', 'tr', function () {
            $(this).toggleClass('selected');
        });

        $('#btn_check_lab').click(function () {
            if (datatableLA.rows({
                selected: true
            }).count() > 0) {
                datatableLA.rows().deselect();
                return;
            }

            datatableLA.rows().select();
        });

        datatableLA.on('select deselect', function (e, dt, type, indexes) {
            if (type === 'row') {
                if (dt.rows().count() === dt.rows({
                    selected: true
                }).count()) {
                    $('#btn_check_lab i').attr('class', 'far fa-check-square');
                    return;
                }

                if (dt.rows({
                    selected: true
                }).count() === 0) {
                    $('#btn_check_lab i').attr('class', 'far fa-square');
                    return;
                }

                $('#btn_check_lab i').attr('class', 'far fa-minus-square');
            }
        });

        //EDIT
        $('#tblLaboratorios_edit tbody').on('click', 'tr', function () {
            $(this).toggleClass('selected');
        });

        $('#btn_check_lab_edit').click(function () {
            if (datatableLE.rows({
                selected: true
            }).count() > 0) {
                datatableLE.rows().deselect();
                return;
            }

            datatableLE.rows().select();
        });

        datatableLE.on('select deselect', function (e, dt, type, indexes) {
            if (type === 'row') {
                if (dt.rows().count() === dt.rows({
                    selected: true
                }).count()) {
                    $('#btn_check_lab_edit i').attr('class', 'far fa-check-square');
                    return;
                }

                if (dt.rows({
                    selected: true
                }).count() === 0) {
                    $('#btn_check_lab_edit i').attr('class', 'far fa-square');
                    return;
                }

                $('#btn_check_lab_edit i').attr('class', 'far fa-minus-square');
            }
        });

        //LENAR TABLA PRINCIPAL
        function addRowDatable(data) {
            let c = datatable.rows().count() + 1;
            data.forEach(r => {
                datatable.row.add([
                    c,
                    r.NOMBRE,
                    r.LABORATORIOS,
                    '<div class="tdw">' +
                    '<a class="btn btn_edit p-1" data-id="' + r.ID + '" data-nombre="' + r.NOMBRE + '" >' +
                    '<i class="fas fa-edit fa-1x"></i>' +
                    '</a>' +
                    '<span class="lod' + r.ID + ' spinner-grow spinner-grow-sm" role="status" aria-hidden="true" style="display:none; margin: 0.5rem 0.6rem 0"></span>' +
                    '</div>',
                ]).draw(false);
                c++;
            });
            $(".loader").fadeOut("slow");
            $('#modal_add').modal('hide');
            $('#modal_edit').modal('hide');
        }

        function addRowDatableE(data_s, data_n) {
            data_s.forEach(r => {
                datatableLE.row.add([
                    "",
                    r.ID,
                    r.Nombre,
                ]).draw(false);
            });
            datatableLE.rows().select();

            data_n.forEach(r => {
                datatableLE.row.add([
                    "",
                    r.ID,
                    r.Nombre,
                ]).draw(false);
            });

            $(".loader").fadeOut("slow");
            $("#modal_edit").modal("show");
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

        //FUNCION GET USUARIOS LABORATORIOS
        $.ajax({
            url: "{{ route('get_user_laboratory') }}",
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
            $('#user_add').val('');
        }

        //FUNCION AGREGAR USUARIO LABORATORIOS
        $(document).on('click', '#btn_modal_add', function () {
            datatableLA.rows().deselect();
            $('#modal_add').modal('show');
        });
        $(document).on('click', '#btn_guardar', function () {
            let codes = $.map(datatableLA.rows('.selected').data(), function (item) {
                return item[1]
            });
            let usuario = $('#user_add').val();

            if (usuario == "") {
                alert_error('Seleccione un usuario');
            } else if (codes.length <= 0) {
                alert_error('No ha seleccionado ningún laboratorio');
            } else {
                $.ajax({
                    url: "{{ route('store_user_laboratory') }}",
                    data: {
                        usuario: usuario,
                        codes: codes,
                    },
                    type: "post",
                    beforeSend: function () {
                        $('#btn_guardar').prop('disabled', true);
                        $('#btn_guardar').empty();
                        $('#btn_guardar').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                    },
                    success: function (response) {
                        if (response.response) {
                            $(".loader").fadeIn();
                            datatable.clear().draw();
                            alert_success(response.msg);
                            addRowDatable(response.data);
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

                    error: function (x, xs, xt) {
                        alert_error(response.msg);
                        $('#btn_guardar').prop('disabled', false);
                        $('#btn_guardar').empty();
                        $('#btn_guardar').append('Guardar');
                    },
                });
            }
        });

        //FUNCIÓN TRAER LOS DATOS PARA EDITAR
        $(document).on('click', '.btn_edit', function () {
            let id = $(this).data("id");
            let usuario = $(this).data("nombre");
            $('.lod' + id).show();
            $(this).hide();

            $('#usuario_edit').val(id);
            $('#nombre_usuario').val(usuario);
            $.ajax({
                url: "{{ route('edit_user_laboratory') }}",
                dataType: "json",
                type: "POST",
                data: {
                    id: id,
                },
                success: function (response) {
                    if (response.response) {
                        datatableLE.clear().draw();
                        addRowDatableE(response.data_s, response.data_n);
                        $('.lod' + id).hide();
                        $('.btn_edit').show();
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

        });

        //FUNCION VER USUARIO LABORATORIOS
        $(document).on('click', '.btn_show', function () {
            let id = $(this).attr("data-id");
            let nombre = $(this).attr("data-nombre");
            let documento = $(this).attr("data-documento");
            let telefono = $(this).attr("data-telefono");
            let correo = $(this).attr("data-correo");
            let usuario = $(this).attr("data-usuario");
            let estado = $(this).attr("data-estado");
            $('#show_documento').val(documento);
            $('#show_nombre').val(nombre);
            $('#show_telefono').val(telefono);
            $('#show_correo').val(correo);
            $('#show_usuario').val(usuario);
            if (estado == 1) {
                $('#show_status').bootstrapToggle('on')
            } else {
                $('#show_status').bootstrapToggle('off')
            }
            $('#modal_show').modal('show');
        });

        //FUNCION ACTUALIZAR USUARIO LABORATORIOS
        $(document).on('click', '#btn_update', function () {
            let codes = $.map(datatableLE.rows('.selected').data(), function (item) {
                return item[1]
            });
            let usuario = $('#usuario_edit').val();

            if (usuario == "") {
                alert_error('Seleccione un usuario');
            } else if (codes.length <= 0) {
                alert_error('No ha seleccionado ningún laboratorio');
            } else {
                $.ajax({
                    url: "{{ route('update_user_laboratory') }}",
                    data: {
                        usuario: usuario,
                        codes: codes,
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
                            datatable.clear().draw();
                            alert_success(response.msg);
                            addRowDatable(response.data);
                            clear();
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
    $('#usuarios_l').addClass('active');
</script>
@endpush