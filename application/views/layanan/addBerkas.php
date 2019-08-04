<div class="row">
	<?php if(validation_errors()): ?>
	<div class="col s12">
		<div class="card-panel red">
			<span class="white-text"><?php echo validation_errors('<p>', '</p>'); ?></span>
		</div>
	</div>
	<?php endif; ?>
	<?php if($message = $this->session->flashdata('message')): ?>
	<div class="col s12">
		<div class="card-panel <?php echo ($message['status']) ? 'green' : 'red'; ?>">
			<span class="white-text"><?php echo $message['message']; ?></span>
		</div>
	</div>
	<?php endif; ?>
	
	<div class="col s12">
		<div class="card">
			<div class="card-content" id="wadah">
				<span class="card-title">Tambah Data</span>
				<div class="row">
					<form method="post">
						<div class="input-field col s12 m3">
							<select id="select_layanan" name="select_layanan">
								<option value="" disabled>Jenis Layanan</option>
								<?php foreach($daftarLayanan as $r) :?>
								<option value="<?=$r->id_layanan;?>"><?=$r->nm_layanan;?></option>
								<?php endforeach;?>
							</select>
						</div>
						<div class="input-field col s12 m5">
							<input id="no_bps" name="no_bps" type="text" value="<?php echo set_value('no_bps'); ?>" maxlength="50"/>
							<label for="no_bps">No BPS</label>
						</div>
						<div class="input-field col s12 m4">
							<input id="npwp" name="npwp" type="text" value="<?php echo set_value('npwp'); ?>" maxlength="15"/>
							<label for="npwp">N P W P</label>
						</div>
						
						<div class="input-field col s12 m6">
							<input id="nm_wp" name="nm_wp" type="text" value="<?php echo set_value('nm_wp'); ?>" maxlength="100"/>
							<label for="nm_wp">Nama Wajib Pajak</label>
						</div>
						<div class="input-field col s12 m2">
							<input id="tgl_bps" name="tgl_bps" type="text" class="datepicker" value="<?php echo set_value('tgl_bps'); ?>"/>
							<label for="tgl_bps">Tgl BPS</label>
						</div>
						<div class="input-field col s12 m4">
							<button type="submit" name="submit" class="btn blue waves-effect waves-green right-align">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>