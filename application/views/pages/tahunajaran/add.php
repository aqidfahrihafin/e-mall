
	<!-- add modal -->
    <div class="modal fade tahunajaran" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Add Tahun Akademik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
					<form action="<?php echo site_url('tahunajaran/simpan'); ?>" method="post">
						<div class="form-group">
							<label for="tahun">Tahun Akademik</label>
							<input type="text" class="form-control" id="tahun" name="nama_tahun_ajaran">
						</div>
						<div class="form-group">
							<label class="control-label">Status</label>
							<select class="form-control" name="status_tahun_ajaran">
								<option value="aktif">Aktif</option>
								<option value="non-aktif">Non Aktif</option>
							</select>
						</div>
						<hr>
						<div align="right">
							<button type="submit" class="btn btn-primary btn-sm w-md">Submit</button>
						</div>
					</form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
