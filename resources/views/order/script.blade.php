@if(session('session_rol') == 1 || session('session_rol') == 2)
<script>
    $(document).ready(function() {
        $('#descuento_ref').prop('disabled', false);
    });
</script>
@else
<script>
    $(document).ready(function() {
        $('#descuento_ref').prop('disabled', true);
    });
</script>
@endif

<script>
    $(document).ready(function() {
        localStorage.removeItem('storage_ref');

        //CONFIGURACION PARA AGREGAR CLIENTE
        $('.juridica').hide();
        $('.natural').show();
        $('#dv_add').prop('disabled', true);

        //AGREGAR
        $(document).on('change', '.radio_persona_add', function() {
            let radio_persona = $('input:radio[name=radio_persona_add]:checked').val();
            if (radio_persona == 1) {
                $(document).ready(function() {
                    $('#pnombre_add').val("");
                    $('#snombre_add').val("");
                    $('#papellido_add').val("");
                    $('#sapellido_add').val("");
                    $('.juridica').show();
                    $('.natural').hide();
                });
            } else {
                $(document).ready(function() {
                    $('.juridica').hide();
                    $('.natural').show();
                });
            }
        });

        $(document).on('change', '#tipo_documento_add', function() {
            let tipo_documento = $(this).val();
            if (tipo_documento == "NIT") {
                $('#dv_add').val("");
                $('#dv_add').prop('disabled', false);
            } else {
                $('#dv_add').val("");
                $('#dv_add').prop('disabled', true);
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
        //abrir vista modal para adjuntar archivo 
        $(document).on('click', '#btn_open_modal', function() {
            console.log('Clic detectado');
            var id_factura = $(this).data('id');
            $('#id_factura_input').val(id_factura);
            $('#crear_anexo').modal('show');
        });

        // Escucha el clic en el botón para subir el archivo
            $(document).on('click', '#btn_upload_file', function() {
                // Obtén el ID_FACTURA del campo oculto
                var id_factura = $('#id_factura_input').val();
                
                // Obtén el archivo seleccionado
                var archivo = $('#file_upload')[0].files[0];
                
                // Crea un formulario para enviar los datos
                var formData = new FormData();
                formData.append('ID_FACTURA', id_factura);
                formData.append('imagen', archivo);
                
                // Realiza una solicitud AJAX para enviar los datos al servidor
                $.ajax({
                    url: '/anexo',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Maneja la respuesta del servidor aquí
                        console.log(response);
                        // Cierra la vista modal si es necesario
                        $('#crear_anexo').modal('hide');
                    },
                    error: function(xhr, status, error) {
                        // Maneja los errores de la solicitud aquí
                        console.error(xhr.responseText);
                    }
                });
            });


        //LENAR TABLA
        function addRowDatable(data) {
            let c = datatable.rows().count() + 1;
            data.forEach(r => {
                let estado = '<span class="badge bg-danger rounded-pill">Anulado</span>';
                let boton_1 = '<a class="btn btn_anular p-1" ' +
                    'data-id="' + r.ID + '"' +
                    '>' +
                    '<i class="fas fa-ban fa-1x"></i>' +
                    '</a>';
                let boton_2 = '<a id="btn_open_modal" class=" btn btn_open_modal" data-modal-id="crear_anexo" ' +
                'data-id="' + r.ID + '"' +
                '>' +
                '<i class="fas fa-file-alt fa-1x"></i>' +
                '</a>';

                if (r.Enabled == 1 && r.Facturado == 0 && r.Pagado == 0) {
                    estado = '<span class="badge bg-success rounded-pill">Activo</span>';
                } else if (r.Facturado == 1 && r.Pagado == 0){
                    estado = '<span class="badge bg-success rounded-pill">Facturado</span>';
                } else if (r.Pagado == 1 && r.Facturado == 1){
                    estado = '<span class="badge bg-success rounded-pill">Pagado</span>';
                }

                if (r.Enabled == 0 && r.Pagado == 0 && r.Facturado == 0) {
                    boton_1 = '<a class="btn p-1" style="cursor:auto                                                                                                                                                                                                          ">' +
                    '<i class="fas fa-window-close fa-1x"></i>' +
                    '</a>';
                } else if(r.Facturado == 1 && r.Pagado == 0){
                    boton_1 = '<a class="btn p-1" style="cursor:auto                                                                                                                                                                                                          ">' +
                    '<i class="fas fa-file-invoice fa-1x"></i>' +
                    '</a>';
                } else if(r.Facturado == 1 && r.Pagado == 1){
                    boton_1 = '<a class="btn p-1" style="cursor:auto                                                                                                                                                                                                          ">' +
                    '<i class="fas fa-file-invoice-dollar fa-1x"></i>'+
                    '</a>';
                }
                let date = new Date(r.FechaFactura);
                const formatDate = (date) => {
                    let formatted_date = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate()
                    return formatted_date;
                }
                let date2 = new Date(r.FechaVencimiento);
                const formatDate2 = (date2) => {
                    let formatted_date2 = date2.getFullYear() + "-" + (date2.getMonth() + 1) + "-" + date2.getDate()
                    return formatted_date2;

                }
                datatable.row.add([
                    c,
                    r.ID,
                    '$' + price_format(r.Total),
                    r.Cliente,
                    formatDate(date),
                    formatDate(date2),
                    r.Telefono,
                    estado,
                    '<div class="tdw">' +
                    boton_1 +  boton_2 + 
                    '<a href="pdf/'+r.ID+'" class="btn p-1" ' +
                    'data-id="' + r.ID + '"' +
                    '>' +
                    '<i class="fas fa-file-pdf fa-1x"></i>'+
                    '</a>',
                    '</div>',
                ]).draw(false);
                c++;
            });
            $(".loader").fadeOut("slow");
        }

        //CONFIGURACION DE DATATABLES CLIENTES
        let datatable = $('#tblPedidos').DataTable({
            responsive: true,
            destroy: true,
            columnDefs: [{
                targets: [8],
                sortable: false
            }],
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf'
            ],
            language: idiomas,
        });

        //CONFIGURACION DE DATATABLES REFERENCIAS
        let datatableD = $('#tblReferencias').DataTable({
            responsive: true,
            order: [
                [1, "desc"]
            ],
            destroy: true,
            language: idiomas,
        });

        //CONFIGURACION DE DATATABLES REFERENCIAS SELECCIONADAS 
        let datatableREF = $('#tblReferenciasselected').DataTable({
            responsive: true,
            destroy: true,
            language: idiomas,
            paging: false,
            ordering: false,
            info: false,
            searching: false
        });

        //CONFIGURACION DE DATATABLES LOTES DE REFERENCIA
        let datatableLotes = $('#tblLotes').DataTable({
            responsive: true,
            destroy: true,
            language: idiomas,
            paging: false,
            ordering: false,
            info: false,
            searching: false
        });

        //FUNCION GET PEDIDOS
        function get_pedidos_all() {
            $.ajax({
                url: "{{ route('get_orders') }}",
                dataType: "json",
                type: "POST",
                data: {},
                beforeSend: function() {
                    $('#btn_show_all').prop('disabled', true);
                    $('#btn_show_all').empty();
                    $('#btn_show_all').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                },
                success: function(response) {
                    if (response.response) {
                        datatable.clear().draw();
                        addRowDatable(response.data);
                        $('#btn_rango_fecha').show();
                        $('#btn_show_all').hide();
                        $('#btn_show_all').prop('disabled', false);
                        $('#btn_show_all').empty();
                        $('#btn_show_all').append('Mostrar todos');

                    } else {
                        alert_error('Error al cargar datos');
                        $(".loader").fadeOut("slow");
                        $('#btn_show_all').prop('disabled', false);
                        $('#btn_show_all').empty();
                        $('#btn_show_all').append('Mostrar todos');
                    }
                },
                error: function(response) {
                    alert_error("Ocurrió un error, intenta más tarde");
                    $(".loader").fadeOut("slow");
                    $('#btn_show_all').prop('disabled', false);
                    $('#btn_show_all').empty();
                    $('#btn_show_all').append('Mostrar todos');
                }
            });
        }
        get_pedidos_all();

        //VALIDACIÓN DE NUMEROS
        $('.input-number').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        $('.direc').on('input', function() {
            this.value = this.value.replace('from ', '');
            this.value = this.value.replace('FROM ', '');
        });

        //VALIDACIÓN DE DESCUENTO
        $('.descuento').on('input', function() {
            this.value = this.value.replace(/[^0-9.]/g, '');
        });

        //PONER EN MAYUSCULAS
        $('.uppercasec').on('input', function() {
            this.value = this.value.toUpperCase();
        });

        //PONER EN MAYUSCULAS SIN ESPACIO
        $('.uppercases').on('input', function() {
            this.value = this.value.replace(' ', '').toUpperCase();
        });

        //ABRIR MODAL DE AGREGAR PEDIDO
        $(document).on('click', '#btn_modal_add_p', function() {
            $('#modal_add_p').modal('show');
        });

        //FUNCIÓN DE AGREGAR
        $(document).on('click', '#btn_guardar', function() {
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
            } else if (nombre_comercial_add.trim() != "" && (nombre_comercial_add.trim().length < 3 || !val_name.test(nombre_comercial_add))) {
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
                    beforeSend: function() {
                        $('#btn_guardar').prop('disabled', true);
                        $('#btn_guardar').empty();
                        $('#btn_guardar').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                    },
                    success: function(response) {
                        if (response.response) {
                            alert_success(response.msg);
                            response.data.forEach(rd => {
                                $('#cliente_pedido').append('<option value="' + rd.ID + '" data-nombre="' + rd.Nombre + '" data-tipo="' + rd.TipoNit + '" data-dv="' + rd.DV + '" data-documento="' + rd.Nit + '" data-movil="' + rd.Movil + '">' + rd.Nombre + '</option>');
                            });
                            $("#modal_add_p").modal("show");
                            $("#modal_add").modal("show");
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

        //LENAR TABLA DE REFERENCIAS
        function price_format(value) {
            return value.toString().replace(/\D/g, "")
                .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        }

        //AGREGAR REFERRENCIA DE MAS CANTIDAD
        function add_ref(dess, lotee, vencimientoo, referenciaa, descripcionn, nombree, cantidadd, precioo, stockk) {
            let lote = lotee;
            let vencimiento = vencimientoo;
            let referencia = referenciaa;
            let descripcion = descripcionn;
            let nombre = nombree;
            let stock = stockk;
            let cantidad = cantidadd;
            let precio = precioo;
            let clienteId = $('#cliente_pedido').val();
           // let dess = await get_descuento_cliente(clienteId);
            let store_ref = JSON.parse(localStorage.getItem('storage_ref'));
            if (!store_ref) {
                store_ref = [];
            }
            let filter_one = store_ref.filter(fa => fa.referencia == referencia);

            let remove = 0;
            if (filter_one.length > 0) {
                store_ref.forEach(fo => {
                    if (fo.referencia == referencia) {
                        let cant = fo.cantidad;
                        cant = cant + cantidad;
                        if (cant == 0) {
                            remove = 1;
                            return remove_count(referencia);
                        } else if (cant > stock) {
                            alert_error("No hay stock suficiente")
                        } else {
                            fo.cantidad = cant;
                            fo.total = fo.precio * cant;
                        }

                    }
                });
            } else {
                let json = {
                    'descuento': dess,
                    'lote': lote,
                    'vencimiento': vencimiento,
                    'referencia': referencia,
                    'descripcion': descripcion,
                    'nombre': nombre,
                    'precio': precio,
                    'cantidad': cantidad,
                    'stock': stock,
                    'total': precio * cantidad,
                };
                store_ref.push(json);
            }
            if (remove == 0) {
                llenarReferenciasSeleccionadas(store_ref);
                localStorage.setItem('storage_ref', JSON.stringify(store_ref));
            }
            total_pagar();
            $('#modal_lotes').modal("hide");
        }

        //FUNCIÓN DE AGREGAR REFERENCIA A LA LISTA
        $(document).on('click', '.btn_add_ref', function() {
            let referencia = $(this).data('referencia');
            let descripcion = $(this).data('descripcion');
            let nombre = $(this).data('nombre');
            let stock = $(this).data('cantidad');
            let discount = 0;
            let precio = $(this).data('precio');
            let cantidad = 1;

            let store_ref = JSON.parse(localStorage.getItem('storage_ref'));
            if (!store_ref) {
                store_ref = [];
            }
            let filter_one = store_ref.filter(fa => fa.referencia == referencia);
            if (filter_one.length > 0) {
                add_ref(0, 0, 0, referencia, descripcion, nombre, cantidad, precio, stock);
            } else {
            let lote = '234234';
            let descuento = $('#descuento_ref').val();
            let vencimiento = $(this).data('vencimiento');
            let referencia = $(this).data('referencia');
            let descripcion = $(this).data('descripcion');
            let nombre = $(this).data('nombre');
            let stock = $(this).data('cantidad');
            let cantidad = 1;
            let discount = 1;
            let precio = $(this).data('precio');

            add_ref(descuento, lote, vencimiento, referencia, descripcion, nombre, cantidad, precio, stock);
            }


            // 
        });

        $(document).on('click', '.close_lotes', function() {
            $('#modal_lotes').modal("hide");
        });


        //FUNCIÓN DE AGREGAR REFERENCIA A LA LISTA
        $(document).on('click', '.btn_select_lote', function() {
            let lote = $(this).data('lote');
            let descuento = $('#descuento_ref').val();
            let vencimiento = $(this).data('vencimiento');
            let referencia = $(this).data('referencia');
            let descripcion = $(this).data('descripcion');
            let nombre = $(this).data('nombre');
            let stock = $(this).data('cantidad');
            let cantidad = 1;
            let precio = $(this).data('precio');

            add_ref(descuento, lote, vencimiento, referencia, descripcion, nombre, cantidad, precio, stock);
        });

        //FUNCIÓN DE MORE REFERENCIA A LA LISTA
        $(document).on('click', '.more', function() {
            let referencia = $(this).data('referencia');
            let descripcion = $(this).data('descripcion');
            let nombre = $(this).data('nombre');
            let stock = $(this).data('cantidad');
            let cantidad = 1;
            let precio = $(this).data('precio');

            add_ref(0, 0, 0, referencia, descripcion, nombre, cantidad, precio, stock);
        });

        $(document).on('click', '.less', function() {
            let referencia = $(this).data('referencia');
            let descripcion = $(this).data('descripcion');
            let nombre = $(this).data('nombre');
            let stock = $(this).data('cantidad');
            let cantidad = -1;
            let precio = $(this).data('precio');

            add_ref(0, 0, 0, referencia, descripcion, nombre, cantidad, precio, stock);
        });
        //hace el calculo cuando se cambia el contador 
        $(document).on('change', '#count_r', function() {
            let referencia = $(this).data('referencia');
            let descripcion = $(this).data('descripcion');
            let nombre = $(this).data('nombre');
            let stock = $(this).data('cantidad');
            let cantidad = $(this).val();
            let precio = $(this).data('precio');
            if (cantidad <= stock) {
                input_change(referencia, cantidad, stock);
            } else {
                $(this).val(stock);
                input_change(referencia, stock, stock);
            }

        });
        //hace el calculo cuando se cambia el descuento  
        $(document).on('change', '#campo_descuento', function() {
            let referencia = $(this).data('referencia');
            let descripcion = $(this).data('descripcion');
            let nombre = $(this).data('nombre');
            let stock = $(this).data('cantidad');
            let cantidad = $(this).val();
            let precio = $(this).data('precio');
            if (cantidad <= stock) {
                input_change(referencia, cantidad, stock);
            } else {
                $(this).val(stock);
                input_change(referencia, stock, stock);
            }
        });


        //CAMBIAR CANTIDAD DEL IMPUT
        function input_change(referencia, cantidad, stock) {
            let store_ref = JSON.parse(localStorage.getItem('storage_ref'));
            if (!store_ref) {
                store_ref = [];
            }
            let filter_one = store_ref.filter(fa => fa.referencia == referencia);

            let remove = 0;
            if (filter_one.length > 0) {
                store_ref.forEach(fo => {
                    if (fo.referencia == referencia) {
                        let cant = fo.cantidad;
                        cant = cantidad;
                        if (cant == 0) {
                            remove = 1;
                            return remove_count(referencia);
                        } else if (cant > stock) {
                            alert_error("No hay stock suficiente")
                        } else {
                            fo.cantidad = cant;
                            fo.total = fo.precio * cant;
                        }

                    }
                });
            }
            if (remove == 0) {
                llenarReferenciasSeleccionadas(store_ref);
                localStorage.setItem('storage_ref', JSON.stringify(store_ref));
            }
            total_pagar();
        }

        //REMOVER REFERENCIAS
        function remove_reference(referenciaa) {
            let referencia = referenciaa;
            let store_ref = JSON.parse(localStorage.getItem('storage_ref'));
            if (!store_ref) {
                store_ref = [];
            }
            let filter_one = store_ref.filter(fa => fa.referencia != referencia);
            Swal.fire({
                text: '¿Está segur@ de remover esta referencia?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, remover'
            }).then((result) => {
                if (result.isConfirmed) {
                    llenarReferenciasSeleccionadas(filter_one);
                    localStorage.setItem('storage_ref', JSON.stringify(filter_one));
                    total_pagar();
                }
            })
        }

        function remove_count(referenciaa) {
            let referencia = referenciaa;
            let store_ref = JSON.parse(localStorage.getItem('storage_ref'));
            if (!store_ref) {
                store_ref = [];
            }
            let filter_one = store_ref.filter(fa => fa.referencia != referencia);

            llenarReferenciasSeleccionadas(filter_one);
            localStorage.setItem('storage_ref', JSON.stringify(filter_one));
            total_pagar();
        }
        $(document).on('click', '.btn_remover', function() {
            let referencia = $(this).data('referencia');
            remove_reference(referencia);
        });
        //TOTAL A PAGAR
        function total_pagar() {
            let store_ref = JSON.parse(localStorage.getItem('storage_ref'));
            if (!store_ref) {
                store_ref = [];
            }
            let cantidad = 0;
            let total = 0;
            store_ref.forEach(s => {
                total += s.total - ((s.total * s.descuento) / 100);
            });
            cantidad = store_ref.length;
            $('.total_price').empty();
            $('.count_ref').empty();
            $('.total_price').append('$' + price_format(total));
            $('.count_ref').append(cantidad);
        }
        //LLENAR TABLA DE REFERENCIA SELECIONADAS
        function llenarReferenciasSeleccionadas(data) {
            datatableREF.clear().draw();
            let c = datatableREF.rows().count() + 1;
            data.forEach(r => {
                let descuentoSelect = '<select id="descuento" class="form-control">' +
                                        '<option value=""></option>' +
                                    '</select>';
                datatableREF.row.add([
                    r.descripcion,
                    descuentoSelect, // Aquí reemplazamos r.descuento con el select vacío
                    '<div class="input-group">' +
                    '<button class="less"' +
                    'data-referencia="' + r.referencia + '" ' +
                    'data-cantidad="' + r.stock + '" ' +
                    'data-descripcion="' + r.descripcion + '" ' +
                    'data-nombre="' + r.nombre + '" ' +
                    'data-precio="' + r.precio + '"' +
                    '><i class="far fa-minus-square"></i></button>' +
                    '<input type="text" value="' + r.cantidad + '" class="form-control input-number" id="count_r" maxlength="3"' +
                    'data-referencia="' + r.referencia + '" ' +
                    'data-cantidad="' + r.stock + '" ' +
                    'data-descripcion="' + r.descripcion + '" ' +
                    'data-nombre="' + r.nombre + '" ' +
                    'data-precio="' + r.precio + '"' +
                    '>' +
                    '<button class="more"' +
                    'data-referencia="' + r.referencia + '" ' +
                    'data-cantidad="' + r.stock + '" ' +
                    'data-descripcion="' + r.descripcion + '" ' +
                    'data-nombre="' + r.nombre + '" ' +
                    'data-precio="' + r.precio + '"' +
                    '><i class="far fa-plus-square"></i></button>' +
                    '</div>',
                    '$' + price_format(r.precio),

                    '<div class="tdwr">' +
                    '<a class="btn btn_remover" ' +
                    'data-referencia="' + r.referencia + '" ' +
                    'data-cantidad="' + r.stock + '" ' +
                    '>' +
                    '<i class="fas fa-trash-alt fa-1x"></i>' +
                    '</a></div>',
                ]).draw(false);
                c++;
            });
        } 


        //LLENAR TABLA DE LOTES
        function llenarLotes(data, referencia, descripcion, nombre, stock, precio) {
            datatableLotes.clear().draw();
            data.forEach(r => {
                datatableLotes.row.add([
                    r.Lote,
                    r.Vencimiento,
                    '<div class="tdwr">' +
                    '<a class="btn btn_select_lote" data-lote="' + r.Lote + '" data-vencimiento="' + r.Vencimiento + '"' +
                    'data-cantidad="' + stock + '" data-referencia="' + referencia + '" data-descripcion="' + descripcion + '" data-nombre="' + nombre + '" data-precio="' + precio + '">' +
                    '<i class="fas fa-check-circle"></i>' +
                    '</a>' +
                    '</div>'
                ]).draw(false);
            });
            $('#modal_lotesLabel').empty();
            $('#modal_lotesLabel').append('Lotes de referencia: ' + referencia);
            $('#descuento_ref').val(0);
            $('#modal_lotes').modal("show");
            $('.loader').fadeOut('slow');
        }

        //OPERACION CON LOS DATOS DEL CLIENTE Y LOS DOMICILIOS
        $(document).on('change', '#cliente_pedido', function() {
            let id = $(this).val();
            let nombre = $('#cliente_pedido option:selected').data('nombre');
            let tipo = $('#cliente_pedido option:selected').data('tipo');
            let dv = $('#cliente_pedido option:selected').data('dv');
            let documento = $('#cliente_pedido option:selected').data('documento');
            let movil = $('#cliente_pedido option:selected').data('movil');

            if (tipo == 'NIT' && dv >= 0) {
                documento = documento + '-' + dv;
            }
            $('#nombre_show').val(nombre);
            $('#documento_show').val(documento);
            $('#movil_show').val(movil);
            $('#domicilio_pedido').prop('disabled', true);
            get_domicile_cliente(id);
           

        });

        //OPERACION CON DOMICILIOS PARA MOSTRAR
        $(document).on('change', '#domicilio_pedido', function() {
            let telefono = $('#domicilio_pedido option:selected').data('telefono');
            let direccion = $('#domicilio_pedido option:selected').data('direccion');
            let departamento = $('#domicilio_pedido option:selected').data('departamento');
            let ciudad = $('#domicilio_pedido option:selected').data('ciudad');

            $('#telefono_show').val(telefono);
            $('#direccion_show').val(direccion + ' ' + ciudad + ' ' + departamento);
        });

        //FUNCIÓN TRAER LOS DATOS DE DOMICILIO DEL CLIENTE SELECCIONADO
        function get_domicile_cliente(id_cli) {
                let id = id_cli;
                $.ajax({
                    url: "{{ route('get_domicile_p') }}",
                    dataType: "json",
                    type: "POST",
                    data: {
                        id: id,
                    },
                    success: function(response) {
                        if (response.response) {
                            if (response.data.length > 0) {
                                $('#domicilio_pedido').empty();
                                $('#domicilio_pedido').append('<option value="">Seleccione un domicilio</option>');
                                response.data.forEach(d => {
                                    $('#domicilio_pedido').append('<option value="' + d.Telefono + '"' +
                                        'data-telefono="' + d.Telefono + '"' +
                                        'data-direccion="' + d.Direccion + '"' +
                                        'data-departamento="' + d.Departamento + '"' +
                                        'data-ciudad="' + d.Ciudad + '"' +
                                        '>' + d.Direccion + '</option>');
                                });
                                $('#domicilio_pedido').prop('disabled', false);

                            } else {
                                alert_error('Este cliente no tiene ningún domicilio');
                            }
                        } else {
                            alert_error('Error al cargar datos');
                        }
                    },
                    error: function(response) {
                        alert_error("Ocurrió un error al gestionar los domicilios, intenta más tarde");
                    }
                });
            }

            //FUNCIÓN TRAER LOS DATOS DE Descuento DEL CLIENTE SELECCIONADO
            function get_descuento_cliente(id_cli) {
                return new Promise((resolve, reject) => {
                    let id = id_cli;
                    $.ajax({
                        url: "{{route('descuento')}}",
                        dataType: "json",
                        type: "POST",
                        data: {
                            id: id,
                        },
                        success: function(response) {
                            console.log(response.data);
                            if (response.response) {
                                if (response.data.length > 0) {
                                    resolve(response.data); // Resuelve la promesa con los datos del descuento
                                } else {
                                    reject('Este cliente no tiene ningún descuento');
                                }
                            } else {
                                reject('Error al cargar datos');
                            }
                        },
                        error: function(response) {
                            reject('Ocurrió un error al cargar los descuentos, intenta más tarde');
                        }
                    });
                });
            }
        //seleccionar descuento 
        /*$(document).ready(function() {
                // Agregar un controlador de eventos 'change' al select 'descuento_pedido'
                $('#descuento_pedido').change(function() {
                    // Obtener el valor seleccionado del select 'descuento_pedido'
                    var selectedDescuento = $(this).val();
                    
                    // Actualizar el valor del campo 'descuento_show' con el valor seleccionado
                    $('#descuento_show').val(selectedDescuento);
                });
            });*/



        //CONTINUAR PARA SELECCIONAR CLIENTE Y DOMICILIO
        $(document).on('click', '.continue_modal_order', function() {
            let cliente_pedido = $('#cliente_pedido').val();
            let domicilio_pedido = $('#domicilio_pedido').val();
            if (cliente_pedido == "") {
                alert_error("Debe seleccionar un cliente");
            } else if (domicilio_pedido == "") {
                alert_error("Debe seleccionar un domicilio");
            } else {
                $('#referencias_pedido').fadeIn("slow");
                $('#clientes_pedido').fadeOut("slow");
                $('.back_modal_order').fadeIn("slow");
                $('.continue_modal_order').hide();
                $('#final').fadeIn("slow");
                $('#final').addClass("final_modal_order");
            }


        });

        //CERRAR MODAL DE PEDIDOS
        $(document).on('click', '#close_pedido', function() {
            clear_add();
        });

        function clear_add() {
            $('#cliente_pedido').val("");
            $('#fehca_v').val("");
            $('#domicilio_pedido').empty();
            $('#domicilio_pedido').append('<option value="">Seleccione un domicilio</option>');

            $('#referencias_pedido').hide();
            $('#clientes_pedido').show();
            $('.back_modal_order').hide();
            $('.continue_modal_order').show();
            $('#final').hide();
            $('#final').removeClass("final_modal_order");
            $('#nombre_show').val("");
            $('#documento_show').val("");
            $('#movil_show').val("");
            $('#descuento_pedido').val("");
            $('#telefono_show').val("");
            $('#direccion_show').val("");
            $('#domicilio_pedido').prop('disabled', true);

            localStorage.removeItem("storage_ref");
            datatableREF.clear().draw();
            total_pagar();
        }

        //VOLVER A SELECCIONAR REFERENCIA
        $(document).on('click', '.back_modal_order', function() {
            $('#referencias_pedido').fadeOut("slow");
            $('#clientes_pedido').fadeIn("slow");
            $('.back_modal_order').hide();
            $('.continue_modal_order').fadeIn("slow");
            $('#final').hide();
            $('#final').removeClass("final_modal_order");
        });

        //GUARDAR PEDIDO
        $(document).on('click', '.final_modal_order', function() {
            let store_ref = JSON.parse(localStorage.getItem('storage_ref'));
            if (!store_ref) {
                store_ref = [];
            }
            let referencias = [];
            store_ref.forEach(sf => {
                referencias.push(sf.referencia);
            });
            let fehca_v = $('#fehca_v').val();
            let observaciones = $('#observaciones').val();
            let cliente_pedido = $('#cliente_pedido').val();
            let domicilio_pedido = $('#domicilio_pedido').val();
            let descuento_pedido = $('#descuento_pedido').val();

            if (referencias <= 0) {
                alert_error('Este pedido no tiene referencias seleccionadas')
            } else if (cliente_pedido == "") {
                alert_error("Debe seleccionar un cliente");
            } else if (domicilio_pedido == "") {
                alert_error("Debe seleccionar un domicilio");
            } else if (descuento_pedido == "") {
                alert_error("Debe seleccionar un domicilio");
            } else {
                $.ajax({
                    url: "{{ route('add_orders') }}",
                    data: {
                        store_ref: store_ref,
                        referencias: referencias,
                        cliente_pedido: cliente_pedido,
                        domicilio_pedido: domicilio_pedido,
                        observaciones: observaciones,
                        descuento_pedido: descuento_pedido,                        
                        fehca_v,
                        fehca_v
                    },
                    type: "post",
                    beforeSend: function() {
                        $('.final_modal_order').prop('disabled', true);
                        $('.final_modal_order').empty();
                        $('.final_modal_order').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                    },
                    success: function(response) {
                        if (response.response) {
                            $('.final_modal_order').empty();
                            $('.final_modal_order').append('Guardar');
                            $('.final_modal_order').prop('disabled', false);
                            clear_add();
                            alert_success(response.msg);
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                            // addRowDatable(response.data);
                            $("#modal_add_p").modal("hide");


                        } else {
                            alert_error(response.msg);
                            $('.final_modal_order').prop('disabled', false);
                            $('.final_modal_order').empty();
                            $('.final_modal_order').append('Guardar');
                        }
                    },

                    error: function(x, xs, xt) {
                        alert_error("Error inesperado");
                        $('.final_modal_order').prop('disabled', false);
                        $('.final_modal_order').empty();
                        $('.final_modal_order').append('Guardar');
                    },
                });
            }
        });

        //ANULAR PEDIDOS
        $(document).on('click', '.btn_anular', function() {
            let id = $(this).data('id');

            Swal.fire({
                text: '¿Está segur@ de anular este pedido?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, anular'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('anular_orden') }}",
                        dataType: "json",
                        type: "POST",
                        data: {
                            id: id
                        },
                        success: function(response) {
                            if (response.response) {
                                $(".loader").fadeIn();
                                alert_success(response.msg);
                                window.location.reload();
                            } else {
                                alert_error('Error al anular el pedido');
                                $(".loader").fadeOut("slow");
                            }
                        },
                        error: function(response) {
                            alert_error("Ocurrió un error, intenta más tarde");
                            $(".loader").fadeOut("slow");
                        }
                    });
                }
            })
        });

        //ABRIR RAGO DE FECHA
        $(document).on('click', '#btn_rango_fecha', function() {
            $('#modal_ragon_fecha').modal("show");
        });

        //GET CLIENTE
        $(document).on('click', '#btn_show_all', function() {
            get_pedidos_all();
        });

        //BOTON FILTRAR POR FECHAS
        $(document).on('click', '#btn_filter_range', function() {
            let date_init = $('#date_init').val();
            let date_end = $('#date_end').val();

            if (date_init == "") {
                alert_error('Debe seleccionar una fecha de inicio');
            } else if (date_end == "") {
                alert_error('Debe seleccionar una fecha final');
            } else if (date_init > date_end) {
                alert_error('La fecha de inicio no puede ser mayor a la fecha final');
            } else {
                $.ajax({
                    url: "{{ route('get_orders_range') }}",
                    dataType: "json",
                    type: "POST",
                    data: {
                        date_init: date_init,
                        date_end: date_end,
                    },
                    beforeSend: function() {
                        $('#btn_filter_range').prop('disabled', true);
                        $('#btn_filter_range').empty();
                        $('#btn_filter_range').append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Cargando');
                    },
                    success: function(response) {
                        if (response.response) {
                            datatable.clear().draw();
                            addRowDatable(response.data);

                            $('#btn_filter_range').prop('disabled', false);
                            $('#btn_filter_range').empty();
                            $('#btn_filter_range').append('Filtrar');

                            $('#modal_ragon_fecha').modal("hide");
                            $('#date_init').val("");
                            $('#date_end').val("");
                            $('#btn_rango_fecha').hide();
                            $('#btn_show_all').show();
                        } else {
                            alert_error('Error al cargar datos');
                            $(".loader").fadeOut("slow");
                            $('#btn_filter_range').prop('disabled', false);
                            $('#btn_filter_range').empty();
                            $('#btn_filter_range').append('Filtrar');
                        }
                    },
                    error: function(response) {
                        alert_error("Ocurrió un error, intenta más tarde");
                        $(".loader").fadeOut("slow");
                        $('#btn_filter_range').prop('disabled', false);
                        $('#btn_filter_range').empty();
                        $('#btn_filter_range').append('Filtrar');
                    }
                });
            }
        });

        //FUNCION GET DEPARTAMENTOS
        $(document).on('change', '#pais_d', function() {
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
                beforeSend: function() {
                    $('#departamento_d').prop('disabled', true);
                },
                success: function(response) {
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
                error: function(response) {
                    alert_error("Ocurrió un error, intenta más tarde");
                    $(".loader").fadeOut("slow");
                }
            });

        }

        //FUNCION GET CIUDADES
        $(document).on('change', '#departamento_d', function() {
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
                beforeSend: function() {
                    $('#ciudad_d').prop('disabled', true);
                },
                success: function(response) {
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
                error: function(response) {
                    alert_error("Ocurrió un error, intenta más tarde");
                }
            });

        }

    });
</script>