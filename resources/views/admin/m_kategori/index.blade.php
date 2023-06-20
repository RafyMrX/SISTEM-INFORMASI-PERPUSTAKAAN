@extends('admin.template_admin.temp')
@section('title', 'Kategori')
@section('judul_halaman', 'kategori')

@section('isi')

@if ($message = Session::get('berhasil'))
<script type="text/javascript">
	swal("Berhasil", "Klik Tombol Dibawah!", "success");
</script>
@endif
<div class="row">
	<div class="col-md-9">
		
	</div>
	<div class="col-md-3">

	</div>
</div>

<div class="card">
	@if($count < 1)
	<div class="alert alert-danger" role="alert">
		NOTE : TAMBAHKAN DATA KATEGORI DENGAN MENGGUNAKAN SEEDER YANG TELAH TERSEDIA | NAMA SEEDER : KategoriSeeder
	</div>
	@endif
	<div class="table-responsive">
		<table id="example1" class="table table-striped table-md">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kategori</th>
				</tr>
			</thead>
			<tbody>

				@foreach($kategori as $item)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$item->nama_kategori}}</td>

				</tr>
				@endforeach
			</tbody>
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
