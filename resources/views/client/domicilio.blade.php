<div class="modal fade" id="modal_domicilio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modal_domicilio" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-xxl-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_domicilio">Domicilios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row m-2">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="card card_border">
                            <div class="card-body m-1">
                                <table class="table table-striped" id="tblDomicilios" style="width: 100% !important;">
                                    <thead class="nowrap">
                                        <tr>
                                            <th>#</th>
                                            <th>Teléfono</th>
                                            <th>Dirección</th>
                                            <th>Estado</th>
                                            <th style="width: 5.3rem !important; text-align: center;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <input type="hidden" id="id_dom">
                        <div class="card card_border">
                            <div class="card-body m-1">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <h5 id="tittle_domicilio">Agregar domicilio</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="hidden" id="telefono_update">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" placeholder="a" class="form-control input-number" id="telefono_d"
                                                maxlength="15">
                                            <label for="floatingInput">Teléfono *</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                        
                                            <select class="form-select" aria-label="Default select example" name="tipo" id="tipo">
                                                <option value="">Porfavor seleccione una Tipo..</option>
                                                <option value="CR">Carrera</option>
                                                <option value="CL">Calle</option>
                                                <option value="AV">Avenida</option>
                                                <option value="TV">Transversal</option>
                                                <option value="CI">Cicular</option>
                                                <option value="CI">Autopista</option>
                                            </select>
                                            <label for="floatingInput">Caller principal *</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                        <label for="numero" class="form-label"><strong>numero</strong></label>
                                        <input type="number" class="form-control" id="numero" name="numero" value="{{old('numero')}}"
                                            placeholder=" numero">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                        
                                        <select class="form-select" aria-label="Default select example" name="letra" id="letraSelect">
                                                <option value="">Por favor seleccione una letra...</option>
                                            </select>
                                            <label for="floatingInput">Letra</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="complemento" id="complemento">
                                                <option value="">Porfavor seleccione un complemento...</option>
                                                <option value="NORTE">Norte</option>
                                                <option value="SUR">Sur</option>
                                                <option value="ESTE">Este </option>
                                                <option value="OESTE">Oeste</option>
                                            </select>
                                            <label for="floatingInput">Complemento</label>
                                        
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                        <label for="numero" class="form-label"><strong>numero</strong></label>
                                        <input type="number" class="form-control" id="numero2" name="numero2" value="{{old('numero2')}}"
                                        placeholder=" numero">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" name="letra" id="letraSelect2">
                                                <option value="">Por favor seleccione una letra...</option>
                                            </select>
                                            <label for="floatingInput">Letra</label>
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="complemento2" name="complemento2">
                                            <option value="">Porfavor seleccione un complemento...</option>
                                            <option value="NORTE">Norte</option>
                                            <option value="SUR">Sur</option>
                                            <option value="ESTE">Este </option>
                                            <option value="OESTE">Oeste</option>
                                        </select>
                                        <label for="floatingInput">complemento</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                        <label for="numero" class="form-label"><strong>numero</strong></label>
                                        <input type="number" class="form-control" id="numero3" name="numero3" value="{{old('numero3')}}"
                                        placeholder=" numero">
                                        
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <select id="pais_d" class="form-control">
                                                <option value="">Pais</option>
                                                @foreach($paises as $p)
                                                <option value="{{ $p->ID }}">{{ $p->Pais }}</option>
                                                @endforeach
                                            </select>
                                            <label for="floatingInput">Pais *</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <select id="departamento_d" class="form-control">
                                                <option value="">Departamento</option>
                                            </select>
                                            <label for="floatingInput">Departamento *</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <select id="ciudad_d" class="form-control">
                                                <option value="">Ciudad</option>
                                            </select>
                                            <label for="floatingInput">Ciudad *</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" placeholder="a" class="form-control input-number" id="codigop_d"
                                                maxlength="10" value="0">
                                            <label for="floatingInput">Código postal *</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <select id="zona_d" class="form-control">
                                                @foreach($zonas as $z)
                                                <option value="{{ $z->ID }}">{{ $z->Nombre }}</option>
                                                @endforeach
                                            </select>
                                            <label for="floatingInput">Zona</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" placeholder="a" class="form-control uppercasec" id="domicilio_d"
                                                maxlength="50">
                                            <label for="floatingInput">Interior</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row float-right">
                                    <div class="col" id="div_btn_domicilio">
                                        <button type="button" id="btn_guardar_dom"
                                            class="btn btn-primary rounded-pill">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>