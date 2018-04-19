
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<span class="panel-title">Daftar Pelanggan</span>
				<a href="index.php?halaman=mobil&subhalaman=form-mobil" class="btn btn-success pull-right">Tambah</a>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>No Hp</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i=0;
						foreach($id as $row){
							$i++;
							echo '
							<tr>
							<td>'.$i.'</td>
							<td>'.$row['nama'].'</td>
							<td>'.$row['alamat'].'</td>
							<td>'.$row['no_tlp'].'</td>

							<td>
								<a href="#" class="btn btn-success btn-xs">Ubah</a>
								<a href="#" class="btn btn-danger btn-xs">Hapus</a>
							</td>
							</tr>
							';
						}
					?>
					</tbody>
				</table>
			</div>
			<div class="panel-footer">

			</div>
		</div>
	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<script>
		function confirmHapus(id){
			var yakin = confirm("Anda yakin menghapus mobil dengan id"+id);

			if(yakin){
				window.location="./hapus.php?data=mobil&id="+id;
			}
		}
</script>
