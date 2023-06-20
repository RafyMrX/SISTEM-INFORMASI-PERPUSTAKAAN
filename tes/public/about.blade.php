@extends('../layout.main')
<!-- End Header -->

@section('title', 'Tentang Kami')
<!-- Jumbotron -->
@section('container')
<div class="jumbotron jumbotron-fluid jbsub">
	<div class="container jbsub-cn">
		<h5 class="display-4 text-center" style="font-size: 40px;">Tentang Kami</h5>
	</div>
</div>

<div class="container">
	<img src="{{url('/assets/user/img/depanperpus.jpg')}}" width="500" class="img-thumbnail float-left mr-3">
	<p class="text-justify">perpustakaan ini terletak di Balai Pemuda, Jl. Gubernur Suryo No. 15, Surabaya. Perpustakaan yang dikelolah oleh pemerintah ini setiap hari terbuka untuk umum mulai pukul 08.00 sampai 21.00 WIB.</p>
	<p class="text-justify">
		Perpustakaan ini bisa dijadikan sebagai tempat produktif baik mahasiswa maupun pelajar untuk mengerjakan tugas. Karena di tempat ini pemerintah tidak hanya menyediakan rentetan buku, tetapi juga beberapa ruang baca serta meja belajar, bahkan perpustakaan ini juga dilengkapi dengan LCD pemutar video serta akses internet.</p>
	<div style="clear: both;"></div>
</div>


@endsection