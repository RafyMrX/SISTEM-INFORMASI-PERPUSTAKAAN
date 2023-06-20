@extends('admin.template_admin.temp')
@section('title', 'Katalog Buku')
@section('judul_halaman', 'Katalog Buku')

@section('isi')

@if ($message = Session::get('berhasil'))
<script type="text/javascript">
	swal("Berhasil", "Klik Tombol Dibawah!", "success");
</script>
@endif

<div class="row">
	<div class="col-md-9">
		<a href="{{url('/katalog/tambah')}}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Koleksi</a>
	</div>
	<div class="col-md-3">

	</div>
</div>

<div class="card">
	<div class="table-responsive">
		<table id="example1" class="table table-striped table-md">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode Buku</th>
					<th>Image</th>
					<th>Judul</th>
					<th>Pengarang</th>
					<th>Kategori</th>
					<th>Jumlah</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			@if($count > 0)
			<tbody>
			@foreach($katalog as $item)	
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$item->id_katalog}}</td>
					<td><img src="{{asset('storage/'.$item->gambar.'')}}" width="100"></td>
					<td>{{$item->judul}}</td>
					<td>{{$item->pengarang}}</td>
					<td>{{$item->kategori['nama_kategori']}}</td>
					<td>{{$item->jumlah}}</td>
					<td class="text-center"><a href="{{url('/katalog/'.$item->id_katalog.'')}}" class="btn btn-warning">Edit</a> 
						<a href="#" data-id="{{$item->id_katalog}}" class="btn btn-danger confirm">Hapus</a>

					<form action="/katalog/{{$item->id_katalog}}" id="delete{{$item->id_katalog}}" method="post" class="d-inline">
							@method('delete')
							@csrf
						</form>
					</td>
				</tr>
			@endforeach
			</tbody>
			@else
			<tr>
				<td style="background-color: red; color:#fff;" colspan="8" class="text-center">NOTE: TAMBAHKAN DATA KATEGORI TERLEBIH DAHULU UNTUK MELIHAT KATALOG</td>
			</tr>
			@endif

		</table>
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