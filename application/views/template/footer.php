		<footer class="page-footer white">
			<div class="footer-copyright yellow">
				<div class="container center">
				</div>
			</div>
		</footer>

		<!-- Javascript -->
		<script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/materialize/js/materialize.js'); ?>"></script>
		<script src="<?php echo base_url('assets/datatables/datatables.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/kcdev.js'); ?>"></script>
		
		<!--Scripts-->
		<script>
		
		$(document).ready(function(){
			var site     = '<?php echo site_url();?>';
			
			$("#table_berkas").DataTable();
			
			$('.modal').modal();
			$('#select_layanan').material_select();
			
			/** CUMA ADA DI MENU USER
			$("#tmb_cek").click(function(){
				var no_bps    = $("#no_bps").val();
				var npwp      = $("#npwp").val();

				$.ajax({
					url     : site + "/layanan/cek_status",
					type    : "POST",
					data    : "npwp=" + npwp + "&no_bps=" + no_bps,
					success : function(hasil){
						if(hasil == "Selesai"){
							$("#hasil").html("Permohonan dengan No BPS " + no_bps + ", telah " + hasil + ".");
						}else if(hasil == "Proses"){
							$("#hasil").html("Permohonan dengan No BPS " + no_bps + ", masih dalam proses.");
						}else{
							$("#hasil").html("No BPS tidak ditemukan !.");
						}
					}
				});
			
			});
			*/
			
			/*--- Klik Edit ---*/
			$(".tmb_edit").click(function(){
				var id = $(this).attr("id-berkas");
				//alert(id);
				$.ajax({
					url: site + "/layanan/data_berkas/",
					type : "POST",
					data : "id_berkas=" + id,
					success : function(hasil){
						//console.log(hasil);
						var JSONhasil = JSON.parse(hasil);
						$("#no_bps").val(JSONhasil[0].no_bps);
						$("#npwp").val(JSONhasil[0].npwp);
						$("#nm_wp").val(JSONhasil[0].nm_wp);
						$("#tgl_bps").val(JSONhasil[0].tgl_bps);
						
						$("#modal_ubah").modal("open");
						$("#flag_id_berkas").val(id);
					}
				});
			});
			
			/*--- Klik Selesai ---*/
			$(".tmb_selesai").click(function(){
				var id = $(this).attr("id-berkas");
				
				if(confirm("Yakin?")){
					$.ajax({
						url: site + "layanan/selesaikan_berkas/",
						type : "POST",
						data : "id_berkas=" + id,
						success : function(hasil){
							if(hasil == "1"){
								alert("Berkas telah selesai !");
								$("#tmb_selesai_" + id).hide();
							}else{
								alert("Gagal!");
							}
						}
					});
				}
			});
			
			/*--- Simpan Data yang berubah ---*/
			$(".komponen_edit").change(function(){
				var id = $("#flag_id_berkas").val();
				
				if(confirm("Simpan perubahan data?")){
					$.ajax({
						url: site + "layanan/simpan_perubahan_data/",
						type : "POST",
						data : "id_berkas=" + id + "&nilai=" + $(this).val() +  "&kolom=" + $(this).attr("id"),
						success : function(hasil){
							if(hasil == "1"){
								alert("Data berhasil disimpan!");
								$(document).ajaxStop(function() { location.reload(true); });
							}else{
								alert("Gagal !!!");
							}
						}
					});
				}
			});
			
		});
		</script>
  	</body>
</html>