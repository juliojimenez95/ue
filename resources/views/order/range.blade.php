<!--ADD-->
<div class="modal fade" id="modal_ragon_fecha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modal_ragon_fecha" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_ragon_fecha">Filtrar por fechas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input id="date_init" type="date" autocomplete="off" placeholder="a"
                                    class="form-control">
                                <label for="floatingInput">Fecha de Inicio</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input id="date_end" type="date" autocomplete="off" placeholder="a"
                                    class="form-control">
                                <label for="floatingInput">Fecha Final</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_filter_range" class="btn btn-primary rounded-pill">Filtrar</button>
            </div>
        </div>
    </div>
</div>