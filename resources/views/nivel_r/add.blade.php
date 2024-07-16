<div class="modal fade" id="modal_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal_add" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_add">Agregar Nivel de Riesgo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form id="form_nivel_riesgo">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="ID de la Empresa" class="form-control" id="ID_EMPRESA" name="ID_EMPRESA" maxlength="15">
                                    <label for="ID_EMPRESA">ID de la Empresa</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="Nivel de Riesgo 1" class="form-control" id="NIVEL_RIESGO_1" name="NIVEL_RIESGO_1" maxlength="40">
                                    <label for="NIVEL_RIESGO_1">Nivel de Riesgo 1</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="Nivel de Riesgo 2" class="form-control" id="NIVEL_RIESGO_2" name="NIVEL_RIESGO_2" maxlength="40">
                                    <label for="NIVEL_RIESGO_2">Nivel de Riesgo 2</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="Nivel de Riesgo 3" class="form-control" id="NIVEL_RIESGO_3" name="NIVEL_RIESGO_3" maxlength="40">
                                    <label for="NIVEL_RIESGO_3">Nivel de Riesgo 3</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="Nivel de Riesgo 4" class="form-control" id="NIVEL_RIESGO_4" name="NIVEL_RIESGO_4" maxlength="40">
                                    <label for="NIVEL_RIESGO_4">Nivel de Riesgo 4</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="Nivel de Riesgo 5" class="form-control" id="NIVEL_RIESGO_5" name="NIVEL_RIESGO_5" maxlength="40">
                                    <label for="NIVEL_RIESGO_5">Nivel de Riesgo 5</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="date" placeholder="Fecha de Actualización" class="form-control" id="FECHA_ACTUALIZACION" name="FECHA_ACTUALIZACION">
                                    <label for="FECHA_ACTUALIZACION">Fecha de Actualización</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_guardar" class="btn btn-primary rounded-pill">Guardar</button>
            </div>
        </div>
    </div>
</div>
