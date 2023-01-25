@extends('template/template')

@section('content')


<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Daftar Kejuruan</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Daftar Kejuruan</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- Start Portfolio Section
		=========================================== -->

<section class="portfolio section-sm" id="portfolio">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<!-- section title -->
				<div class="title text-center">
					<h2>Daftar Kejuruan</h2>
					<p>Berikut ini merupakan daftar semua kejuruan yang ada di BLK Wonojati Singosari Kota Malang</p>
					<div class="border"></div>
				</div>
				<!-- /section title -->
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-10">
        <div class="table-responsive">

            <table class="table table-hover table-bordered" id="dataTable">
              <thead class="bg-dark text-white">
                <tr>
                  <th scope="col">Bidang Keahlian</th>
                  <th scope="col" class="text-center">Program Keahlian</th>
                  <th scope="col" class="text-center">Kompetensi Keahlian</th>
                  <th scope="col" class="text-center">Kuota</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td rowspan="10">Teknologi dan Rekayasa</td>
                  <td rowspan="4">Teknik Konstruksi dan Properti</td>
                  <td>Konstruksi Gedung, Sanitasi, dan Perawatan</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Konstruksi Jalan, Irigasi, dan Jembatan</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Bisnis Konstruksi dan Properti</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Desain Pemodelan dan Informasi Bangunan</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td rowspan="2">Teknik Geomatika dan Geospasial</td>
                  <td>Teknik Geomatika</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Teknik Geospasial</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td rowspan="4">Teknik Mesin</td>
                  <td>Teknik Pemesinan</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Teknik Pengelasan</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Teknik Mekanik Industri</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Teknik Pengecoran Logam</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td rowspan="8">Pariwisata</td>
                  <td rowspan="3">Pehotelan dan Jasa Pariwisata</td>
                  <td>Usaha Perjalanan Wisata</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Pariwisata</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Hotel dan Restoran</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Kuliner</td>
                  <td>Tata Boga</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td rowspan="2">Tata Kecantikan</td>
                  <td>Tata Kecantikan Kulit dan Rambut</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Spa dan Beauty Therapy</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td rowspan="2">Tata Busana</td>
                  <td>Tata Busana</td>
                  <td>16</td>
                </tr>
                <tr>
                  <td>Desain Fesyen</td>
                  <td>16</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- End section -->


@endsection
