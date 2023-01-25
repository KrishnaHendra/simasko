@extends('template/template')

@section('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Kebijakan Privasi</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Kebijakan Privasi</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- Start Services Section
==================================== -->

<section class="services pb-0" id="services">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2>Kebijakan Privasi</h2>
					<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex,
						in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>

	</div> <!-- End container -->
</section> <!-- End section -->
<!-- Start Team Skills
=========================================== -->
<section style="padding-bottom: 100px;">
	<div class="container">
		<div class="row justify-content-center">
			 <div class="col-lg-12">
         <div class="accordion" id="accordionExample">
           <div class="card">
             <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                 <button class="btn btn-link btn-block text-left pl-0 font-weight-bold text-uppercase" type="button" >
                   Pengumpulan Informasi
                 </button>
               </h2>
             </div>
             <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
               <div class="card-body">
                 Kami mengumpulkan informasi dari Anda ketika Anda mendaftar pada situs kami, masuk ke akun Anda, melakukan pembelian, ikut dalam kontes, dan/atau ketika Anda keluar. Data yang dikumpulkan mencakup nama Anda, alamat email, nomor telepon, dan/atau kartu kredit.
                 Selain itu, kami menerima dan merekam informasi secara otomatis dari komputer dan peramban Anda, termasuk alamat IP Anda, perlengakapan perangkat keras dan lunak Anda, dan halaman yang Anda minta.
               </div>
             </div>
           </div>
           <div class="card">
             <div class="card-header" id="headingTwo">
               <h2 class="mb-0">
                 <button class="btn btn-link btn-block text-left pl-0 font-weight-bold text-uppercase" type="button" >
                   Penggunaan Informasi
                 </button>
               </h2>
             </div>
             <div id="collapseOne" class="collapse show" aria-labelledby="headingTwo">
               <div class="card-body">
                 Segala informasi yang kami kumpulkan dari Anda dapat digunakan untuk:
                 <p>
                 <ol>
                   <li>- Personalisasi pengalaman dan tanggapan Anda sesuai kebutuhan pribadi Anda</li>
                   <li>- Menyediakan konten iklan yang disesuaikan</li>
                   <li>- Meningkatkan situs web kami</li>
                   <li>- Meningkatkan layanan pelanggan dan mendukung kebutuhan Anda</li>
                   <li>- Menghubungi Anda lewat email</li>
                   <li>- Mengatur kontes, promo, atau survei</li>
                 </ol>
                </p>
               </div>
             </div>
           </div>

           <div class="card">
             <div class="card-header" id="headingThree">
               <h2 class="mb-0">
                 <button class="btn btn-link btn-block text-left pl-0 font-weight-bold text-uppercase" type="button" >
                   Privasi Simasko
                 </button>
               </h2>
             </div>
             <div id="collapseOne" class="collapse show" aria-labelledby="headingThree">
               <div class="card-body">
                Kami adalah pemilik tunggal dari informasi yang dikumpulkan pada situs ini. Informasi pribadi Anda yang dapat diidentifikasi tidak akan dijual, dipertukarkan, ditransfer, atau diberikan kepada perusahaan lain dengan alasan apa pun juga, tanpa mendapatkan izin Anda, selain dari hanya semata-mata untuk memenuhi permohonan dan/ atau transaksi, misalnya untuk pengiriman pesanan.
               </div>
             </div>
           </div>

           <div class="card">
             <div class="card-header" id="headingFour">
               <h2 class="mb-0">
                 <button class="btn btn-link btn-block text-left pl-0 font-weight-bold text-uppercase" type="button" >
                   Pengungkapan Pihak Ketiga
                 </button>
               </h2>
             </div>
             <div id="collapseOne" class="collapse show" aria-labelledby="headingFour">
               <div class="card-body">
                 Kami tidak menjual, memperdagangkan, atau pun memindahkan keluar dari pihak kami informasi pribadi Anda yang dapat diidentifikasi. Kami tidak mengikutkan pihak ketiga tepercaya yang membantu kami dalam mengoperasikan situs web kami atau menyelenggarakan bisnis kami, selama semua pihak setuju untuk menjaga kerahasiaan informasi ini.
                 Kami meyakini akan pentingnya berbagi informasi dalam rangka menyelidiki, mencegah, atau mengambil tindakan menyangkut aktivitas ilegal, dugaan penipuan, keadaan yang melibatkan ancaman terhadap keamanan fisik seseorang, pelanggaran atas syarat-syarat penggunaan kami, atau hal lain yang diwajibkan oleh hukum.
                Namun, informasi bukan privat dapat diberikan kepada pihak lain untuk pemasaran, pariwara, atau penggunaan lain.
               </div>
             </div>
           </div>

           <div class="card">
             <div class="card-header" id="headingFive">
               <h2 class="mb-0">
                 <button class="btn btn-link btn-block text-left pl-0 font-weight-bold text-uppercase" type="button" >
                   Proteksi Informasi
                 </button>
               </h2>
             </div>
             <div id="collapseOne" class="collapse show" aria-labelledby="headingFive">
               <div class="card-body">
                 Kami menerapkan berbagai langkah keamanan guna menjaga keamanan informasi pribadi Anda. Kami menggunakan enripsi teknologi mutakhir untuk memproteksi informasi sensitif yang dikirimkan secara online. VpnMentor juga memproteksi informasi Anda secara offline. Kami mengaryakan mereka yang perlu mengerjakan pekerjaan khusus (contohnya, penagihan atau layanan pelanggan) diberikan akses ke informasi pribadi yang dapat diidentifikasi. Komputer/server yang digunakan untuk menyimpan informasi pribadi yang dapat diidentifikasi disimpan dalam lingkungan yang aman.
               </div>
             </div>
           </div>

           <div class="card">
             <div class="card-header" id="headingSix">
               <h2 class="mb-0">
                 <button class="btn btn-link btn-block text-left pl-0 font-weight-bold text-uppercase" type="button" >
                   Persetujuan
                 </button>
               </h2>
             </div>
             <div id="collapseOne" class="collapse show" aria-labelledby="headingSix">
               <div class="card-body">
                  Dengan menggunakan situs kami, Anda setuju dengan kebijakan privasi kami.
               </div>
             </div>
           </div>

         </div>
       </div>
    </div>
	</div> <!-- End container -->
</section> <!-- End section -->

@endsection
