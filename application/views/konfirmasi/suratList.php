<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content indigo darken-4 white-text">
				<span class="card-title">Daftar Surat</span>
				<a href="<?php echo base_url('konfirmasi/add'); ?>" class="btn-floating right halfway-fab waves-effect waves-light amber tooltipped" data-position="top" data-tooltip="Tambah Data"><i class="material-icons">add</i></a>
			</div>
			<div class="card-content">
				<?php if($message = $this->session->flashdata('message')): ?>
				<div class="col s12">
					<div class="card-panel <?php echo ($message['status']) ? 'green' : 'red'; ?>">
						<span class="white-text"><?php echo $message['message']; ?></span>
					</div>
				</div>
				<?php endif; ?>
				<table class="bordered highlight">
					<thead>
						<tr>
							<th class="center-align">No</th>
							<th class="center-align">Asal Surat</th>
							<th class="center-align">No Surat</th>
							<th class="center-align">Tgl Surat</th>
							<th class="center-align">Tgl Terima</th>
							<th class="center-align">Nama Wajib Pajak</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php if($datanya): ?>
						<?php $no = $this->uri->segment(3); foreach($datanya as $row): ?>
						<tr>
							<td class="center-align"><?php echo ++$no; ?></td>
							<td><?php echo $row->asal_surat; ?></td>
							<td><?php echo $row->no_surat; ?></td>
							<td class="center-align"><?php echo $row->tgl_surat; ?></td>
							<td class="center-align"><?php echo $row->tgl_terima; ?></td>
							<td><?php echo $row->nm_wp_surat; ?></td>
							<td class="center-align">
								<a href="<?php echo base_url('konfirmasi/daftar_wp/' . $row->id); ?>" class="btn-floating halfway-fab waves-effect waves-light tooltipped light-blue darken-1" data-position="top" data-tooltip="Daftar WP"><i class="material-icons">format_list_numbered</i></a>
								<?php if($row->selesai == null) : ?>
								<a href="<?php echo base_url('konfirmasi/balasSurat/'.$row->id); ?>" class="btn-floating halfway-fab waves-effect waves-light tooltipped amber darken-4" data-position="top" data-tooltip="Balas surat"><i class="material-icons">create</i></a>
							<?php endif; ?>
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
				<div class="center-align">
					<?php echo $this->pagination->create_links(); ?>
				</div>
			</div>
		</div>
	</div>
</div>