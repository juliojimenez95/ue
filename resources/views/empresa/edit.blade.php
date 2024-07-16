<div class="modal fade" id="modal_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar Empresa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <input type="hidden" id="edit_empresa_id">
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="edit_tipo_empresa" aria-label="Tipo de Empresa">
                                    <option selected>Seleccionar Tipo de Empresa</option>
                                    <!-- Añadir opciones dinámicamente desde el controlador -->
                                    <option value="1">Tipo 1</option>
                                    <option value="2">Tipo 2</option>
                                    <option value="3">Tipo 3</option>
                                </select>
                                <label for="edit_tipo_empresa">Tipo de Empresa</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Razón Social" class="form-control" id="edit_razon_social" maxlength="100">
                                <label for="edit_razon_social">Razón Social</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Dirección" class="form-control" id="edit_direccion" maxlength="255">
                                <label for="edit_direccion">Dirección</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Teléfono" class="form-control" id="edit_telefono" maxlength="20">
                                <label for="edit_telefono">Teléfono</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="email" placeholder="Email" class="form-control" id="edit_email" maxlength="255">
                                <label for="edit_email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Contacto" class="form-control" id="edit_contacto" maxlength="100">
                                <label for="edit_contacto">Contacto</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Sector" class="form-control" id="edit_sector" maxlength="100">
                                <label for="edit_sector">Sector</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="number" placeholder="Número de Empleados" class="form-control" id="edit_num_empleados" maxlength="10">
                                <label for="edit_num_empleados">Número de Empleados</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="edit_activo" aria-label="Activo">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                                <label for="edit_activo">Activo</label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <div class="form-group text-center">
                                <input type="checkbox" id="edit_status_empresa" class="check_status" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger">
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
