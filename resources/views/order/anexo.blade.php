<div class="modal fade" id="crear_anexo" tabindex="-1" aria-labelledby="crear_anexoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="crear_anexoLabel">Crear Anexo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Utiliza el valor de r.ID para el campo oculto ID_FACTURA -->
        <input type="hidden" id="id_factura_input" name="ID_FACTURA" value="">
        
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="file_upload" accept=".pdf,.docx,.xlsx,.jpg,.jpeg,.png">
          <label class="custom-file-label" for="file_upload">Seleccionar Archivo</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_upload_file">Subir</button>
      </div>
    </div>
  </div>
</div>
