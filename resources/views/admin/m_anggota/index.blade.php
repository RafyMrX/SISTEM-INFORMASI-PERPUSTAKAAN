@extends('admin.template_admin.temp')
@section('title', 'Daftar Anggota')
@section('judul_halaman', 'Daftar Anggota')

@section('isi')
@if ($message = Session::get('berhasil'))
<script type="text/javascript">
	swal("Berhasil", "Klik Tombol Dibawah!", "success");
</script>
@endif
<div class="card">
<div class="table-responsive">
	<table id="example1" class="table table-striped table-md">
		<thead>
			<tr>
				<th>No</th>
				<th>No Anggota</th>
				<th>Nama Lengkap</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($anggota as $item)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$item->id_anggota}}</td>
				<td>{{$item->nama}}</td>
				<td class="text-center">
					<a href="{{url('/anggota/'.$item->id_anggota)}}" class="btn btn-primary"><i class="fa fa-eye"></i> Lihat Data</a> 
					<a href="#" data-id="{{$item->id_anggota}}" class="btn btn-danger confirm">Hapus</a>
					<form action="/anggota/{{$item->id_anggota}}" method="post" class="d-inline" id="delete{{$item->id_anggota}}">
					@method('delete')
					@csrf
					</form>
				</td>
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