@extends('admin.template_admin.temp')
@section('title', 'Rak')
@section('judul_halaman', 'Rak')

@section('isi')
@if ($message = Session::get('berhasil'))
<script type="text/javascript">
	swal("Berhasil", "Klik Tombol Dibawah!", "success");
</script>
@endif
<div class="row">
	<div class="col-md-9">
		<a href="{{url('/rak/tambah')}}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Rak</a>
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
				<th>Rak</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
	<tbody>
				@foreach($rak as $item)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$item->nama_rak}}</td>
					<td class="text-center"><a href="{{url('/rak/'.$item->id_rak.'')}}" class="btn btn-warning">Edit</a> 
						<a href="#" data-id="{{$item->id_rak}}" class="btn btn-danger confirm">Hapus</a>

					<form action="/rak/{{$item->id_rak}}" id="delete{{$item->id_rak}}" method="post" class="d-inline">
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