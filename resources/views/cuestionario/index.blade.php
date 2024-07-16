@extends('layouts.app', ['page' => 'USUARIOS']) @section('content')
<div class="loader"></div>
<div id="main-content">
    <!--ADD-->
    @include('cuestionario.add')
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
                        <form id="form_ver_cuestionario">

                            <!-- Campos para RESP_1 y EVIDENCIA_1 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>1.¿Ha realizado alguna capacitación en seguridad informática con el personal
                                        clave
                                        de la organización en los últimos 6 meses?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_1" name="view_RESP_1">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_1" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>


                            <!-- Campos para view_RESP_2 y EVIDENCIA_2 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>2.¿Cuenta su organización con un plan de recuperación de desastres?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_2" name="view_RESP_2">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_2" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_3 y EVIDENCIA_3 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>3.¿Cuenta su organización con un plan de copias de seguridad?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_3" name="view_RESP_3">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_3" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_4 y EVIDENCIA_4 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>4.¿Cuenta su organización con un plan de recuperación de desastres?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_4" name="view_RESP_4">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_4" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_5 y EVIDENCIA_5 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>5.¿Ha realizado un simulacro del proceso de recuperación de desastres en los
                                        últimos 6 meses?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_5" name="view_RESP_5">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_5" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_6 y EVIDENCIA_6 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>6.¿Cuenta su organización con inventario de activos de información?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_6" name="view_RESP_6">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_6" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_7 y EVIDENCIA_7 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>7.¿El inventario de activos de información ha sido actualizado los últimos 6
                                        meses?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_7" name="view_RESP_7">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_7" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_8 y EVIDENCIA_8 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>8.¿La organización ha realizado alguna vez un analisis de riesgos de
                                        seguridad?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_8" name="view_RESP_8">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_8" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_9 y EVIDENCIA_9 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>9.¿La organización ha realizado un analisis de riesgo en el último
                                        año?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_9" name="view_RESP_9">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_9" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_10 y EVIDENCIA_10 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>10.¿La organización cuenta con software debidamente licenciado?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_10" name="view_RESP_10">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_10" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_11 y EVIDENCIA_11 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>11.¿Cuenta su organización con un inventario licencias?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_11" name="view_RESP_11">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_11" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_12 y EVIDENCIA_12 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>12.¿El inventario de licencias ha sido actualizado en los últimos 6
                                        meses?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_12" name="view_RESP_12">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_12" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_13 y EVIDENCIA_13 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>13.¿Cuenta la empresa con sistemas operativos y software actualizados y que
                                        cuenten con soporte vigente?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_13" name="view_RESP_13">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_13" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_14 y EVIDENCIA_14 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>14.¿Cuenta la empresa con un responsable del área de TI?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_14" name="view_RESP_14">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_14" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_15 y EVIDENCIA_15 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>15.¿El responsable del área de TI cuenta con vinculación formal con la
                                        compañía?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_15" name="view_RESP_15">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_15" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_16 y EVIDENCIA_16 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>16.¿El responsable del área de TI cuenta con formación acreditada en
                                        seguridad de la información?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_16" name="view_RESP_16">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_16" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_17 y EVIDENCIA_17 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>17.¿Su empresa es responsable de tratamiento de datos personales?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_17" name="view_RESP_17">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_17" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_18 y EVIDENCIA_18 -->
                            <div la="row">
                                <div class="col-12">
                                    <label>18.¿Ha sufrido la empresa algún indidente de seguridad en el último
                                        año?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_18" name="view_RESP_18">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_18" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campos para view_RESP_19 y EVIDENCIA_19 -->
                            <div class="row">
                                <div class="col-12">
                                    <label>19.¿Cuenta la empresa con un registro de incidentes de seguridad?</label>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="view_RESP_19" name="view_RESP_19">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <a id="view_EVIDENCIA_19" class="form-control" href="#" download>Descargar
                                            Evidencia</a>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    @include('cuestionario.edit')
    <!--CARD-->
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Cuestionarios</h3>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <button id="btn_modal_add" class="bca btn float-end btn-success rounded-pill"> Contestar
                    usaurio</button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="tblUsers" style="width: 100% !important;">
                    <thead class="nowrap">
                        <tr>
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Empresa</th>
                            <th>Fecha</th>
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
                    let nombreCompleto = r.usuario.NOMBRES + ' ' + r.usuario.APELLIDOS;
                    let razonSocial = r.empresa.RAZON_SOCIAL;
                    datatable.row.add([
                        r.ID,
                        nombreCompleto,
                        razonSocial,
                        r.FECHA,
                        '<div class="tdw">' +
                        '<a class="btn btn_show p-1" data-id="' + r.ID + '" data-nombre="' + r.NOMBRE + '" data-rol="' + r.ROL + '" data-documento="' + r.DOCUMENTO + '" data-telefono="' + r.TELEFONO + '" data-correo="' + r.CORREO + '" data-usuario="' + r.USERNAME + '" data-estado="' + r.ESTADO + '">' +
                        '<i class="fas fa-eye fa-1x"></i>' +
                        '</a>' +
                        '<a class="btn btn_edit p-1" data-id="' + r.ID + '" data-nombre="' + r.NOMBRE + '" data-rol="' + r.ROL + '" data-documento="' + r.DOCUMENTO + '" data-telefono="' + r.TELEFONO + '" data-correo="' + r.CORREO + '" data-usuario="' + r.USERNAME + '" data-estado="' + r.ESTADO + '">' +
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
                    targets: [4],
                    sortable: false
                }],
                language: idiomas,
            });

            //FUNCION GET USUARIOS
            $.ajax({
                url: "{{ route('get_cuestionario') }}",
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
            $(document).on('click', '#btn_guardar', function () {
                let formData = new FormData();
                formData.append('FECHA', $('#FECHA').val());
                formData.append('ID_USUARIO', $('#ID_USUARIO').val());
                formData.append('ID_EMPRESA', $('#ID_EMPRESA').val());

                for (let i = 1; i <= 19; i++) {
                    let resp = $('#RESP_' + i).val();
                    let evidencia = $('#EVIDENCIA_' + i)[0].files[0];

                    formData.append('RESP_' + i, resp);

                    if (!evidencia) {
                        alert_error('Falta subir la evidencia ' + i);
                        return;
                    }
                    formData.append('EVIDENCIA_' + i, evidencia);
                }

                $.ajax({
                    url: "{{ route('store_cuestionario') }}",
                    data: formData,
                    type: "POST",
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        $('#btn_guardar').prop('disabled', true).html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                    },
                    success: function (response) {
                        if (response.response) {
                            alert_success(response.msg);
                            addRowDatable(response.data);
                            $("#modal_add").modal("hide");
                            clear();
                        } else {
                            alert_error(response.msg);
                        }
                        $('#btn_guardar').prop('disabled', false).text('Guardar');
                    },
                    error: function (x, xs, xt) {
                        alert_error('Error en la solicitud.');
                        $('#btn_guardar').prop('disabled', false).text('Guardar');
                    },
                });
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
                let id = $(this).attr("data-id");

                $.ajax({
                    url: '/cuestionario/' + id,
                    method: 'GET',
                    success: function (response) {
                        if (response.response) {
                            let cuestionario = response.data;

                            $('#view_RESP_1').val(cuestionario.RESP_1);
                            $('#view_EVIDENCIA_1').attr('href', cuestionario.EVIDENCIA_1);
                            $('#view_EVIDENCIA_1').text('Descargar Evidencia 1');
                            $('#view_RESP_2').val(cuestionario.RESP_2);
                            $('#view_EVIDENCIA_2').attr('href', cuestionario.EVIDENCIA_2);
                            $('#view_EVIDENCIA_2').text('Descargar Evidencia 2');
                            $('#view_RESP_3').val(cuestionario.RESP_3);
                            $('#view_EVIDENCIA_3').attr('href', cuestionario.EVIDENCIA_3);
                            $('#view_EVIDENCIA_3').text('Descargar Evidencia 3');
                            $('#view_RESP_4').val(cuestionario.RESP_4);
                            $('#view_EVIDENCIA_4').attr('href', cuestionario.EVIDENCIA_4);
                            $('#view_EVIDENCIA_4').text('Descargar Evidencia 4');
                            $('#view_RESP_5').val(cuestionario.RESP_5);
                            $('#view_EVIDENCIA_5').attr('href', cuestionario.EVIDENCIA_5);
                            $('#view_EVIDENCIA_5').text('Descargar Evidencia 5');
                            $('#view_RESP_6').val(cuestionario.RESP_6);
                            $('#view_EVIDENCIA_6').attr('href', cuestionario.EVIDENCIA_6);
                            $('#view_EVIDENCIA_6').text('Descargar Evidencia 6');
                            $('#view_RESP_7').val(cuestionario.RESP_7);
                            $('#view_EVIDENCIA_7').attr('href', cuestionario.EVIDENCIA_7);
                            $('#view_EVIDENCIA_7').text('Descargar Evidencia 7');
                            $('#view_RESP_8').val(cuestionario.RESP_8);
                            $('#view_EVIDENCIA_8').attr('href', cuestionario.EVIDENCIA_8);
                            $('#view_EVIDENCIA_8').text('Descargar Evidencia 8');
                            $('#view_RESP_9').val(cuestionario.RESP_9);
                            $('#view_RESP_10').val(cuestionario.RESP_10);
                            $('#view_RESP_11').val(cuestionario.RESP_11);
                            $('#view_RESP_12').val(cuestionario.RESP_12);
                            $('#view_RESP_13').val(cuestionario.RESP_13);
                            $('#view_RESP_14').val(cuestionario.RESP_14);
                            $('#view_RESP_15').val(cuestionario.RESP_15);
                            $('#view_RESP_16').val(cuestionario.RESP_16);
                            $('#view_RESP_17').val(cuestionario.RESP_17);
                            $('#view_RESP_18').val(cuestionario.RESP_18);
                            $('#view_RESP_19').val(cuestionario.RESP_19);
                            $('#view_EVIDENCIA_19').attr('href', cuestionario.EVIDENCIA_19);
                            $('#view_EVIDENCIA_19').text('Descargar Evidencia 19');

                            $('#view_EVIDENCIA_9').attr('href', cuestionario.EVIDENCIA_9);
                            $('#view_EVIDENCIA_9').text('Descargar Evidencia 9');

                            $('#view_EVIDENCIA_10').attr('href', cuestionario.EVIDENCIA_10);
                            $('#view_EVIDENCIA_10').text('Descargar Evidencia 10');

                            $('#view_EVIDENCIA_11').attr('href', cuestionario.EVIDENCIA_11);
                            $('#view_EVIDENCIA_11').text('Descargar Evidencia 11');

                            $('#view_EVIDENCIA_12').attr('href', cuestionario.EVIDENCIA_12);
                            $('#view_EVIDENCIA_12').text('Descargar Evidencia 12');

                            $('#view_EVIDENCIA_13').attr('href', cuestionario.EVIDENCIA_13);
                            $('#view_EVIDENCIA_13').text('Descargar Evidencia 13');

                            $('#view_EVIDENCIA_14').attr('href', cuestionario.EVIDENCIA_14);
                            $('#view_EVIDENCIA_14').text('Descargar Evidencia 14');

                            $('#view_EVIDENCIA_15').attr('href', cuestionario.EVIDENCIA_15);
                            $('#view_EVIDENCIA_15').text('Descargar Evidencia 15');

                            $('#view_EVIDENCIA_16').attr('href', cuestionario.EVIDENCIA_16);
                            $('#view_EVIDENCIA_16').text('Descargar Evidencia 16');

                            $('#view_EVIDENCIA_17').attr('href', cuestionario.EVIDENCIA_17);
                            $('#view_EVIDENCIA_17').text('Descargar Evidencia 17');

                            $('#view_EVIDENCIA_18').attr('href', cuestionario.EVIDENCIA_18);
                            $('#view_EVIDENCIA_18').text('Descargar Evidencia 18');




                            $('#modal_show').modal('show');
                        } else {
                            alert(response.msg);
                        }
                    },
                    error: function (xhr, status, error) {
                        alert('Ocurrió un error al recuperar los datos: ' + error);
                    }
                });
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
        $('#cuestionario').addClass('active');
    </script>
@endpush