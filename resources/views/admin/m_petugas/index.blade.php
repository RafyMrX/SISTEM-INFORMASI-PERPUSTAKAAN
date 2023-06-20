@extends('admin.template_admin.temp')
@section('title', 'Daftar Petugas')
@section('judul_halaman', 'Daftar Petugas')

@section('isi')
@if ($message = Session::get('berhasil'))
<script type="text/javascript">
	swal("Berhasil", "Klik Tombol Dibawah!", "success");
</script>
@endif
<div class="row">
	<div class="col-md-9">
		<a href="{{url('/petugas/tambah')}}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Petugas</a>
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
					<th>NIP</th>
					<th>Nama</th>
					<th>Username</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($petugas as $item)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$item->id_petugas}}</td>
					<td>{{$item->nama}}</td>
					<td>{{$item->username}}</td>
					@if(session()->get('SessionAdmin') == $item->nama)
					<td class="text-center">
						<a href="{{url('/petugas/'.$item->id_petugas)}}" class="btn btn-primary">Edit</a> 

						<a href="#" data-id="{{$item->id_petugas}}" class="btn btn-danger confirm">Hapus</a>

						<form action="/petugas/{{$item->id_petugas}}" method="post" class="d-inline" id="delete{{$item->id_petugas}}">
							@method('delete')
							@csrf
							
						</form>
					</td>
					@else
					<td class="text-center">
					
					</td>
					@endif
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