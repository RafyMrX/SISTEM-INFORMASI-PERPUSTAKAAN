@extends('admin.template_admin.temp')
@section('title', 'Daftar Anggota')
@section('judul_halaman', 'Informasi Anggota')

@section('isi')
@foreach($anggota as $item)
<div class="card">
<div class="table-responsive">
	<table class="table table-striped table-md">
		<tbody>
			<tr>
				<td>No.Anggota</td>
				<td>:</td>
				<td>{{$item->id_anggota}}</td>
			</tr>
			<tr>
				<td>No.Identitas</td>
				<td>:</td>
				<td>{{strtoupper($item->jenis_identitas).' : '.$item->no_identitas}}</td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td>{{$item->nama}}</td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td>{{$item->tempat_lahir.', '.$item->tgl_lahir}}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>@if($item->jekel == 'L') Laki-laki @else Perempuan @endif </td>
			</tr>
				<tr>
				<td>Status</td>
				<td>:</td>
				<td>{{ucfirst($item->status)}}</td>
			</tr>
				<tr>
				<td>Pendidikan terakhir</td>
				<td>:</td>
				<td>{{strtoupper($item->pend_terakhir)}}</td>
			</tr>
				<tr>
				<td>Pekerjaan </td>
				<td>:</td>
				<td>{{$item->pekerjaan}}</td>
			</tr>
				<tr>
				<td>Status Pernikahan</td>
				<td>:</td>
				<td>{{$item->sts_hubungan}}</td>
			</tr>
				<tr>
				<td>Provinsi</td>
				<td>:</td>
				<td>{{$item->prov}}</td>
			</tr>
			</tr>
				<tr>
				<td>Kota</td>
				<td>:</td>
				<td>{{$item->kot}}</td>
			</tr>
			</tr>
				<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{$item->alamat}}</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
@endforeach
@endsection