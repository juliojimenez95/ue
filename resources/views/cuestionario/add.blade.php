<div class="modal fade" id="modal_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modal_add" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_add">Agregar Cuestionario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form id="form_cuestionario"  >
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="FECHA" name="FECHA">
                                    <label for="FECHA">Fecha</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="ID de Usuario" class="form-control" id="ID_USUARIO"
                                        name="ID_USUARIO" maxlength="15">
                                    <label for="ID_USUARIO">ID de Usuario</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="ID de la Empresa" class="form-control"
                                        id="ID_EMPRESA" name="ID_EMPRESA" maxlength="15">
                                    <label for="ID_EMPRESA">ID de la Empresa</label>
                                </div>
                            </div>
                        </div>

                        <!-- Campos para RESP_1 y EVIDENCIA_1 -->
                        <div class="row">
                            <div class="col-12">
                                <label>1.¿Ha realizado alguna capacitación en seguridad informática con el personal clave
                                    de la organización en los últimos 6 meses?</label>
                                <div class="form-floating mb-3">
                                    <select class="form-control" id="RESP_1" name="RESP_1">
                                        <option value="1">Sí</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="file" class="form-control" id="EVIDENCIA_1" name="EVIDENCIA_1">
                                </div>
                            </div>
                        </div>


                <!-- Campos para RESP_2 y EVIDENCIA_2 -->
                <div class="row">
                    <div class="col-12">
                        <label>2.¿Cuenta su organización con un plan de recuperación de desastres?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_2" name="RESP_2">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_2" name="EVIDENCIA_1">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_3 y EVIDENCIA_3 -->
                <div class="row">
                    <div class="col-12">
                        <label>3.¿Cuenta su organización con un plan de copias de seguridad?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_3" name="RESP_3">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_3" name="EVIDENCIA_3">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_4 y EVIDENCIA_4 -->
                <div class="row">
                    <div class="col-12">
                        <label>4.¿Cuenta su organización con un plan de recuperación de desastres?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_4" name="RESP_4">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_4" name="EVIDENCIA_4">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_5 y EVIDENCIA_5 -->
                <div class="row">
                    <div class="col-12">
                        <label>5.¿Ha realizado un simulacro del proceso de recuperación de desastres en los últimos 6 meses?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_5" name="RESP_5">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_5" name="EVIDENCIA_5">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_6 y EVIDENCIA_6 -->
                <div class="row">
                    <div class="col-12">
                        <label>6.¿Cuenta su organización con inventario de activos de información?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_6" name="RESP_6">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_6" name="EVIDENCIA_6">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_7 y EVIDENCIA_7 -->
                <div class="row">
                    <div class="col-12">
                        <label>7.¿El inventario de activos de información ha sido actualizado los últimos 6 meses?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_7" name="RESP_7">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_7" name="EVIDENCIA_7">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_8 y EVIDENCIA_8 -->
                <div class="row">
                    <div class="col-12">
                        <label>8.¿La organización ha realizado alguna vez un analisis de riesgos de seguridad?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_8" name="RESP_8">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_8" name="EVIDENCIA_8">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_9 y EVIDENCIA_9 -->
                <div class="row">
                    <div class="col-12">
                        <label>9.¿La organización ha realizado un analisis de riesgo en el último año?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_9" name="RESP_9">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_9" name="EVIDENCIA_9">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_10 y EVIDENCIA_10 -->
                <div class="row">
                    <div class="col-12">
                        <label>10.¿La organización cuenta con software debidamente licenciado?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_10" name="RESP_10">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_10" name="EVIDENCIA_10">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_11 y EVIDENCIA_11 -->
                <div class="row">
                    <div class="col-12">
                        <label>11.¿Cuenta su organización con un inventario licencias?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_11" name="RESP_11">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_11" name="EVIDENCIA_11">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_12 y EVIDENCIA_12 -->
                <div class="row">
                    <div class="col-12">
                        <label>12.¿El inventario de licencias ha sido actualizado en los últimos 6 meses?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_12" name="RESP_12">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_12" name="EVIDENCIA_12">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_13 y EVIDENCIA_13 -->
                <div class="row">
                    <div class="col-12">
                        <label>13.¿Cuenta la empresa con sistemas operativos y software actualizados y que cuenten con soporte vigente?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_13" name="RESP_13">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_13" name="EVIDENCIA_13">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_14 y EVIDENCIA_14 -->
                <div class="row">
                    <div class="col-12">
                        <label>14.¿Cuenta la empresa con un responsable del área de TI?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_14" name="RESP_14">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_14" name="EVIDENCIA_14">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_15 y EVIDENCIA_15 -->
                <div class="row">
                    <div class="col-12">
                        <label>15.¿El responsable del área de TI cuenta con vinculación formal con la compañía?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_15" name="RESP_15">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_15" name="EVIDENCIA_15">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_16 y EVIDENCIA_16 -->
                <div class="row">
                    <div class="col-12">
                        <label>16.¿El responsable del área de TI cuenta con formación acreditada en seguridad de la información?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_16" name="RESP_16">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_16" name="EVIDENCIA_16">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_17 y EVIDENCIA_17 -->
                <div class="row">
                    <div class="col-12">
                        <label>17.¿Su empresa es responsable de tratamiento de datos personales?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_17" name="RESP_17">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_17" name="EVIDENCIA_17">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_18 y EVIDENCIA_18 -->
                <div la="row">
                    <div class="col-12">
                        <label>18.¿Ha sufrido la empresa algún indidente de seguridad en el último año?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_18" name="RESP_18">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_18" name="EVIDENCIA_18">
                        </div>
                    </div>
                </div>

                <!-- Campos para RESP_19 y EVIDENCIA_19 -->
                <div class="row">
                    <div class="col-12">
                        <label>19.¿Cuenta la empresa con un registro de incidentes de seguridad?</label>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="RESP_19" name="RESP_19">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="EVIDENCIA_19" name="EVIDENCIA_19">
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