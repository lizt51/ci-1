<div class="row">
	<div class="col-md-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<span class="panel-title">Form Pelanggan</span>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="./simpan.php?data=pelanggan" method="POST">
				
				<div class="form-group">
					<label class="control-label col-md-3">Nama Pelanggan</label>
					<div class="col-md-4">
						<input type="text" class="form-control" name="nama_pelanggan" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3">NIK</label>
					<div class="col-md-2">
						<input type="text" class="form-control" name="nik" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3">Alamat</label>
					<div class="col-md-3">
						<input type="text" class="form-control" name="alamat" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3">Jenis Kelamin</label>
					<div class="col-md-2">
						<input type="text" class="form-control" name="jenis_kelamin" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3">Nomor HP</label>
					<div class="col-md-2">
						<input type="text" class="form-control" name="nohp" required>
					</div>
				</div>
				
				
				<div class="from-group clearfix">
					<input type="submit" class="btn btn-primary pull-right" value="Smpan">
					<input type="reset" class="btn btn-default pull-left" value="Batal">
				</div>
				
				
				</form>
			</div>
		</div>
	</div>
</div>