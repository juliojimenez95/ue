<div class="modal fade" id="modal_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar rol</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <input type="hidden" id="edit_id">
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input disabled type="text" class="form-control input-number" id="edit_documento" maxlength="15">
                                <label for="floatingInput">Documento</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="edit_nombre" maxlength="40">
                                <label for="floatingInput">Nombre</label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <div class="form-group text-center">
                                <input type="checkbox" id="edit_status" class="check_status" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger">
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