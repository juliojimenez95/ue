<div class="modal fade" id="modal_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modal_add" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_add">Agregar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- Agrega un formulario para enviar los datos -->
                    <form id="register-user-form">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="a" class="form-control input-number" id="documento"
                                        maxlength="15">
                                    <label for="floatingInput">Documento</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="a" class="form-control input-number" id="empresa" maxlength="15" name="DOCUMENTO">
                                    <label for="floatingInput">empresa</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="a" class="form-control" id="nombre" maxlength="40" name="NOMBRES">
                                    <label for="floatingInput">Nombres</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="a" class="form-control" id="apellidos" maxlength="15" name="APELLIDOS">
                                    <label for="floatingInput">Apellidos</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="a" class="form-control" id="usuario" maxlength="20" name="USUARIO">
                                    <label for="floatingInput">Usuario</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <select id="rol_add" class="form-control" name="ID_ROL">
                                        <option value="">Seleccione un perfil</option>
                                        <option value="1">perfil 1</option>
                                        <option value="2">perfil 2</option>
                                    </select>
                                    <label for="floatingInput">Perfil</label>
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