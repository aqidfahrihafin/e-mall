
	<!-- add modal -->
    <div class="modal fade persentase" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Add Persentase</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
					<form action="<?php echo site_url('persentase/simpan'); ?>" method="post">
						<div class="form-group">
							<label for="jabatan_santri">Tingkatan Santri</label>
							<input type="text" class="form-control" id="jabatan_santri" name="jabatan_santri">
						</div>
						<div class="form-group">
							<label for="pembayaran">Pembayaran</label>
							<input type="number" class="form-control" id="pembayaran" name="pembayaran" min="0" max="100" oninput="validity.valid||(value='');">
						</div>
						<div class="form-group">
							<label for="deskripsi">Keterangan</label>
							<input type="text" class="form-control" id="deskripsi" name="deskripsi">
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
