@extends('layouts.app', ['page' => 'PEDIDOS']) @section('content')
<div class="loader"></div>
<div id="main-content">
    @include('order.add')
    @include('order.anexo')
    @include('order.range')
    <!--CARD-->

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pedidos</h3>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <button id="btn_modal_add_p" class="btn float-end btn-success rounded-pill bca"> Agregar pedido</button>
                <button id="btn_rango_fecha" class="btn float-end btn-success rounded-pill bca me-2"> Filtrar por fechas</button>
                <button id="btn_show_all" class="btn float-end btn-success rounded-pill me-2 bca" style="display: none;">Mostrar todos</button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="tblPedidos" style="width: 100% !important;">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>Nro. Pedido</th>
                            <th>Total</th>
                            <th>Cliente</th>
                            <th>Fecha pedido</th>
                            <th>Fecha vencimiento</th>
                            <th>Teléfono</th>
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
@include('order.script')
<script>
    $('#pedidos').addClass('active');
</script>
@endpush