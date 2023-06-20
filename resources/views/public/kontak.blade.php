@extends('../layout.main')
<!-- End Header -->

@section('title', 'Kontak')
<!-- Jumbotron -->
@section('container')
<div class="jumbotron jumbotron-fluid jbsub">
	<div class="container jbsub-cn">
		<h5 class="display-4 text-center" style="font-size: 40px;">Hubungi Kami</h5>
	</div>
</div>

<div class="container ">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<h5>Alamat</h5>
			<p>Jl. Gubernur Suryo No.15, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d126649.6358719064!2d112.67546100888923!3d-7.263460730854522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2dd7f963d6b15f05%3A0x4aa167ad55b09e7a!2sPerpustakaan%20Umum%20Kota%20Surabaya%2C%20Jl.%20Gubernur%20Suryo%20No.15%2C%20Embong%20Kaliasin%2C%20Genteng%2C%20Surabaya%20City%2C%20East%20Java%2060271!3m2!1d-7.2634661!2d112.7455016!5e0!3m2!1sen!2sid!4v1603384476486!5m2!1sen!2sid" width="500" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<div class="col-md-6 panel-kontak">
			<h5>Kontak kami</h5>
			<table>
				<tr>
					<td><i class="fa fa-phone"></i> No Tlp</td>
					<td>:</td>
					<td>087804616097</td>
				</tr>
				<tr>
					<td><i class="fa fa-envelope"></i> Email</td>
					<td>:</td>
					<td>perpussby@gmail.com</td>
				</tr>
				<tr>
					<td><i class="fa fa-fax"></i>fax</td>
					<td>:</td>
					<td>(0295)32732387</td>
				</tr>
			</table>
		</div>
	</div>

</div>

@endsection