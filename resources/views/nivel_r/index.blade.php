@extends('layouts.app', ['page' => 'INICIO'])

@section('content')
<div class="loader"></div>
<div id="main-content">
    <div class="page-heading">
        <h3>Inicio</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="fas fa-calendar-day fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">RANSOM</h6>
                                        <h6 class="font-extrabold mb-0">{{ $porcentajes['NIVEL_RIESGO_1'] ?? 'N/A' }}%
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="fas fa-calendar-alt fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">PISHING</h6>
                                        <h6 class="font-extrabold mb-0">{{ $porcentajes['NIVEL_RIESGO_2'] ?? 'N/A' }}%
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red_page">
                                            <i class="fas fa-ban fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">SUPLANTACIÓN</h6>
                                        <h6 class="font-extrabold mb-0">{{ $porcentajes['NIVEL_RIESGO_3'] ?? 'N/A' }}%
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon yel_page">
                                            <i class="far fa-square fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">FUGA DE INFORMACIÓN</h6>
                                        <h6 class="font-extrabold mb-0">{{ $porcentajes['NIVEL_RIESGO_4'] ?? 'N/A' }}%
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green_page">
                                            <i class="fas fa-check-square fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">AMENAZAS INTERNAS</h6>
                                        <h6 class="font-extrabold mb-0">{{ $porcentajes['NIVEL_RIESGO_5'] ?? 'N/A' }}%
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($ultimoRegistro)
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p>ID Empresa: {{ $ultimoRegistro->ID_EMPRESA }}</p>
                                    <p>Fecha de Actualización: {{ $ultimoRegistro->FECHA_ACTUALIZACION }}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p>No hay registros en la base de datos.</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
</div>

@endsection

@push('js')
    <script>
        $('#usuarios_l').addClass('active');
        $('.loader').fadeOut("slow");
    </script>
@endpush