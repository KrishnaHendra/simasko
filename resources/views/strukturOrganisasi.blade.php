@extends('template/template')

@section('content')


<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Struktur Organisasi</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--
Start About Section
==================================== -->
<section class="about" id="about">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<!-- section title -->
				<div class="title text-center">
					<h2>Struktur Organisasi</h2>
					<p>Berikut ini merupakan struktur organisasi terbaru perusahaan.</p>
					<div class="border"></div>
				</div>
				<!-- /section title -->
			</div>
		</div>


    <div class="row">
      <div class="col-lg-12 text-center">
        <img src="{{ url('assets') }}/images/ex_struktur_organisasi.png" alt="Struktur Organisasi" width="80%">
      </div>
    </div>

	</div> <!-- End container -->
</section> <!-- End section -->
<!-- Start Our Team
		=========================================== -->
<section class="team" id="team">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center ">
					<h2>Detail Anggota</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati, quis
						similique quos.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>
		<div class="row">
			<!-- team member -->
			<div class="col-lg-3 col-md-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img loading="lazy" class="img-fluid" src="{{ url('assets') }}/images\team\member-1.jpg" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Michael Jonson</h3>
						<span>Head Of Marketing</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->

				</div>
			</div>
			<!-- end team member -->

      <!-- team member -->
      <div class="col-lg-3 col-md-6">
        <div class="team-member text-center">
          <div class="member-photo">
            <!-- member photo -->
            <img loading="lazy" class="img-fluid" src="{{ url('assets') }}/images\team\member-3.jpg" alt="Meghna">
            <!-- /member photo -->

            <!-- member social profile -->
            <div class="mask">
              <ul class="clearfix">
                <li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
                <li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
                <li><a href="https://themefisher.com/"><i class="tf-ion-social-google-outline"></i></a></li>
                <li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble"></i></a></li>
              </ul>
            </div>
            <!-- /member social profile -->
          </div>

          <!-- member name & designation -->
          <div class="member-content">
            <h3>David Gauthier</h3>
            <span>Head Of Management</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
          </div>
          <!-- /member name & designation -->

        </div>
      </div>
      <!-- end team member -->

			<!-- team member -->
			<div class="col-lg-3 col-md-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img loading="lazy" class="img-fluid" src="{{ url('assets') }}/images\team\member-2.jpg" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Carrick Mollenkamp</h3>
						<span>Web Developer</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-lg-3 col-md-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img loading="lazy" class="img-fluid" src="{{ url('assets') }}/images\team\member-3.jpg" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>David Gauthier</h3>
						<span>Head Of Management</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->

				</div>
			</div>
			<!-- end team member -->
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->


@endsection
