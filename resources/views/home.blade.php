@extends('layouts.master')

@section('main')

<head>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<style type="text/css">
 #mapid { height: 90vh; } 
</style>
</head>

<div class="row">
	<div class="col-md-12">
		
	</div>
	
	</div>
</div>



			<!-- MAIN CONTENT -->
		
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-20">

							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Pemetaan</h3>
									<p class="panel-subtitle">Riwayat laporan</p>
								</div>
								<div class="panel-body">
								<body>
								
								 <div id="mapid"></div>
								<script type="text/javascript">
									var mymap = L.map('mapid').setView([-6.2052751,106.8260585],12);

									L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
									    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
									    maxZoom: 18,
									    id: 'mapbox/streets-v11',
									    tileSize: 512,
									    zoomOffset: -1,
									    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
									}).addTo(mymap);
									
									<?php 
										foreach ($data_list as $key) {
									?>
											L.marker([<?= $key->lokasi_kejadian ?>]).addTo(mymap).
											bindPopup("<?=$key->nama_pelapor?><br><?=$key->jenis_kejadian?><br><a href='https://www.google.co.id/maps/dir/BPBD+Provinsi+DKI+Jakarta,+Jl.+Kyai+Haji+Zainul+Arifin+No.71,+RT.10%2FRW.10,+Petojo+Utara,+Kecamatan+Gambir,+Kota+Jakarta+Pusat,+Daerah+Khusus+Ibukota+Jakarta+10130/<?=$key->lokasi_kejadian?>' target='_blank'>Navigasi Lokasi</a>");
									<?php	
										}
									?>
									
								</script>
								</div>
								</body>

								<!-- Make sure you put this AFTER Leaflet's CSS -->
								 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
								   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
								   crossorigin=""></script>	

								<script src="public/js/leaflet.ajax.js"></script>	   	
							</div>
							<!-- END PANEL HEADLINE -->
						</div>
						<div class="col-md-4">
							<!-- PANEL NO PADDING -->




@endsection
