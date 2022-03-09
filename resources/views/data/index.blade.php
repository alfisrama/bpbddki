@extends('layouts.master')
@section('main')
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 

<div class="row">
	<div class="col-md-12">
		
	</div>
	
	</div>
</div>

<div class="row">
	<div class="col-md-12"> 
		<!-- TABLE HOVER -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Data Pelapor</h3>
			</div>
			<div class="panel-body">
				<table class="table table-hover">

					
	@if (!empty ($data_list))
	 		<thead>

			<input id="myInput" type="text" placeholder="Search..">
			<br><br>
	 			<tr>
	 				<th>NO</th>
	 				<th>Nama Pelapor</th>
	 				<th>Alamat Pelapor</th>
	 				<th>No Hp</th>
	 				<th>Jenis Kejadian</th>
	 				<th>Tanggal Pelaporan</th>
	 				<th>Lokasi Kejadian</th>
	 				</tr>
	 		</thead>

	 		<tbody id="myTable">	 			
	 			@foreach ($data_list as $index => $data)
	 			<tr>
	 			<td>{{ $index +1 }}</td>
	 			<td>{{ $data->nama_pelapor }}</td>
	 			<td>{{ $data->alamat_pelapor }}</td>
	 			<td>{{ $data->no_hp }}</td>
	 			<td>{{ $data->jenis_kejadian }}</td>
	 			<td>{{ $data->created_at }}</td>
	 			<td>
	 				<a href="https://www.google.co.id/maps/place/{{$data->lokasi_kejadian}}" target="_blank">Lihat</a> |
	 				<a href="https://www.google.co.id/maps/dir/BPBD+Provinsi+DKI+Jakarta,+Jl.+Kyai+Haji+Zainul+Arifin+No.71,+RT.10%2FRW.10,+Petojo+Utara,+Kecamatan+Gambir,+Kota+Jakarta+Pusat,+Daerah+Khusus+Ibukota+Jakarta+10130/{{$data->lokasi_kejadian}}" target="_blank">Navigasi</a>
	 			</td>
	 			</tr>
	 			@endforeach
	 		</tbody>
	 	</table>
	 	@else 
			<p> tidak ada data pelapor. </p>
		@endif
		<div class="jumlah-data">
			<strong> Jumlah Data: {{ $jumlah_data }} </strong>
			</div>
		<div class="paging">
			{{ $data_list->links()}}
		</div>
		<!-- END TABLE HOVER -->
	</div>
</div>
<div class="row">
	<div class="col-md-6">
					
</div>
@endsection