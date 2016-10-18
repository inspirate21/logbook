
<!-- Modal Dialog -->
<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete Parmanently</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure about this ?</p><?php echo $a;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><span id="IL_AD10" class="IL_AD">Cancel</span></button>
        <button type="button" class="btn btn-danger" id="confirm" ><a href="hapus-laporan.php?id=<?php echo $a?>">Hapus</a></button>
      </div>
    </div>
  </div>
</div>