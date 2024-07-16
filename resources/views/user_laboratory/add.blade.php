<div class="modal fade" id="modal_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modal_add" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_add">Asignar laboratorios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <select id="user_add" class="form-control">
                                    <option value="">Seleccione un usuario</option>
                                    @foreach($users as $u)
                                    <option value="{{ $u->ID }}">{{ $u->NOMBRE }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingInput">Usuario *</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped" id="tblLaboratorios_add" style="width: 100% !important;">
                                <thead class="nowrap">
                                    <tr>
                                        <th class="text-center">
                                            <button style="background: transparent; font-size: 13.5px;" id="btn_check_lab">
                                                <i class="far fa-square"></i>  
                                                </button>
                                        </th>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($laboratorios as $l)
                                    <tr>
                                        <td></td>
                                        <td>{{ $l->ID }}</td>
                                        <td>{{ $l->Nombre }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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