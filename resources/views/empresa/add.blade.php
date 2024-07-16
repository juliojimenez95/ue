<div class="modal fade" id="modal_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal_add_empresa" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_add_empresa">Agregar Empresa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="tipo_id" aria-label="Tipo de Empresa">
                                    <option selected>Seleccionar Tipo de Empresa</option>
                                    <!-- Añadir opciones dinámicamente desde el controlador -->
                                    <option value="1">Tipo 1</option>
                                    <option value="2">Tipo 2</option>
                                    <option value="3">Tipo 3</option>
                                </select>
                                <label for="tipo_id">Tipo de Empresa</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Razon Social" class="form-control" id="razon_social" maxlength="100">
                                <label for="razon_social">Razón Social</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Direccion" class="form-control" id="direccion" maxlength="255">
                                <label for="direccion">Dirección</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Telefono" class="form-control" id="telefono" maxlength="20">
                                <label for="telefono">Teléfono</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="email" placeholder="Email" class="form-control" id="email" maxlength="255">
                                <label for="email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Contacto" class="form-control" id="contacto" maxlength="100">
                                <label for="contacto">Contacto</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Sector" class="form-control" id="sector" maxlength="100">
                                <label for="sector">Sector</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="number" placeholder="Numero de Empleados" class="form-control" id="num_empleados" maxlength="10">
                                <label for="num_empleados">Número de Empleados</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="activo" aria-label="Activo">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                                <label for="activo">Activo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_guardar_empresa" class="btn btn-primary rounded-pill">Guardar</button>
            </div>
        </div>
    </div>
</div>
