<script>
    $(document).ready(function () {
        $('.juridica').hide();
        $('.natural').show();
        $('#dv_add').prop('disabled', true);

        //AGREGAR
        $(document).on('change', '.radio_persona_add', function () {
            let radio_persona = $('input:radio[name=radio_persona_add]:checked').val();
            if (radio_persona == 1) {
                $(document).ready(function () {
                    $('#pnombre_add').val("");
                    $('#snombre_add').val("");
                    $('#papellido_add').val("");
                    $('#sapellido_add').val("");
                    $('.juridica').show();
                    $('.natural').hide();
                });
            } else {
                $(document).ready(function () {
                    $('.juridica').hide();
                    $('.natural').show();
                });
            }
        });

        $(document).on('change', '#tipo_documento_add', function () {
            let tipo_documento = $(this).val();
            if (tipo_documento == "NIT") {
                $('#dv_add').val("");
                $('#dv_add').prop('disabled', false);
            } else {
                $('#dv_add').val("");
                $('#dv_add').prop('disabled', true);
            }
        });

        //EDITAR
        $(document).on('change', '.radio_persona_edit', function () {
            let radio_persona = $('input:radio[name=radio_persona_edit]:checked').val();
            if (radio_persona == 1) {
                $(document).ready(function () {
                    $('#pnombre_edit').val("");
                    $('#snombre_edit').val("");
                    $('#papellido_edit').val("");
                    $('#sapellido_edit').val("");
                    $('.juridica').show();
                    $('.natural').hide();
                });
            } else {
                $(document).ready(function () {
                    $('.juridica').hide();
                    $('.natural').show();
                });
            }
        });

        $(document).on('change', '#tipo_documento_edit', function () {
            let tipo_documento = $(this).val();
            if (tipo_documento == "NIT") {
                $('#dv_edit').val("");
                $('#dv_edit').prop('disabled', false);
            } else {
                $('#dv_edit').val("");
                $('#dv_edit').prop('disabled', true);
            }
        });

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
                if (r.Enabled == 1) {
                    estado = '<span class="badge bg-success rounded-pill">Activo</span>';
                }
                let nat = 'Jurídica';
                if (r.Natural == 0) {
                    nat = 'Natural';
                } else {
                    nat = 'Jurídica';
                }
                datatable.row.add([
                    c,
                    r.Nombre,
                    nat,
                    r.TipoNit,
                    r.Nit,
                    r.Mail,
                    estado,
                    '<div class="tdw"><a class="btn btn_domicilio_show p-1" ' +
                    'data-id="' + r.ID + '"' +
                    '>' +
                    '<i class="fas fa-map-marked-alt fa-1x"></i>' +
                    '</a>' +
                    '<span class="lod' + r.ID + ' spinner-grow spinner-grow-sm" role="status" aria-hidden="true" style="display:none; margin: 0.5rem 0.6rem 0"></span>' +
                    '<a class="btn btn_edit p-1" ' +
                    'data-id="' + r.ID + '"' +
                    'data-natural="' + r.Natural + '"' +
                    'data-tiponit="' + r.TipoNit + '"' +
                    'data-nit="' + r.Nit + '"' +
                    'data-dv="' + r.DV + '"' +
                    'data-nombre="' + r.Nombre + '"' +
                    'data-nombre1="' + r.Nombre1 + '"' +
                    'data-nombre2="' + r.Nombre2 + '"' +
                    'data-apellido1="' + r.Apellido1 + '"' +
                    'data-apellido2="' + r.Apellido2 + '"' +
                    'data-regimen="' + r.Regimen + '"' +
                    'data-grancontribuyente="' + r.GranContribuyente + '"' +
                    'data-movil="' + r.Movil + '"' +
                    'data-birthday="' + r.BirthDay + '"' +
                    'data-birthmonth="' + r.BirthMonth + '"' +
                    'data-mail="' + r.Mail + '"' +
                    'data-contacto="' + r.Contacto + '"' +
                    'data-institucional="' + r.Institucional + '"' +
                    'data-retenedormodo="' + r.RetenedorModo + '"' +
                    'data-nombrecomercial="' + r.NombreComercial + '"' +
                    'data-url="' + r.URL + '"' +
                    'data-fechaingreso="' + r.FechaIngreso + '"' +
                    'data-enabled="' + r.Enabled + '"' +
                    'data-observaciones="' + r.Observaciones + '"' +
                    '>' +
                    '<i class="fas fa-edit fa-1x"></i>' +
                    '</a>' +
                    '</div>',
                ]).draw(false);
                c++;
            });
            $(".loader").fadeOut("slow");
        }

        //CONFIGURACION DE DATATABLES CLIENTES
        let datatable = $('#tblClients').DataTable({
            responsive: true,
            destroy: true,
            columnDefs: [{
                targets: [7],
                sortable: false
            }],
            language: idiomas,
        });

        //CONFIGURACION DE DATATABLES CLIENTES
        let datatableD = $('#tblDomicilios').DataTable({
            responsive: true,
            destroy: true,
            columnDefs: [{
                targets: [3],
                sortable: false
            }],
            language: idiomas,
        });

        //FUNCION GET CLIENTES
        $.ajax({
            url: "{{ route('get_clientes') }}",
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
            $("#radio_natural_add").prop("checked", true);
            $('input:radio[name=radio_persona_add]:checked').val(0);
            $('#tipo_documento_add').val("");
            $('#documento_add').val("");
            $('#dv_add').val("");
            $('#nombre_add').val("");
            $('#pnombre_add').val("");
            $('#snombre_add').val("");
            $('#papellido_add').val("");
            $('#sapellido_add').val("");
            $('#regimen_add').val("");
            $("#g_contribuyente_add").prop("checked", false);
            $('#movil_add').val("");
            $('#cumpleaños_add').val("");
            $('#email_add').val("");
            $('#contacto_add').val("");
            $("#institucional_add").prop("checked", false);
            $('#retencion_add').val("");
            $('#nombre_comercial_add').val("");
            $('#url_add').val("");
            $('#ingreso_add').val("");
            $('#obs_add').val("");
        }

        //VALIDACIÓN DE NUMEROS
        $('.input-number').on('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        $('.direc').on('input', function () {
            this.value = this.value.replace('from ', '');
            this.value = this.value.replace('FROM ', '');
        });

        //PONER EN MAYUSCULAS
        $('.uppercasec').on('input', function () {
            this.value = this.value.toUpperCase();
        });

        //PONER EN MAYUSCULAS SIN ESPACIO
        $('.uppercases').on('input', function () {
            this.value = this.value.replace(' ', '').toUpperCase();
        });

        //ABRIR MODAL DE AGREGAR 
        $(document).on('click', '#btn_modal_add', function () {
            let ingreso = new Date();
            let dia = ("0" + ingreso.getDate()).slice(-2);
            let mes = ((ingreso.getMonth() + 1));
            if (Number(ingreso.getMonth()) < 9) {
                mes = ("0" + (ingreso.getMonth() + 1));
            }
            let year = ingreso.getFullYear();

            $('#ingreso_add').val(year + '-' + mes + '-' + dia);
            $('#modal_add').modal('show');
        });

        //FUNCIÓN DE AGREGAR
        $(document).on('click', '#btn_guardar', function () {
            let val_num = /^[0-9]/;
            let val_name = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u;
            let val_mail =
                /^[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
            let val_url = /^https?:\/\/[\w\-]+(\.[\w\-]+)+[/#?]?.*$/;
            //TRAER DATOS DE CAMPOS
            let radio_persona_add = $('input:radio[name=radio_persona_add]:checked').val();
            let tipo_documento_add = $('#tipo_documento_add').val();
            let documento_add = $('#documento_add').val();
            let dv_add = $('#dv_add').val();
            let nombre_add = $('#nombre_add').val();
            let pnombre_add = $('#pnombre_add').val();
            let snombre_add = $('#snombre_add').val();
            let papellido_add = $('#papellido_add').val();
            let sapellido_add = $('#sapellido_add').val();
            let regimen_add = $('#regimen_add').val();
            let g_contribuyente_add = $('input:checkbox[name=g_contribuyente_add]:checked').val();
            let movil_add = $('#movil_add').val();
            let day_add = $('#day_add').val();
            let month_add = $('#month_add').val();
            let email_add = $('#email_add').val();
            let contacto_add = $('#contacto_add').val();
            let institucional_add = $('input:checkbox[name=institucional_add]:checked').val();
            let retencion_add = $('#retencion_add').val();
            let nombre_comercial_add = $('#nombre_comercial_add').val();
            let url_add = $('#url_add').val();
            let ingreso_add = $('#ingreso_add').val();
            let obs_add = $('#obs_add').val();

            //CREAR NOMBRE COMPLETO
            if (radio_persona_add == 0) {
                nombre_add = pnombre_add.trim() + ' ' + snombre_add.trim() + ' ' + papellido_add.trim() + ' ' + sapellido_add.trim();
            }
            //LLENAR REGIMEN SI ES VACIO
            if (regimen_add == "") {
                regimen_add = "N/A";
            }
            //LLENAR CONTRIBUYENTE SI ES VACIO
            if (g_contribuyente_add == undefined) {
                g_contribuyente_add = 0;
            }
            //LLENAR INSTITUCIONAL SI ES VACIO
            if (institucional_add == undefined) {
                institucional_add = 0;
            }
            //LLENAR RETENCION SI ES VACIO
            if (retencion_add == "") {
                retencion_add = "N/A";
            }

            if (tipo_documento_add == "") {
                alert_error("Seleccione un tipo de documento");
            } else if (documento_add.trim() == "" || documento_add.trim().length <= 5 || !val_num.test(documento_add)) {
                alert_error("Ingrese un documento válido");
            } else if (tipo_documento_add == "NIT" && dv_add == "") {
                alert_error("Seleccione un DV");
            } else if (nombre_add.trim() == "" || nombre_add.trim().length < 3 || !val_name.test(nombre_add)) {
                alert_error("Ingrese un nombre válido");
            } else if (radio_persona_add == 0 && (pnombre_add.trim() == "" || pnombre_add.trim().length < 3 || !val_name.test(pnombre_add))) {
                alert_error("Ingrese un 1er nombre válido");
            } else if (radio_persona_add == 0 && (snombre_add.trim() == "" || snombre_add.trim().length < 3 || !val_name.test(snombre_add))) {
                alert_error("Ingrese un 2do nombre válido");
            } else if (radio_persona_add == 0 && (papellido_add.trim() == "" || papellido_add.trim().length < 3 || !val_name.test(papellido_add))) {
                alert_error("Ingrese un 1er apellido válido");
            } else if (radio_persona_add == 0 && (sapellido_add.trim() == "" || sapellido_add.trim().length < 3 || !val_name.test(sapellido_add))) {
                alert_error("Ingrese un 2do apellido válido");
            } else if (movil_add != "" && (movil_add.trim().length < 6 || !val_num.test(movil_add))) {
                alert_error("Ingrese un movil válido");
            } else if (email_add != "" && (email_add.trim().length < 5 || !val_mail.test(email_add))) {
                alert_error("Ingrese un e-mail válido");
            } else if (contacto_add.trim() != "" && (contacto_add.trim().length < 3 || !val_name.test(contacto_add))) {
                alert_error("Ingrese un contacto válido");
            } else if (nombre_comercial_add.trim() == "" || (nombre_comercial_add.trim() != "" && (nombre_comercial_add.trim().length < 3 || !val_name.test(nombre_comercial_add)))) {
                alert_error("Ingrese un nombre comercial válido");
            } else if (url_add.trim() != "" && (url_add.trim().length < 10 || !val_url.test(url_add))) {
                alert_error("Ingrese una url válida");
            } else if (ingreso_add == "") {
                alert_error("Fecha de ingreso inválida");
            } else {
                $.ajax({
                    url: "{{ route('add_clientes') }}",
                    data: {
                        radio_persona_add: radio_persona_add,
                        tipo_documento_add: tipo_documento_add,
                        documento_add: documento_add,
                        dv_add: dv_add,
                        nombre_add: nombre_add,
                        pnombre_add: pnombre_add,
                        snombre_add: snombre_add,
                        papellido_add: papellido_add,
                        sapellido_add: sapellido_add,
                        regimen_add: regimen_add,
                        g_contribuyente_add: g_contribuyente_add,
                        movil_add: movil_add,
                        day_add: day_add,
                        month_add: month_add,
                        email_add: email_add,
                        contacto_add: contacto_add,
                        institucional_add: institucional_add,
                        retencion_add: retencion_add,
                        nombre_comercial_add: nombre_comercial_add,
                        url_add: url_add,
                        ingreso_add: ingreso_add,
                        obs_add: obs_add,
                    },
                    type: "post",
                    beforeSend: function () {
                        $('#btn_guardar').prop('disabled', true);
                        $('#btn_guardar').empty();
                        $('#btn_guardar').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                    },
                    success: function (response) {
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
            let id = $(this).data('id');
            let natural = $(this).data('natural');
            let tiponit = $(this).data('tiponit');
            let nit = $(this).data('nit');
            let dv = $(this).data('dv');
            let nombre = $(this).data('nombre');
            let nombre1 = $(this).data('nombre1');
            let nombre2 = $(this).data('nombre2');
            let apellido1 = $(this).data('apellido1');
            let apellido2 = $(this).data('apellido2');
            let regimen = $(this).data('regimen');
            let grancontribuyente = $(this).data('grancontribuyente');
            let movil = $(this).data('movil');
            let birthday = $(this).data('birthday');
            let birthmonth = $(this).data('birthmonth');
            let mail = $(this).data('mail');
            let contacto = $(this).data('contacto');
            let institucional = $(this).data('institucional');
            let retenedormodo = $(this).data('retenedormodo');
            let nombrecomercial = $(this).data('nombrecomercial');
            let url = $(this).data('url');
            let fechaingreso = $(this).data('fechaingreso');
            let enabled = $(this).data('enabled');
            let observaciones = $(this).data('observaciones');

            if (natural == 0) {
                $('.juridica').hide();
                $('.natural').show();
                $("#radio_natural_edit").prop("checked", true);
            } else {
                $('.natural').hide();
                $('.juridica').show();
                $("#radio_juridica_edit").prop("checked", true);
            }
            $('#id_edit').val(id);
            $('#tipo_documento_edit').val(tiponit);
            $('#documento_edit').val(nit);
            console.log(dv);
            if (dv == null) {
                $('#dv_edit').prop('disabled', true);
            } else {
                $('#dv_edit').prop('disabled', false);
            }
            $('#dv_edit').val(dv);
            $('#nombre_edit').val(nombre);
            $('#pnombre_edit').val(nombre1);
            $('#snombre_edit').val(nombre2);
            $('#papellido_edit').val(apellido1);
            $('#sapellido_edit').val(apellido1);
            $('#regimen_edit').val(regimen);
            if (grancontribuyente == 1) {
                $("#g_contribuyente_edit").prop("checked", true);
            } else {
                $("#g_contribuyente_edit").prop("checked", false);
            }
            $('#movil_edit').val(movil);
            $('#day_edit').val(birthday);
            $('#month_edit').val(birthmonth);
            $('#email_edit').val(mail);
            $('#contacto_edit').val(contacto);
            if (institucional == 1) {
                $("#institucional_edit").prop("checked", true);
            } else {
                $("#institucional_edit").prop("checked", false);
            }
            $('#retencion_edit').val(retenedormodo);
            $('#nombre_comercial_edit').val(nombrecomercial);
            $('#url_edit').val(url);
            let date = new Date(fechaingreso);
            let dia = (date.getDate()).toString();
            let mes = (date.getMonth() + 1).toString();
            if (dia.length < 2) {
                dia = ("0" + dia);
            }
            if (mes.length < 2) {
                mes = ("0" + mes);
            }
            let year = date.getFullYear();

            $('#ingreso_edit').val(year + '-' + mes + '-' + dia);
            $('#obs_edit').val(observaciones);

            if (enabled == 1) {
                $('#estado_edit').bootstrapToggle('on')
            } else {
                $('#estado_edit').bootstrapToggle('off')
            }
            $('#modal_edit').modal('show');
        });

        //FUNCIÓN DE ACTUALIZAR
        $(document).on('click', '#btn_update', function () {
            let val_num = /^[0-9]/;
            let val_name = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u;
            let val_mail =
                /^[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
            let val_url = /^https?:\/\/[\w\-]+(\.[\w\-]+)+[/#?]?.*$/;
            //TRAER DATOS DE CAMPOS
            let id_edit = $('#id_edit').val();
            let radio_persona_edit = $('input:radio[name=radio_persona_edit]:checked').val();
            let tipo_documento_edit = $('#tipo_documento_edit').val();
            let documento_edit = $('#documento_edit').val();
            let dv_edit = $('#dv_edit').val();
            let nombre_edit = $('#nombre_edit').val();
            let pnombre_edit = $('#pnombre_edit').val();
            let snombre_edit = $('#snombre_edit').val();
            let papellido_edit = $('#papellido_edit').val();
            let sapellido_edit = $('#sapellido_edit').val();
            let regimen_edit = $('#regimen_edit').val();
            let g_contribuyente_edit = $('input:checkbox[name=g_contribuyente_edit]:checked').val();
            let movil_edit = $('#movil_edit').val();
            let day_edit = $('#day_edit').val();
            let month_edit = $('#month_edit').val();
            let email_edit = $('#email_edit').val();
            let contacto_edit = $('#contacto_edit').val();
            let institucional_edit = $('input:checkbox[name=institucional_edit]:checked').val();
            let retencion_edit = $('#retencion_edit').val();
            let nombre_comercial_edit = $('#nombre_comercial_edit').val();
            let url_edit = $('#url_edit').val();
            let obs_edit = $('#obs_edit').val();
            let estado = $("#estado_edit").prop('checked');

            //ESTADO
            let status = '';
            if (estado) {
                status = 1;
            } else {
                status = 0;
            }
            //CREAR NOMBRE COMPLETO
            if (radio_persona_edit == 0) {
                nombre_edit = pnombre_edit.trim() + ' ' + snombre_edit.trim() + ' ' + papellido_edit.trim() + ' ' + sapellido_edit.trim();
            }
            //LLENAR REGIMEN SI ES VACIO
            if (regimen_edit == "") {
                regimen_edit = "N/A";
            }
            //LLENAR CONTRIBUYENTE SI ES VACIO
            if (g_contribuyente_edit == undefined) {
                g_contribuyente_edit = 0;
            }
            //LLENAR INSTITUCIONAL SI ES VACIO
            if (institucional_edit == undefined) {
                institucional_edit = 0;
            }
            //LLENAR RETENCION SI ES VACIO
            if (retencion_edit == "") {
                retencion_edit = "N/A";
            }

            if (tipo_documento_edit == "") {
                alert_error("Seleccione un tipo de documento");
            } else if (documento_edit.trim() == "" || documento_edit.trim().length <= 5 || !val_num.test(documento_edit)) {
                alert_error("Ingrese un documento válido");
            } else if (tipo_documento_edit == "NIT" && dv_edit == "") {
                alert_error("Seleccione un DV");
            } else if (nombre_edit.trim() == "" || nombre_edit.trim().length < 3 || !val_name.test(nombre_edit)) {
                alert_error("Ingrese un nombre válido");
            } else if (radio_persona_edit == 0 && (pnombre_edit.trim() == "" || pnombre_edit.trim().length < 3 || !val_name.test(pnombre_edit))) {
                alert_error("Ingrese un 1er nombre válido");
            } else if (radio_persona_edit == 0 && (snombre_edit.trim() == "" || snombre_edit.trim().length < 3 || !val_name.test(snombre_edit))) {
                alert_error("Ingrese un 2do nombre válido");
            } else if (radio_persona_edit == 0 && (papellido_edit.trim() == "" || papellido_edit.trim().length < 3 || !val_name.test(papellido_edit))) {
                alert_error("Ingrese un 1er apellido válido");
            } else if (radio_persona_edit == 0 && (sapellido_edit.trim() == "" || sapellido_edit.trim().length < 3 || !val_name.test(sapellido_edit))) {
                alert_error("Ingrese un 2do apellido válido");
            } else if (movil_edit != "" && (movil_edit.trim().length < 6 || !val_num.test(movil_edit))) {
                alert_error("Ingrese un movil válido");
            } else if (email_edit != "" && (email_edit.trim().length < 5 || !val_mail.test(email_edit))) {
                alert_error("Ingrese un e-mail válido");
            } else if (contacto_edit.trim() != "" && (contacto_edit.trim().length < 3 || !val_name.test(contacto_edit))) {
                alert_error("Ingrese un contacto válido");
            } else if (nombre_comercial_edit.trim() == "" || (nombre_comercial_edit.trim() != "" && (nombre_comercial_edit.trim().length < 3 || !val_name.test(nombre_comercial_edit)))) {
                alert_error("Ingrese un nombre comercial válido");
            } else if (url_edit.trim() != "" && (url_edit.trim().length < 10 || !val_url.test(url_edit))) {
                alert_error("Ingrese una url válida");
            } else {
                $.ajax({
                    url: "{{ route('edit_clientes') }}",
                    data: {
                        id_edit: id_edit,
                        radio_persona_edit: radio_persona_edit,
                        tipo_documento_edit: tipo_documento_edit,
                        documento_edit: documento_edit,
                        dv_edit: dv_edit,
                        nombre_edit: nombre_edit,
                        pnombre_edit: pnombre_edit,
                        snombre_edit: snombre_edit,
                        papellido_edit: papellido_edit,
                        sapellido_edit: sapellido_edit,
                        regimen_edit: regimen_edit,
                        g_contribuyente_edit: g_contribuyente_edit,
                        movil_edit: movil_edit,
                        day_edit: day_edit,
                        month_edit: month_edit,
                        email_edit: email_edit,
                        contacto_edit: contacto_edit,
                        institucional_edit: institucional_edit,
                        retencion_edit: retencion_edit,
                        nombre_comercial_edit: nombre_comercial_edit,
                        url_edit: url_edit,
                        obs_edit: obs_edit,
                        status: status,
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

        //FUNCIÓN TRAER LOS DATOS DE DOMICILIO
        $(document).on('click', '.btn_domicilio_show', function () {

            let id = $(this).data('id');
            $(this).hide();
            $('.lod' + id).show();
            datatableD.clear().draw();
            $('#id_dom').val(id);
            $.ajax({
                url: "{{ route('get_domicile') }}",
                dataType: "json",
                type: "POST",
                data: {
                    id: id,
                },
                success: function (response) {
                    if (response.response) {
                        addRowDatableD(response.data);
                        $('.btn_domicilio_show').show();
                        $('.lod' + id).hide();
                    } else {
                        alert_error('Error al cargar datos');
                    }
                },
                error: function (response) {
                    alert_error("Ocurrió un error al gestionar los domicilios, intenta más tarde");
                    $('.btn_domicilio_show').hide();
                    $('.lod' + id).show();
                }
            });
        });

        //LENAR TABLA DE DOMICILIOS
        function addRowDatableD(data) {
            let c = datatableD.rows().count() + 1;
            data.forEach(r => {
                let estado = '<span class="badge bg-danger rounded-pill">Inactivo</span>';
                let icon = '<i class="fas fa-unlock fa-1x"></i>';
                if (r.Enabled == 1) {
                    estado = '<span class="badge bg-success rounded-pill">Activo</span>';
                    icon = '<i class="fas fa-lock fa-1x"></i>';
                }
                datatableD.row.add([
                    c,
                    r.Telefono,
                    r.Direccion,
                    estado,
                    '<div class="tdw">' +
                    '<a class="btn btn_edit_dom p-1" ' +
                    'data-id="' + r.ID_Cliente + '"' +
                    'data-telefono="' + r.Telefono + '"' +
                    'data-direccion="' + r.Direccion + '"' +
                    'data-pais="' + r.Pais + '"' +
                    'data-departamento="' + r.Departamento + '"' +
                    'data-ciudad="' + r.Ciudad + '"' +
                    'data-domicilio="' + r.Domicilio + '"' +
                    'data-id_ruta="' + r.ID_Ruta + '"' +
                    'data-codigopostal="' + r.CodigoPostal + '"' +
                    'data-enabled="' + r.Enabled + '"' +
                    '>' +
                    '<i class="fas fa-edit fa-1x"></i>' +
                    '</a> <a class="btn btn_delete_dom p-1" ' +
                    'data-id="' + r.ID_Cliente + '"' +
                    'data-telefono="' + r.Telefono + '"' +
                    'data-estado="' + r.Enabled + '"' +
                    '>' +
                    icon +
                    '</a></div>',
                ]).draw(false);
                c++;
            });
            $('#modal_domicilio').modal('show');
            $(".loader").fadeOut("slow");
        }

        //LIMPIAR DOMICILIOS
        function clear_dom() {
            $('#telefono_d').val("");
            $('#direccion_d').val("");
            $('#pais_d').val("");
            $('#departamento_d').empty();
            $('#ciudad_d').empty();
            $('#codigop_d').val('0');
            $('#zona_d').val();
            $('#domicilio_d').val("");
        }

        var letras = ['A','AA','AB','AC','AD','AE','AF','AG','AH','B','BA','BB','BC','BD','BE','BF','BG','BH',
        'C','CA','CB','CC','CD','CE','CF','CG','CH','D','DA','DB','DC','DD','DE','DF','DG','DH','E','EA',
        'EB','EC','ED','EE','EF','EG','EH','F','FA','FB','FC','FD','FE','FF','FG','FH','G','GA','GB','GC',
        'GD','GE','GF','GG','GH','H','HA','HB','HC','HD','HE','HF','HG','HH'];

        var select = document.getElementById("letraSelect");

        var select2 = document.getElementById("letraSelect2");


        letras.forEach(letra => {
            var option = document.createElement("option");
            option.text = letra;
            option.value = letra;
            select.add(option);
        });


        letras.forEach(letra => {
            var option = document.createElement("option");
            option.text = letra;
            option.value = letra;
            select2.add(option);
        });

        //FUNCIÓN DE AGREGAR
        $(document).on('click', '#btn_guardar_dom', function () {
            let val_num = /^[0-9]/;
            let val_dir = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-°#]+$/u;

            //TRAER DATOS DE CAMPOS
            let id = $('#id_dom').val();
            let telefono_d = $('#telefono_d').val();
            let direccion_d = $('#direccion_d').val();
            let pais_d = $('#pais_d').val();
            let departamento_d = $('#departamento_d').val();
            let ciudad_d = $('#ciudad_d').val();
            let codigop_d = $('#codigop_d').val();
            let zona_d = $('#zona_d').val();

            // agregar formato del dane 
            let tipo = $('#tipo').val();
            let numero = $('#numero').val();
            let letra = $('letraSelect').val();
            let complemento = $('#complemento').val();
            let numero2 = $('#numero2').val();
            let letra2 = $('#letraSelect2').val();
            let complemento2 = $('#complemento2').val();
            let numero3 = $('#numero3').val();
            let domicilio_d = (tipo ? tipo + " " : "") +
            (numero ? numero + " " : "") +
            (letra ? letra + " " : "") +
            (complemento ? complemento + " " : "") +
            (numero2 ? numero2 + " " : "") +
            (letra2 ? letra2 + " " : "") +
            (complemento2 ? complemento2 + " " : "") +
            (numero3 ? numero3 : "");

           console.log(domicilio_d);

            if (telefono_d.trim() == "" || !val_num.test(telefono_d)) {
                alert_error("Ingrese un teléfono válido");
            }  else if (pais_d == "") {
                alert_error("Seleccione un país");
            } else if (departamento_d == "") {
                alert_error("Seleccione un departamento");
            } else if (ciudad_d == "") {
                alert_error("Seleccione una ciudad");
            } else if (codigop_d.trim() == "") {
                alert_error("Ingrese una código postal válido");
            } else if (domicilio_d.trim() == "") {
                alert_error("Ingrese un domicilio válido");
            } else {
                $.ajax({
                    url: "{{ route('add_domicile') }}",
                    data: {
                        id: id,
                        telefono_d: telefono_d,
                        direccion_d: domicilio_d,
                        pais_d: pais_d,
                        departamento_d: departamento_d,
                        ciudad_d: ciudad_d,
                        codigop_d: codigop_d,
                        zona_d: zona_d,
                        domicilio_d: direccion_d,
                    },
                    type: "post",
                    beforeSend: function () {
                        $('#btn_guardar_dom').prop('disabled', true);
                        $('#btn_guardar_dom').empty();
                        $('#btn_guardar_dom').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                    },
                    success: function (response) {
                        if (response.response) {
                            $(".loader").fadeIn();
                            alert_success(response.msg);
                            datatableD.clear().draw();
                            addRowDatableD(response.data);
                            clear_dom();
                            $('#btn_guardar_dom').prop('disabled', false);
                            $('#btn_guardar_dom').empty();
                            $('#btn_guardar_dom').append('Agregar');
                        } else {
                            alert_error(response.msg);
                            $('#btn_guardar_dom').prop('disabled', false);
                            $('#btn_guardar_dom').empty();
                            $('#btn_guardar_dom').append('Agregar');
                        }
                    },

                    error: function (x, xs, xt) {
                        $('#btn_guardar_dom').prop('disabled', false);
                        $('#btn_guardar_dom').empty();
                        $('#btn_guardar_dom').append('Guardar');
                        alert_error(response.msg);
                        
                    },
                });
            }
        });

        //FUNCION GET DEPARTAMENTOS
        $(document).on('change', '#pais_d', function () {
            let id = $(this).val();
            fpais(id, "", "", 'add');

        });

        function fpais(id, dep, mun, met) {
            $.ajax({
                url: "{{ route('get_departamento') }}",
                dataType: "json",
                type: "POST",
                data: {
                    id: id,
                },
                beforeSend: function () {
                    $('#departamento_d').prop('disabled', true);
                },
                success: function (response) {
                    if (response.response) {
                        $('#departamento_d').empty();
                        response.data.forEach(dep => {
                            $('#departamento_d').append('<option value="' + dep.Departamento + '">' + dep.Departamento + '</option>');
                        });
                        if (dep) {
                            $('#departamento_d').val(dep);
                        }
                        if (met == "edit") {
                            departamento(dep, mun, "edit");
                        }
                        $('#departamento_d').prop('disabled', false);

                    } else {
                        alert_error('Error al cargar datos');
                    }
                },
                error: function (response) {
                    alert_error("Ocurrió un error, intenta más tarde");
                    $(".loader").fadeOut("slow");
                }
            });

        }

        //FUNCION GET CIUDADES
        $(document).on('change', '#departamento_d', function () {
            let id = $(this).val();
            departamento(id, "", "add");

        });
        function departamento(id, mun, met) {
            $.ajax({
                url: "{{ route('get_municipio') }}",
                dataType: "json",
                type: "POST",
                data: {
                    id: id,
                },
                beforeSend: function () {
                    $('#ciudad_d').prop('disabled', true);
                },
                success: function (response) {
                    if (response.response) {
                        $('#ciudad_d').empty();
                        response.data.forEach(mun => {
                            $('#ciudad_d').append('<option value="' + mun.Municipio + '">' + mun.Municipio + '</option>');
                        });
                        if (mun) {
                            $('#ciudad_d').val(mun);
                        }

                        $('#ciudad_d').prop('disabled', false);
                    } else {
                        alert_error('Error al cargar datos');
                    }
                },
                error: function (response) {
                    alert_error("Ocurrió un error, intenta más tarde");
                }
            });

        }

        //FUNCIÓN TRAER LOS DATOS PARA EDITAR DOMICILIO
        $(document).on('click', '.btn_edit_dom', function () {
            $('#tittle_domicilio').empty();
            $('#tittle_domicilio').append('Editar domicilio');

            //BOTON
            $('#div_btn_domicilio').empty();
            $('#div_btn_domicilio').append('<button type="button" id="btn_back_add"' +
                'class="btn btn-primary rounded-pill btn-w"><i class="fas fa-plus-circle"></i></button>' +
                '<button type="button" id="btn_update_dom"' +
                'class="btn btn-primary rounded-pill">Editar</button>');

            let id = $(this).data('id');
            let telefono = $(this).data('telefono');
            let direccion = $(this).data('direccion');
            let pais = $(this).data('pais');
            let departamento = $(this).data('departamento');
            let ciudad = $(this).data('ciudad');
            let domicilio = $(this).data('domicilio');
            let id_ruta = $(this).data('id_ruta');
            let codigopostal = $(this).data('codigopostal');
            let enabled = $(this).data('enabled');
            fpais(pais, departamento, ciudad, "edit");
            $('#id_dom').val(id);
            $('#telefono_update').val(telefono);
            $('#telefono_d').val(telefono);
            $('#telefono_d').prop('disabled', true);
            $('#direccion_d').val(direccion);
            $('#pais_d').val(pais);
            $('#departamento_d').val(departamento);
            $('#ciudad_d').val(ciudad);
            $('#codigop_d').val(codigopostal);
            $('#zona_d').val(id_ruta);
            $('#domicilio_d').val(domicilio);
        });

        //FUNCIÓN LIMPIAR PARA AGREGAR
        function clear_add() {
            $('#telefono_d').prop('disabled', false);
            clear_dom();
            $('#tittle_domicilio').empty();
            $('#tittle_domicilio').append('Agregar domicilio');

            //BOTON
            $('#div_btn_domicilio').empty();
            $('#div_btn_domicilio').append('<button type="button" id="btn_agregar_dom"' +
                'class="btn btn-primary rounded-pill">Agregar</button>');
        }

        $(document).on('click', '#btn_back_add', function () {
            clear_add();
        });

        //FUNCIÓN DE ACTUALIZAR DOMICILIO
        $(document).on('click', '#btn_update_dom', function () {
            let val_num = /^[0-9]/;
            let val_dir = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-°#]+$/u;

            //TRAER DATOS DE CAMPOS
            let id = $('#id_dom').val();
            let telefono_d = $('#telefono_update').val();
            let direccion_d = $('#direccion_d').val();
            let pais_d = $('#pais_d').val();
            let departamento_d = $('#departamento_d').val();
            let ciudad_d = $('#ciudad_d').val();
            let codigop_d = $('#codigop_d').val();
            let zona_d = $('#zona_d').val();
            let domicilio_d = $('#domicilio_d').val();

            if (telefono_d.trim() == "" || !val_num.test(telefono_d)) {
                alert_error("Ingrese un teléfono válido");
            } else if (direccion_d.trim() == "" || !val_dir.test(direccion_d.trim())) {
                alert_error("Ingrese una dirección válida");
            } else if (direccion_d.trim() == "" || !val_dir.test(direccion_d.trim())) {
                alert_error("Ingrese una dirección válida");
            } else if (pais_d == "") {
                alert_error("Seleccione un país");
            } else if (departamento_d == "") {
                alert_error("Seleccione un departamento");
            } else if (ciudad_d == "") {
                alert_error("Seleccione una ciudad");
            } else if (codigop_d.trim() == "") {
                alert_error("Ingrese una código postal válido");
            } else if (domicilio_d.trim() == "") {
                alert_error("Ingrese un domicilio válido");
            } else {
                $.ajax({
                    url: "{{ route('edit_domicile') }}",
                    data: {
                        id: id,
                        telefono_d: telefono_d,
                        direccion_d: direccion_d,
                        pais_d: pais_d,
                        departamento_d: departamento_d,
                        ciudad_d: ciudad_d,
                        codigop_d: codigop_d,
                        zona_d: zona_d,
                        domicilio_d: domicilio_d,
                    },
                    type: "post",
                    beforeSend: function () {
                        $('#btn_update_dom').prop('disabled', true);
                        $('#btn_update_dom').empty();
                        $('#btn_update_dom').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                    },
                    success: function (response) {
                        if (response.response) {
                            $(".loader").fadeIn();
                            clear_add();
                            alert_success(response.msg);
                            datatableD.clear().draw();
                            addRowDatableD(response.data);
                            $('#btn_update_dom').prop('disabled', false);
                            $('#btn_update_dom').empty();
                            $('#btn_update_dom').append('Editar');
                        } else {
                            alert_error(response.msg);
                            $('#btn_update_dom').prop('disabled', false);
                            $('#btn_update_dom').empty();
                            $('#btn_update_dom').append('Agregar');
                        }
                    },

                    error: function (x, xs, xt) {
                        alert_error(response.msg);
                        $('#btn_update_dom').prop('disabled', false);
                        $('#btn_update_dom').empty();
                        $('#btn_update_dom').append('Guardar');
                    },
                });
            }
        });

        //FUNCIÓN DE ACTUALIZAR DOMICILIO
        $(document).on('click', '.btn_delete_dom', function () {
            let id = $(this).data('id');
            let telefono = $(this).data('telefono');
            let estado = $(this).data('estado');
            let status = "";
            if (estado == 1) {
                status = "inactivar";
            } else {
                status = "activar";
            }
            Swal.fire({
                text: '¿Está segur@ de ' + status + ' este domicilio?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, ' + status + ''
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('delete_domicile') }}",
                        data: {
                            id: id,
                            telefono: telefono,
                            estado: estado,
                        },
                        type: "post",
                        beforeSend: function () {
                        },
                        success: function (response) {
                            if (response.response) {
                                $(".loader").fadeIn();
                                alert_success(response.msg);
                                datatableD.clear().draw();
                                addRowDatableD(response.data);
                            } else {
                                alert_error(response.msg);
                            }
                        },

                        error: function (x, xs, xt) {
                            alert_error(response.msg);
                        },
                    });
                }
            })
        });
    });
</script>