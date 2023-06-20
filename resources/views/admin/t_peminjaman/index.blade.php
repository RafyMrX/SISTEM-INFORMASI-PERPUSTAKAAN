@extends('admin.template_admin.temp')
@section('title', 'Peminjaman')
@section('judul_halaman', 'Peminjaman Koleksi')

@section('isi')


<div class="card">
	<div class="table-responsive">
		<div class="table-responsive">
			@if ($message = Session::get('berhasil'))
			<div class="alert alert-success" role="alert">
				{{$message}}
			</div>
			@endif

			@if ($message = Session::get('perpanjang'))
			<div class="alert alert-warning" role="alert">
				{{$message}}
			</div>
			@endif
			@if ($message = Session::get('kembali'))
			<div class="alert alert-warning" role="alert">
				{{$message}}
			</div>
			@endif
			<table id="example1" class="table table-striped table-md ">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Transaksi</th>
						<th>No Anggota</th>
						<th>Judul</th>
						<th>Jenis Koleksi </th>
						<th>Status</th>
						<th>Tgl Pinjam </th>
						<th>Tgl Kembali </th>
						<th>Action</th>
					</tr>
				</thead>
				@foreach($pinjaman as $item)
				<tbody>
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$item->id_transaksi}}</td>
						<td>{{$item->id_anggota}}</td>
						<td>{{$item->buku['judul']}}</td>

						@if($item->buku['id_kategori'] == 3)
						<td>Majalah</td>
						@elseif($item->buku['id_kategori'] == 4)
						<td>Jurnal</td>
						@else
						<td>Buku</td>
						@endif

						@if($item->status == 1)
						<td><button class="btn btn-success btn-sm btn-radius">Dipinjam</button></td>
						@elseif($item->status == 2)
						<td><button class="btn btn-danger btn-sm btn-radius">Terlambat Denda Rp.{{$item->denda}}</button></td>
						@elseif($item->status == 3)
						<td><button class="btn btn-primary btn-sm btn-radius">Dikembalikan</button></td>
						@endif


						<td>{{$item->tgl_pinjam}}</td>
						<td>{{$item->tgl_kembali}}</td>
						<td class="text-center">
							<a href="{{url('/kembali/'.$item->id_transaksi)}}" class="btn btn-success @if($item->status == 3) disabled @endif">Pengembalian</a> 
							<a href="{{url('/perpanjangan/'.$item->id_transaksi)}}" class="btn btn-primary @if($item->status == 3) disabled @elseif($item->status == 2) disabled @endif">Perpanjangan</a> 
							
							<a href="#" data-id='{{$item->id_transaksi}}' class="btn btn-danger confirm"> Hapus</a>
							<form action="/pinjaman/{{$item->id_transaksi}}" id="delete{{$item->id_transaksi}}" method="POST">
								@method('delete')
								@csrf
							</form>
						</td>
					</tr>
				</tbody>
				@endforeach

			</table>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(".confirm").on('click',function(e){
		id = e.target.dataset.id;
		swal({
			title : 'Hayooo Yakin ?',
			text : 'Data akan dihapus permanen!',
			icon : 'warning',
			buttons : true,
			dangerMode : true,
		})
		.then((willDelete)=>{
			if(willDelete){
				$(`#delete${id}`).submit();
			}else{
				
			}
		});
	});

		// DATA TABLES
		$(function() {
			$("#example1").DataTable({
				"responsive": true,
				"autoWidth": false,
			});
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": true,
				"responsive": true,
			});
		});
	</script>
	@endsection