<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content teal darken-4 white-text">
				<span class="card-title"><?php echo $pageTitle; ?></span>
			</div>

			<!-- Tab Navigation-->
			<ul class="tabs">
				<li class="tab col s3"><a class="active" href="#tab_induk">Data Surat Permintaan</a></li>
				<li class="tab col s3 disabled" id="li_detail"><a href="#tab_detail">Detail Data</a></li>
			</ul>
			
			<!--tab pertama-->
			<div id="tab_induk" class="col s12">
				<div class="card-content">
					<div class="row">
						<div class="input-field col s12 m4">
							<select>
								<option value="" disabled>Jenis Konfirmasi</option>
								<option value="1" selected>PPN (Faktur Keluaran)</option>
								<option value="2">PPH (Bukti Potong)</option>
							</select>
						</div>
						</form>
						<div class="input-field col s12 m8">
							<input id="asal" type="text" class="autocomplete"/>
							<label for="asal">Kantor Asal Surat</label>
							<div id="papan_hasil"></div>
						</div>
						<div class="input-field col s12 m12">
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
						<div class="input-field col s12 m4">
							<input id="no_surat" name="no_surat" type="text"/>
							<label for="no_surat">No Surat</label>
						</div>
						<div class="input-field col s12 m2">
							<input id="tgl_surat" name="tgl_surat" type="text" class="datepicker"/>
							<label for="tgl_surat">Tanggal Surat</label>
						</div>
						<div class="input-field col s12 m6">
							<input id="perihal" name="perihal" type="text"/>
							<label for="perihal">Perihal</label>
						</div>
						<div class="input-field col s12 m2">
							<input id="tgl_terima" name="tgl_terima" type="text" class="datepicker"/>
							<label for="tgl_terima">Tanggal Terima</label>
						</div>
					</div>
						
					<div class="row">
						<div class="input-field col s12 m6">
							<input id="nama_wp_penerima" name="nnama_wp_penerima" type="text"/>
							<label for="nama_wp_penerima">Nama Wajib Pajak Penerima</label>
						</div>
						<div class="input-field col s12 m6">
							<input id="npwp_penerima" name="npwp_penerima" type="text"/>
							<label for="npwp_penerima">NPWP Penerima</label>
						</div>
						<div class="input-field col s12 m2">
							<input id="masa_pajak" name="masa_pajak" type="text"/>
							<label for="masa_pajak">Masa Pajak</label>
						</div>
					</div>
					
					<div class="row">
						<div class="input-field col s12 right-align">
							<a href="#" class="btn-floating halfway-fab waves-effect waves-light tooltipped blue accent-4" data-position="center" data-tooltip="Rekam Detail Data" id="lanjut" data-tab="tab_detail"><i class="material-icons">arrow_forward</i></a>
						</div>
					</div>
				</div>
			</div><!--end of tab pertama-->
			
			<!--tab kedua-->
			<div id="tab_detail" class="col s12">
				<div class="row">
					<div class="col s12">
						<div class="card">
							<div class="card-content" id="wadah">
								<div class="row">
									<div class="input-field col s12 m3">
										<input id="nama_wp_penerbit" type="text" />
										<label for="nama_wp_penerbit">Nama WP Penerbit</label>
									</div>
									<div class="input-field col s12 m2">
										<input id="npwp_penerbit" type="text" />
										<label for="npwp_penerbit">NPWP Penerbit</label>
									</div>
									<div class="input-field col s12 m2">
										<input id="no_fbp" type="text" />
										<label for="no_fbp">No Faktur/BP</label>
									</div>
									<div class="input-field col s12 m2">
										<input id="tgl_fbp" type="text" />
										<label for="tgl_fbp">Tgl Faktur/BP</label>
									</div>
									<div class="input-field col s12 m2">
										<input id="nilai" type="text" />
										<label for="nilai">Nilai</label>
									</div>
									<a href="#" class="btn-floating halfway-fab waves-effect waves-light tooltipped blue accent-4" data-position="center" data-tooltip="Tambah Baris" id="tambah_baris"><i class="material-icons">add_circle</i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Tombol Simpan-->
				<div class="input-field col s12 right-align">
					<a href="#" class="btn-floating halfway-fab waves-effect waves-light tooltipped blue accent-4" data-position="center" data-tooltip="Simpan Data" id="tmb_simpan_add" data-tab="tab_detail"><i class="material-icons">save</i></a>
				</div>
			</div>
			<!-- end of Tab Kedua--->
		</div>
	</div>
</div>