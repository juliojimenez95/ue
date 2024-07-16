<!--ADD-->
<div class="modal fade" id="modal_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modal_edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_edit">Editar cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <input type="hidden" id="id_edit">
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input radio_persona_edit" type="radio" name="radio_persona_edit"
                                    id="radio_natural_edit" value="0" checked>
                                <label class="form-check-label" for="radio_natural_edit">
                                    Natural
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input radio_persona_edit" type="radio" name="radio_persona_edit"
                                    id="radio_juridica_edit" value="1">
                                <label class="form-check-label" for="radio_juridica_edit">
                                    Juridica
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <select id="tipo_documento_edit" class="form-control">
                                    <option value="">Seleccione un tipo</option>
                                    <option value="CC">CC</option>
                                    <option value="NIT">NIT</option>
                                    <option value="CE">CE</option>
                                </select>
                                <label for="floatingInput">Tipo de documento*</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input id="documento_edit" type="text" class="form-control input-number"
                                            autocomplete="off" placeholder="a" maxlength="15">
                                        <label for="floatingInput">Documento*</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <select id="dv_edit" class="form-control">
                                            <option value="">DV</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                        <label for="floatingInput">DV</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 juridica">
                            <div class="form-floating mb-3">
                                <input id="nombre_edit" type="text" placeholder="a" class="form-control uppercasec"
                                    autocomplete="off" maxlength="30">
                                <label for="floatingInput">Nombre*</label>
                            </div>
                        </div>
                        <div class="col-lg-4 natural">
                            <div class="form-floating mb-3">
                                <input id="pnombre_edit" type="text" placeholder="a" class="form-control uppercases"
                                    autocomplete="off" maxlength="30">
                                <label for="floatingInput">1er nombre*</label>
                            </div>
                        </div>
                        <div class="col-lg-4 natural">
                            <div class="form-floating mb-3">
                                <input id="snombre_edit" type="text" placeholder="a" class="form-control uppercases"
                                    maxlength="30" autocomplete="off">
                                <label for="floatingInput">2do nombre*</label>
                            </div>
                        </div>
                        <div class="col-lg-4 natural">
                            <div class="form-floating mb-3">
                                <input id="papellido_edit" type="text" placeholder="a" class="form-control uppercases"
                                    maxlength="30" autocomplete="off">
                                <label for="floatingInput">1er apellido*</label>
                            </div>
                        </div>
                        <div class="col-lg-4 natural">
                            <div class="form-floating mb-3">
                                <input id="sapellido_edit" type="text" placeholder="a" class="form-control uppercases"
                                    maxlength="30" autocomplete="off">
                                <label for="floatingInput">2do apellido*</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <select id="regimen_edit" class="form-control">
                                    <option value="">Seleccione un regimen</option>
                                    <option value="Común">Común</option>
                                    <option value="Simplificado">Simplificado</option>
                                    <option value="N/D">N/D</option>
                                </select>
                                <label for="floatingInput">Regimen</label>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="g_contribuyente_edit"
                                    name="g_contribuyente_edit">
                                <label class="form-check-label" for="g_contribuyente_edit">
                                    Gran contribuyente
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input id="movil_edit" type="text" placeholder="a" class="form-control input-number"
                                    autocomplete="off" maxlength="15">
                                <label for="floatingInput">Movil</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-floating mb-3">
                                <select id="day_edit" class="form-control">
                                    <option value="">Día</option>
                                    @for($i = 1; $i <= 31; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <label for="floatingInput">Dia</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-floating mb-3">
                                <select id="month_edit" class="form-control">
                                    <option value="">Mes</option>
                                    @for($i = 1; $i <= 12; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <label for="floatingInput">Mes</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input id="email_edit" type="text" class="form-control" autocomplete="off"
                                    placeholder="a" maxlength="40">
                                <label for="floatingInput">E-Mail</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input id="contacto_edit" type="text" autocomplete="off" placeholder="a"
                                    class="form-control uppercasec" maxlength="30">
                                <label for="floatingInput">Contacto</label>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="institucional_edit"
                                    name="institucional_edit">
                                <label class="form-check-label" for="institucional_edit">
                                    Institucional
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <select id="retencion_edit" class="form-control">
                                    <option value="">Seleccione un modo</option>
                                    <option value="Base">Base</option>
                                    <option value="Simplificado">Simplificado</option>
                                    <option value="N/D">N/D</option>
                                </select>
                                <label for="floatingInput">Modo retención</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input id="nombre_comercial_edit" type="text" autocomplete="off" placeholder="a"
                                    class="form-control uppercasec" maxlength="50">
                                <label for="floatingInput">Nombre Comercial*</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input id="url_edit" type="text" autocomplete="off" placeholder="a" class="form-control"
                                    maxlength="100">
                                <label for="floatingInput">URL</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input id="ingreso_edit" type="date" autocomplete="off" placeholder="a"
                                    class="form-control" disabled>
                                <label for="floatingInput">Fecha de ingreso</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating mb-3">
                                <textarea id="obs_edit" class="form-control" maxlength="200"></textarea>
                                <label for="floatingInput">Observaciones</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group text-center">
                                <input type="checkbox" id="estado_edit" class="check_status" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_update" class="btn btn-primary rounded-pill">Guardar</button>
            </div>
        </div>
    </div>
</div>