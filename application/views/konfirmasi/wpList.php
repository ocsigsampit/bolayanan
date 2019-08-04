<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content indigo darken-4 white-text">
				<span class="card-title">Daftar Wajib Pajak Penerbit</span>
			</div>
			<div class="card-content">
				<table class="bordered highlight">
					<thead>
						<tr>
							<th class="center-align">No</th>
							<th class="center-align">Nama Wajib Pajak</th>
							<th class="center-align">NPWP</th>
							<th class="center-align">Account Representative</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php if($datanya): ?>
						<?php $no = 0; foreach($datanya as $row): ?>
						<tr>
							<td class="center-align"><?php echo ++$no; ?></td>
							<td><?php echo $row->nama_wp; ?></td>
							<td><?php echo $row->npwp; ?></td>
							<td><?php echo $row->ar; ?></td>
							<td class="center-align">
							<?php if($row->ar == null) : ?>
							<a href="<?php echo base_url('konfirmasi/rekam_ar/'.$row->npwp.'/'); ?>" class="btn-floating halfway-fab waves-effect waves-light tooltipped red darken-4" data-position="top" data-tooltip="Rekam AR"><i class="material-icons">face</i></a>
							<?php else :?>
							<a href="<?php echo base_url('konfirmasi/detail/'.$row->id.'/'.$row->npwp.'/'); ?>" class="btn-floating halfway-fab waves-effect waves-light tooltipped light-blue darken-1" data-position="top" data-tooltip="Detail Data"><i class="material-icons">zoom_in</i></a>
							<?php endif;?>
							</td>
						</tr>
						<?php endforeach; ?>
						<?php else: ?>
						<tr>
							<td class="center-align" colspan="7">Belum ada data event</td>
						</tr>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>