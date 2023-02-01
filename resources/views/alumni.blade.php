@extends('template/template')

@section('content')



<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Alumni</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Alumni</li>
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
					<h2>Alumni Peserta</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, veritatis. Lorem ipsum dolor sit amet,
						consectetur adipisicing elit. Minima, vitae? </p>
					<div class="border"></div>
				</div>
				<!-- /section title -->
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-10">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">

            <table class="table table-hover table-bordered" id="dataTable">
              <thead class="bg-dark text-white">
                <tr>
                  <th scope="col" class="text-center">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col" class="text-center">Gelombang</th>
                  <th scope="col" class="text-center">Thn Pendaftaran</th>
                  <th scope="col" class="text-center">Kejuruan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="text-center">1</th>
                  <td>Krishna Hendra</td>
                  <td class="text-center">Gelombang IV</td>
                  <td class="text-center">2021</td>
                  <td class="text-center">CPKI</td>
                </tr>
                <tr>
                  <th scope="row" class="text-center">2</th>
                  <td>Haifa Shalsa</td>
                  <td class="text-center">Gelombang IV</td>
                  <td class="text-center">2021</td>
                  <td class="text-center">CPKI</td>
                </tr>
                <tr>
                  <th scope="row" class="text-center">3</th>
                  <td>Zulfano Rizqullah</td>
                  <td class="text-center">Gelombang IV</td>
                  <td class="text-center">2021</td>
                  <td class="text-center">CPKI</td>
                </tr>
                <tr>
                  <th scope="row" class="text-center">4</th>
                  <td>Muhammad Zidan</td>
                  <td class="text-center">Gelombang IV</td>
                  <td class="text-center">2021</td>
                  <td class="text-center">CPKI</td>
                </tr>
                <tr>
                  <th scope="row" class="text-center">5</th>
                  <td>Sabilla Ayu</td>
                  <td class="text-center">Gelombang IV</td>
                  <td class="text-center">2021</td>
                  <td class="text-center">CPKI</td>
                </tr>

              </tbody>
            </table>
          </div>

          </div>
        </div>
      </div>
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- End section -->
<!-- Start Testimonial
=========================================== -->

	<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="{{ url('assets') }}/images\client-logo\clients-1.jpg" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>William Martin</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->

						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="{{ url('assets') }}/images\client-logo\clients-2.jpg" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>Emma Harrison</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->

						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="{{ url('assets') }}/images\client-logo\clients-3.jpg" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>Alexander Lucas</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

  <script>
    $(document).ready(function(){
      $('#dataTable').DataTable();
    })
  </script>

@endsection
