<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content indigo darken-4 white-text">
				<span class="card-title">Detail Data Faktur dan Penerbit</span><br/>
				<span class="card-title">Penerima Faktur/Bukti Potong : <?=$penerima;?></span>
			</div>
			<div class="card-content">
				<table class="bordered highlight">
					<thead>
						<tr>
							<th class="center-align">No</th>
							<th class="center-align">WP Penerima</th>
							<th class="center-align">NPWP Penerima</th>
							<th class="center-align">No Faktur/BuPot</th>
							<th class="center-align">Tgl Faktur/BuPot</th>
							<th class="center-align">Nilai</th>
							<th class="center-align">Keberadaan</th>
						</tr>
					</thead>
					<tbody>
						<?php if($datanya): ?>
						<?php $no = 0;	foreach($datanya as $row): ?>
						<tr>
							<td class="center-align"><?php echo ++$no; ?></td>
							<td><?php echo $row->nama_wp; ?></td>
							<td class="center-align"><?php echo $row->npwp; ?></td>
							<td><?php echo $row->no_fak_bp; ?></td>
							<td class="center-align"><?php echo $row->tgl_fak_bp; ?></td>
							<td class="right-align"><?php echo number_format($row->nilai,0,',','.'); ?></td>
							<td class="center-align">
							<?php if($row->eksistensi == '1') : ?>
							<p class="btn-floating halfway-fab waves-effect waves-light tooltipped light-blue darken-1" data-position="top" data-tooltip="Ada"><i class="material-icons">check_circle</i></p>
							</td>
							<td>
								<?php elseif($row->eksistensi == '0') : ?>
								<p class="btn-floating halfway-fab waves-effect waves-light tooltipped red accent-4" data-position="top" data-tooltip="Tidak"><i class="material-icons">cancel</i></p>
								<?php elseif($row->eksistensi == '9') : ?>
								<p class="btn-floating halfway-fab waves-effect waves-light tooltipped grey darken-1" data-position="top" data-tooltip="N/A"><i class="material-icons">mood_bad</i></p>
								<?php elseif($row->eksistensi == null) : ?>
								<div class="input-field col s12">
									<select>
										<option value="" disabled selected>Choose your option</option>
										<option value="1">ADA</option>
										<option value="0">TIDAK</option>
										<option value="9">N/A</option>
									</select>
								</div>
							</td>
							<?php endif; ?>
						</tr>
						<?php endforeach; ?>
						<?php else: ?>
						<tr>
							<td class="center-align" colspan="7">Belum ada data event</td>
						</tr>
						<?php endif; ?>
					</tbody>
				</table>
				<div class="card-content">
				<?php if($jmlDataKosong > 0) : ?>
					<a href="<?php echo site_url()."konfirmasi/buat_surat_konfirmasi/".$jenis_pajak."/".$this->uri->segment(3)."/".$this->uri->segment(4);?>" class="btn-floating halfway-fab waves-effect waves-light tooltipped red accent-4" data-position="top" data-tooltip="Unduh Surat Permintaan Konfirmasi"><i class="material-icons">file_download</i></a>
				<?php endif;?>
				<?php if($jmlDataTBO > 0) : ?>
					<a href="<?php echo site_url()."konfirmasi/buat_surat_konfirmasi_tbo/".$jenis_pajak."/".$this->uri->segment(3)."/".$this->uri->segment(4);?>" class="btn-floating halfway-fab waves-effect waves-light tooltipped grey darken-1" data-position="top" data-tooltip="Unduh Surat Permintaan Konfirmasi TBO"><i class="material-icons">file_download</i></a>
				<?php endif;?>
				</div>
			</div>
		</div>
	</div>
</div>