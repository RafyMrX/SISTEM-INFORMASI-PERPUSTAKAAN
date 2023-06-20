@extends('admin.template_admin.temp')
@section('title', 'Usulan Koleksi')
@section('judul_halaman', 'Usulan Koleksi')

@section('isi')
@foreach($usulan as $item)
	<h5>Tanggal Usulan : <span style="color: green; font-weight: bold;">{{$item->tgl_usulan}}</span></h5><br>
<div class="card">
<div class="table-responsive">
	<table class="table table-striped table-md">
		<tbody>
			<tr>
				<td colspan="3" style="background-color:#eee;"><b>IDENTITAS</b></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{$item->nama}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>{{$item->email}}</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td>{{$item->pekerjaan}}</td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td>{{$item->tlp}}</td>
			</tr>
			<tr>
				<td colspan="3" style="background-color:#eee;"><b>USULAN KOLEKSI</b></td>
			</tr>
				<tr>
				<td>Judul</td>
				<td>:</td>
				<td>{{$item->judul}}</td>
			</tr>
				<tr>
				<td>Jenis Koleksi</td>
				<td>:</td>
				<td>{{$item->jenis_koleksi}}</td>
			</tr>
				<tr>
				<td>Pengarang </td>
				<td>:</td>
				<td>{{$item->pengarang}}</td>
			</tr>
				<tr>
				<td>Penerbit</td>
				<td>:</td>
				<td>{{$item->penerbit}}</td>
			</tr>
				<tr>
				<td>ISBN</td>
				<td>:</td>
				<td>{{$item->isbn}}</td>
			</tr>
			</tr>
				<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td>{{$item->jml}}</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
@endforeach
@endsection