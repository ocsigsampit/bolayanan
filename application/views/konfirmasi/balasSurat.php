<style>
#unduh_surat{
	display:none;
}
</style>


<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content teal darken-4 white-text">
				<span class="card-title"><?php echo $pageTitle; ?></span>
			</div>
			<div class="card-content">
				<div class="row">			
					<?php foreach($dataSurat as $row): ?>
					<div class="input-field col s12 m6">
						<input type="hidden" id="id_surat" value="<?=$row->id;?>"/>
						<input id="asal" name="asal" type="text" value="<?=$row->asal_surat;?>" readonly/>
						<label for="asal">Asal Surat</label>
					</div>
					<div class="input-field col s12 m6">
						<input id="no_surat" name="no_surat" type="text" value="<?=$row->no_surat;?>" readonly/>
						<label for="no_surat">No Surat</label>
					</div>
					<?php endforeach; ?>
					
					<div class="input-field col s12 m4">
						<select id="pejabat">
							<option value="" disabled>Pejabat</option>
							<option value="Kepala" selected>Kepala Kantor</option>
							<option value="Plh. Kepala">Plh. Kepala Kantor</option>
						</select>
					</div>
					<div class="input-field col s12 m4">
						<input id="nama_pejabat" name="nama_pejabat" type="text" value="Eko Budi Setyono"/>
						<label for="nama_pejabat" class="">Nama Pejabat</label>
					</div>
					
					<div class="input-field col s12 right-align">
						<button value="add_event" id="tmb_simpan_surat" class="btn waves-effect teal darken-4 white-text">Simpan</button>
					</div>
				</div>
			</div>
			
			<div class="card-content" id="unduh_surat">
				<div class="row">
					<div class="input-field col s12 right-align">
						<a href="<?php echo base_url('konfirmasi/download_surat_balasan/'.$row->id); ?>" class="btn-floating halfway-fab waves-effect waves-light tooltipped light-blue darken-1" data-position="top" data-tooltip="Unduh Surat Balasan"><i class="material-icons">file_download</i></a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>