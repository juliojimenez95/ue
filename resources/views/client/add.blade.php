<!--ADD-->
<div class="modal fade" id="modal_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modal_add" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_add">Agregar cliente</h5>
                <button type="button" id="close_btn_cli" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input radio_persona_add" type="radio" name="radio_persona_add"
                                    id="radio_natural_add" value="0" checked>
                                <label class="form-check-label" for="radio_natural_add">
                                    Natural
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input radio_persona_add" type="radio" name="radio_persona_add"
                                    id="radio_juridica_add" value="1">
                                <label class="form-check-label" for="radio_juridica_add">
                                    Juridica
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <select id="tipo_documento_add" class="form-control">
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
                                        <input id="documento_add" type="text" class="form-control input-number"
                                            autocomplete="off" placeholder="a" maxlength="15">
                                        <label for="floatingInput">Documento*</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <select id="dv_add" class="form-control">
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
                                <input id="nombre_add" type="text" placeholder="a" class="form-control uppercasec"
                                    autocomplete="off" maxlength="30">
                                <label for="floatingInput">Nombre*</label>
                            </div>
                        </div>
                        <div class="col-lg-4 natural">
                            <div class="form-floating mb-3">
                                <input id="pnombre_add" type="text" placeholder="a" class="form-control uppercases"
                                    autocomplete="off" maxlength="30">
                                <label for="floatingInput">1er nombre*</label>
                            </div>
                        </div>
                        <div class="col-lg-4 natural">
                            <div class="form-floating mb-3">
                                <input id="snombre_add" type="text" placeholder="a" class="form-control uppercases"
                                    maxlength="30" autocomplete="off">
                                <label for="floatingInput">2do nombre*</label>
                            </div>
                        </div>
                        <div class="col-lg-4 natural">
                            <div class="form-floating mb-3">
                                <input id="papellido_add" type="text" placeholder="a" class="form-control uppercases"
                                    maxlength="30" autocomplete="off">
                                <label for="floatingInput">1er apellido*</label>
                            </div>
                        </div>
                        <div class="col-lg-4 natural">
                            <div class="form-floating mb-3">
                                <input id="sapellido_add" type="text" placeholder="a" class="form-control uppercases"
                                    maxlength="30" autocomplete="off">
                                <label for="floatingInput">2do apellido*</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <select id="regimen_add" class="form-control">
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
                                <input class="form-check-input" type="checkbox" value="1" id="g_contribuyente_add"
                                    name="g_contribuyente_add">
                                <label class="form-check-label" for="g_contribuyente_add">
                                    Gran contribuyente
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input id="movil_add" type="text" placeholder="a" class="form-control input-number"
                                    autocomplete="off" maxlength="15">
                                <label for="floatingInput">Movil</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-floating mb-3">
                                <select id="day_add" class="form-control">
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
                                <select id="month_add" class="form-control">
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
                                <input id="email_add" type="text" class="form-control" autocomplete="off"
                                    placeholder="a" maxlength="40">
                                <label for="floatingInput">E-Mail</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input id="contacto_add" type="text" autocomplete="off" placeholder="a"
                                    class="form-control uppercasec" maxlength="30">
                                <label for="floatingInput">Contacto</label>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="institucional_add"
                                    name="institucional_add">
                                <label class="form-check-label" for="institucional_add">
                                    Institucional
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <select id="retencion_add" class="form-control">
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
                                <input id="nombre_comercial_add" type="text" autocomplete="off" placeholder="a"
                                    class="form-control uppercasec" maxlength="50">
                                <label for="floatingInput">Nombre Comercial*</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input id="url_add" type="text" autocomplete="off" placeholder="a" class="form-control"
                                    maxlength="100">
                                <label for="floatingInput">URL</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input id="ingreso_add" type="date" autocomplete="off" placeholder="a"
                                    class="form-control">
                                <label for="floatingInput">Fecha de ingreso</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating mb-3">
                                <textarea id="obs_add" class="form-control" maxlength="200"></textarea>
                                <label for="floatingInput">Observaciones</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_guardar" class="btn btn-primary rounded-pill">Guardar</button>
            </div>
        </div>
    </div>
</div>