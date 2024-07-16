@extends('layouts.app', ['page' => 'CLIENTES']) @section('content')
<div class="loader"></div>
<div id="main-content">
    @include('client.add')
    @include('client.edit')
    @include('client.domicilio')
    <!--CARD-->
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Clientes</h3>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <button id="btn_modal_add" class="bca btn float-end btn-success rounded-pill"> Agregar cliente</button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="tblClients" style="width: 100% !important;">
                    <thead class="nowrap">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Cliente</th>
                            <th>Tipo.D</th>
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
@include('client.script')

<script>
    $('#clientes').addClass('active');
</script>

@endpush