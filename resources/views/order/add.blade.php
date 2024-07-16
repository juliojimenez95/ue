<!--ADD-->
<div class="modal fade" id="modal_add_p" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal_add_p" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-xxl-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_add_p">Agregar pedido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" id="close_pedido" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 mt-1">
                <!-- MODAL QUE MUESTRA LAS LOTES -->
                <div class="modal fade" id="modal_lotes" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal_lotesLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal_lotesLabel"></h5>
                                <button type="button" class="btn-close close_lotes"  aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="text" placeholder="a" value="0" class="form-control descuento" id="descuento_ref" maxlength="3">
                                            <label for="floatingInput">Descuento *</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <table class="table table-striped" id="tblLotes" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Lote</th>
                                                    <th>Vencimiento</th>
                                                    <th style="text-align: center;"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN MODAL QUE MUESTRA LAS LOTES -->
                <div class="container content_add_p">
                    <div class="row m-1" id="clientes_pedido" >
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="card card_border">
                                <div class="card-body m-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <select id="cliente_pedido" class="form-control">
                                                    <option value="">Seleccione un cliente</option>
                                                    @foreach($clientes as $c)
                                                    <option value="{{ $c->ID }}" data-nombre="{{ $c->Nombre }}" data-tipo="{{ $c->TipoNit }}" data-dv="{{ $c->DV }}" data-documento="{{ $c->Nit }}" data-movil="{{ $c->Movil }}">{{ $c->Nombre }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingInput">Cliente *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <select id="domicilio_pedido" class="form-control" disabled>
                                                    <option value="">Seleccione un domicilio</option>
                                                </select>
                                                <label for="floatingInput">Domicilios *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <select id="descuento_pedido" class="form-control" disabled>
                                                    <option value="">Seleccione un descuento</option>
                                                </select>
                                                <label for="floatingInput">Descuento *</label>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="date" placeholder="a" class="form-control" id="fehca_v">
                                                <label for="floatingInput">Fecha de vencimiento *</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" placeholder="a" id="observaciones" style="height: 100px;"></textarea>
                                                <label for="floatingInput">Observaciones</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card card_border">
                                <div class="card-body m-1">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <h5 id="tittle_domicilio">Información básica de cliente</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" placeholder="a" class="form-control" id="nombre_show" readonly>
                                                <label for="floatingInput">Nombre</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" placeholder="a" class="form-control" id="documento_show" readonly>
                                                <label for="floatingInput">Documento</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" placeholder="a" class="form-control" id="movil_show" readonly>
                                                <label for="floatingInput">Movil</label>
                                            </div>
                                        </div>
                                        <!--
                                        <div class="col-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" placeholder="a" class="form-control" id="descuento_show" readonly>
                                                <label for="floatingInput">Descuento</label>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <h5 id="tittle_domicilio">Información de domicilio</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" placeholder="a" class="form-control" id="telefono_show" readonly>
                                                <label for="floatingInput">Teléfono</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" placeholder="a" id="direccion_show" readonly style="height: 100px;"></textarea>
                                                <label for="floatingInput">Dirección</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="row m-1" id="referencias_pedido" style="display: none;">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="card card_border">
                                <div class="card-body m-1 table-responsive">
                                    <table class="table table-striped" id="tblReferencias">
                                        <thead>
                                            <tr>
                                                <th>Referencia</th>
                                                <th>Descripción</th>
                                                <th>Laboratorio</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th style="text-align: center;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($referencias as $key => $ref)
                                            <tr>
                                                <td>{{ $ref->Referencia }}</td>
                                                <td>{{ $ref->Descripcion1 }}</td>
                                                <td>{{ $ref->Nombre }}</td>
                                                <td>${{ number_format($ref->PrecioVenta) }}</td>
                                                <td>{{ $ref->Cantidad }}</td>
                                                <td>
                                                    <div class="tdwr">
                                                        <a class="btn btn_add_ref" data-cantidad="{{$ref->Cantidad}}" data-referencia="{{$ref->Referencia}}" data-descripcion="{{$ref->Descripcion1}}" data-nombre="{{$ref->Nombre}}" data-precio="{{$ref->PrecioVenta}}">
                                                            <i class="far fa-plus-square fa-1x"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card card_border">
                                <div class="card-body m-1">
                                    <h6>Referencias de pedido</h6>
                                    <ol class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">Total: <span class="total_price">$0</span></div>
                                            </div>
                                            <span class="badge bg-primary rounded-pill count_ref">0</span>
                                        </li>
                                    </ol>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="tblReferenciasselected" style="width: 100%;">
                                            <thead class="nowrap">
                                                <tr>
                                                    <th>Descripción</th>
                                                    <th>Descuento</th>
                                                    <th>Cantidad</th>
                                                    <th>Precio</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer buttons_footer">
                <button class="btn btn-danger back_modal_order rounded-pill" style="display: none;">Volver</button>
                <button class="btn btn-success continue_modal_order rounded-pill">Continuar</button>
                <button class="btn btn-primary rounded-pill" id="final" style="display: none;">Guardar</button>
            </div>
        </div>
    </div>
</div>