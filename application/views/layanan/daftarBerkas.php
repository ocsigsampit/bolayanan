<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content indigo darken-4 white-text">
				<span class="card-title">Daftar Berkas</span>
				<a href="<?=site_url('layanan/tambah_berkas/');?>" class="btn-floating right halfway-fab waves-effect waves-light amber tooltipped modal-trigger" data-position="top" data-tooltip="Tambah Data"><i class="material-icons">add</i></a>
			</div>
			<div class="card-content">
				<table class="bordered highlight" id="table_berkas">
					<thead>
						<tr>
							<th class="center-align">No</th>
							<th class="center-align">Layanan</th>
							<th class="center-align">Nama Wajib Pajak</th>
							<th class="center-align">N P W P</th>
							<th class="center-align">No BPS</th>
							<th class="center-align">Tgl BPS</th>
							<th class="center-align"></th>
						</tr>
					</thead>
					<tbody>
						<?php if($datanya): ?>
						<?php $no = 0; foreach($datanya as $row): ?>
						<tr>
							<td class="center-align"><?php echo ++$no; ?></td>
							<td><?php echo $row->nm_layanan; ?></td>
							<td><?php echo $row->nm_wp; ?></td>
							<td class="center-align"><?php echo $row->npwp; ?></td>
							<td><?php echo $row->no_bps; ?></td>
							<td class="center-align"><?php echo $row->tgl_bps; ?></td>
							<td class="center-align">
							<button id-berkas=<?=$row->id;?> class="btn btn-floating halfway-fab waves-effect waves-light tooltipped red accent-4 tmb_edit" data-position="top" data-tooltip="Ubah Data"><i class="material-icons">mode_edit</i></button>
							<?php if($row->tgl_selesai == "0000-00-00" || $row->tgl_selesai == null) : ?>
							<button id="tmb_selesai_<?=$row->id;?>" id-berkas=<?=$row->id;?> class="btn btn-floating halfway-fab waves-effect waves-light tooltipped teal lighten-1 tmb_selesai" data-position="top" data-tooltip="Data Selesai"><i class="material-icons">check</i></button>
							<?php endif;?>
							</td>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal-->
<!-- Modal Structure -->
<div id="modal_ubah" class="modal">
	<div class="modal-content">
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content" id="wadah">
						<span class="card-title">Edit Data</span>
						<div class="row">
							<input type="hidden" id="flag_id_berkas" />
							<div class="input-field col s12 m3">
								<select id="select_layanan" class="komponen_edit">
									<option value="" disabled>Jenis Layanan</option>
									<?php foreach($daftarLayanan as $r) :?>
									<option value="<?=$r->id_layanan;?>"><?=$r->nm_layanan;?></option>
									<?php endforeach;?>
								</select>
							</div>
							<div class="input-field col s12 m5">
								<input id="no_bps" type="text" class="komponen_edit" />
								<label for="no_bps">No BPS</label>
							</div>
							<div class="input-field col s12 m4">
								<input id="npwp" type="text" class="komponen_edit"/>
								<label for="npwp">N P W P</label>
							</div>
							<div class="input-field col s12 m6">
								<input id="nm_wp" type="text" class="komponen_edit"/>
								<label for="nm_wp">Nama Wajib Pajak</label>
							</div>
							<div class="input-field col s12 m2">
								<input id="tgl_bps" type="text" class="datepicker komponen_edit"/>
								<label for="tgl_bps">Tgl BPS</label>
							</div>
							<div class="input-field col s12 m2">
								<input id="tgl_jt" type="text" class="datepicker komponen_edit"/>
								<label for="tgl_jt">Tgl Jatuh Tempo</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end of Modal Structure -->