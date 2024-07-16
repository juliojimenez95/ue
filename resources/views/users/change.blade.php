<!-- Modal -->
<div class="modal fade" id="modal_pass_prim" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Cambiar contraseña</h5>
            </div>
            <div class="modal-body">
                <div class="card m-0">
                    <div class="card-body text-center">
                        <div class="form">
                            <input type="hidden" id="id_pass" value="{{ session('session') }}">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group position-relative has-icon-left">
                                        <div class="form-floating mb-3">
                                            <span class="btn-show-pass">
                                                <i class="zmdi zmdi-eye"></i>
                                            </span>
                                            <input type="password" placeholder="A" class="form-control input-number" autocomplete="off" id="new_pass_prim">
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                            <label for="floatingInput" class="left_30">Nueva
                                                contraseña</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group position-relative has-icon-left">
                                        <div class="form-floating mb-3">
                                            <span class="btn-show-pass">
                                                <i class="zmdi zmdi-eye"></i>
                                            </span>
                                            <input type="password" placeholder="A" class="form-control input-number" autocomplete="off" id="confirm_pass">
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                            <label for="floatingInput" class="left_30">Confirmar
                                                contraseña</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btn_update_pass_new" class="btn float-end btn-success rounded-pill">Actualizar</button>
            </div>
        </div>
    </div>
</div>
