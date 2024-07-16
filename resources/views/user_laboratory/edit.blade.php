<div class="modal fade" id="modal_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modal_edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_edit">Editar asignación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <input type="hidden" id="usuario_edit">
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input id="nombre_usuario" disabled type="text" autocomplete="off" placeholder="a"
                                    class="form-control">
                                <label for="floatingInput">Usuario</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped" id="tblLaboratorios_edit" style="width: 100% !important;">
                                <thead class="nowrap">
                                    <tr>
                                        <th class="text-center">
                                            <button style="background: transparent; font-size: 13.5px;" id="btn_check_lab_edit">
                                                <i class="far fa-square"></i>  
                                                </button>
                                        </th>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
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