@extends('../layout.main')
<!-- End Header -->

@section('title', 'Pinjaman Saya')
<!-- Jumbotron -->
@section('container')
<div class="jumbotron jumbotron-fluid jbsub">
  <div class="container jbsub-cn">
    <h5 class="display-4 text-center" style="font-size: 40px;">Data Peminjaman Koleksi</h5>
  </div>
</div>

<div class="container" style="margin-right: 295px;">
  @if ($message = Session::get('berhasil'))
  <div class="alert alert-success" role="alert">
    {{$message}}
  </div>
  @endif
  <input type="hidden" name="id" value="">
  <table class="table table-striped" style="width: 1316px;">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">jenis Koleksi</th>
        <th scope="col">Status</th>
        <th scope="col">Tgl Pinjam</th>
        <th scope="col">Tgl Pengembalian</th>
        <th scope="col">Denda</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @if($jml > 0)
    <tbody>
      @foreach($pinjaman as $item)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
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
        <td><button class="btn btn-danger btn-sm btn-radius">Terlambat</button></td>
        @elseif($item->status == 3)
        <td><button class="btn btn-primary btn-sm btn-radius">Dikembalikan</button></td>
        @endif


        <td>{{$item->tgl_pinjam}}</td>
        <td>{{$item->tgl_kembali}}</td>
        <td><i>Rp.{{$item->denda}}</i></td>
        <td>
          <a href="#" data-id='{{$item->id_transaksi}}' class="btn btn-danger confirm"> Hapus</a>
          <form action="/pinjaman/{{$item->id_transaksi}}" id="delete{{$item->id_transaksi}}" method="POST">
            @method('delete')
            @csrf
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    @else
    <tbody>
      <tr>
        <td colspan="8" class="text-center text-uppercase">Tidak Ada Koleksi yang dipinjam</td>
      </tr>
    </tbody>
    @endif

  </table>
</div>

<script type="text/javascript">
  $(".confirm").on('click',function(e){
    id = e.target.dataset.id;
    swal({
      title : 'Yakin Ingin Dihapus ?',
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
</script>

@endsection