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

<div class="container">
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">jenis Koleksi</th>
      <th scope="col">Status</th>
           <th scope="col">Tgl Pinjam</th>
      <th scope="col">Tgl Pengembalian</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pemrograman Web</td>
      <td>Buku</td>
      <td> <button class="btn btn-warning btn-sm btn-radius">Menunggu Verifikasi</button> </td>
          <td>07-20-2020</td>
           <td>14-20-2020</td>
      <td><a href="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a></td>
    </tr>
  </tbody>
</table>
<br>

<h5>History Peminjaman</h5>
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
</table>
</div>

@endsection