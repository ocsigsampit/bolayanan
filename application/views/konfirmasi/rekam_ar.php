<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content teal darken-4 white-text">
				<span class="card-title"><?php echo $pageTitle; ?></span>
			</div>
			<div class="card-content">
				<div class="row">
					<div class="input-field col s12 m6">
						<input id="npwp" type="text" value="<?=$npwp;?>" readonly/>
						<label for="npwp" class="">NPWP Penerbit</label>
					</div>
					<div class="input-field col s12 m6">
						<input id="alamat1" name="alamat1" type="text"/>
						<label for="alamat1" class="">Alamat</label>
					</div>
					<div class="input-field col s12 m3">
						<input id="alamat2" name="alamat2" type="text"/>
						<label for="alamat2" class="">Alamat2</label>
					</div>
					<div class="input-field col s12 m3">
						<input id="alamat3" name="alamat3" type="text"/>
						<label for="alamat3" class="">Alamat3</label>
					</div>
					<div class="input-field col s12 m6">
						<input id="nama_ar" name="nama_ar" type="text"/>
						<label for="nama_ar" class="">Nama Account Representative</label>
					</div>
					<div class="input-field col s12 right-align">
						<button id="tmb_simpan_ar" class="btn waves-effect teal darken-4 white-text">Simpan</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>