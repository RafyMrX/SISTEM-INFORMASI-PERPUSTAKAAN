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
  @if (Session::has('perpanjang'))
  <div class="alert alert-success">
    {{ Session::get('perpanjang') }}
  </div>
  @endif

  @if (Session::has('gagal'))
  <div class="alert alert-danger">
    {{ Session::get('gagal') }}
  </div>
  @endif

  @if (Session::has('berhasil'))
  <div class="alert alert-success">
    {{ Session::get('berhasil') }}
  </div>
  @endif

  <!-- TABEL FORM UNTUK UPDATE DATA-->
  <form action="{{url('/pinjaman-saya')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$id}}">
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
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>{{$buku['judul']}}</td>
          <td>{{$buku['jenis']}}</td>

          <!-- KONDISI STATUS -->
          <?php if ($denda > 0) { ?>
            <td> <button class="btn btn-danger btn-sm btn-radius">Terlambat</button> </td>
          <?php } else { ?>
            <td> <button class="btn btn-secondary btn-sm btn-radius">Dipinjam</button> </td>
          <?php } ?>
          <!-- AKHIR KONDISI -->


          <td>
            <input type="date" name="tgl_pinjam" class="form-control" id="pinjam" value="{{$pinjam}}">
          </td>
          <td>
            <input type="date" name="tgl_kembali" class="form-control" id="kembali" value="{{$kembali}}">
          </td>
          <td>Rp. {{number_format($denda)}}</td>

          <!-- KONDISI TOMBOL KETIKA DENDA ADA -->
          <?php if ($denda > 0) { ?>
            <td><a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-money" aria-hidden="true"></i> Bayar Denda</a></td>

            <!-- KONDISI TOMBOL KETIKA DENDA TIDAK ADA -->
          <?php } else if ($denda < 1) { ?>

            <td><a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal3">Kembali</a>

              <a href="{{url('/perpanjang')}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2"><i class="fa fa-book" aria-hidden="true"></i> Perpanjang</a>
            </td>

          <?php } ?>

        </tr>
      </tbody>
    </table>
    <button type="submit" class="btn btn-warning">Update Data</button>
  </form>

  <!-- AKHIR TABEL FORM -->


  <br>

  <!-- MODAL Kembali -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-money"></i> Kembali</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/pinjaman-saya/kembali" method="POST">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$id}}">
            <input type="hidden" name="denda" value="{{$denda}}">
            <input type="hidden" name="tgl_pinjam" id="pinjam" value="{{$pinjam}}">
            <input type="hidden" name="tgl_kembali" id="kembali" value="{{$kembali}}">
            <div class="form-group">
              <label>Masukkan Kondisi Buku</label>
              <input type="text" class="form-control" name="kondisi" placeholder="">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-money"></i> Bayar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- AKHIR MODAL Kebmali -->

  <!-- MODAL PEMBAYARAN -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-money"></i> Pembayaran Denda</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/pinjaman-saya/bayar" method="POST">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$id}}">
            <input type="hidden" name="denda" value="{{$denda}}">
            <input type="hidden" name="tgl_pinjam" id="pinjam" value="{{$pinjam}}">
            <input type="hidden" name="tgl_kembali" id="kembali" value="{{$kembali}}">
            <div class="form-group">
              <label>Masukkan Nominal</label>
              <input type="text" class="form-control" name="bayar" placeholder="Ex.1000000">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-money"></i> Bayar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- AKHIR MODAL PEMBAYARAN -->

  <!-- MODAL PERPANJANGAN -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-calendar"></i> Perpanjangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/pinjaman-saya/perpanjang" method="POST">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$id}}">
            <input type="hidden" name="tgl_pinjam" id="pinjam" value="{{$pinjam}}">
            <div class="form-group">
              <label>Set Tanggal Kembali</label>
              <input type="date" class="form-control" name="tgl_kembali">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-money"></i> Perpanjang</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- AKHIR MODAL PERPANJANGAN -->



  <!-- <h5>History Peminjaman</h5>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">jenis Koleksi</th>
      <th scope="col">Status</th>
      <th scope="col">Tgl Pinjam</th>
      <th scope="col">Tgl Pengembalian</th>
      <th scope="col">Denda</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Decision Support System</td>
      <td>Jurnal</td>
      <td> <button class="btn btn-success btn-sm btn-radius">Dipinjam</button> </td>
      <td>07-20-2020</td>
      <td>12-20-2020</td>
      <td>-</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ayat-ayat Cinta</td>
      <td>Novel</td>
      <td> <button class="btn btn-danger btn-sm btn-radius">Terlambat</button> </td>
      <td>08-20-2020</td>
      <td>12-20-2020</td>
      <td>Rp.5.000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Warkop DKI</td>
      <td>Komik</td>
      <td> <button class="btn btn-primary btn-sm btn-radius">Perpanjang</button> </td>
      <td>06-20-2020</td>
      <td>12-20-2021</td>
      <td>-</td>
    </tr>
     <tr>
      <th scope="row">3</th>
      <td>Oracle</td>
      <td>E-Book</td>
      <td> <button class="btn btn-secondary btn-sm btn-radius">Dikembalikan</button> </td>
      <td>06-20-2020</td>
      <td>12-20-2021</td>
      <td>-</td>
    </tr>
  </tbody>
</table> -->
</div>


@endsection