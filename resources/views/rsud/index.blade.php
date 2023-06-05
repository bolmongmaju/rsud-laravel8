<!DOCTYPE html>

<html lang="en">
<head>

  @include('rsud.layouts.head')

</head>

<body id="top">

<header>
	@include('rsud.layouts.header')
</header>


<!-- Slider Start -->
{{-- <section class="banner">
	@include('rsud.layouts.banner')
</section> --}}

<section id="hero" style="background-color: rgba(255, 255, 255, 0.8);">
    @include('rsud.layouts.banner')
</section>
{{-- <section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Hours Service</span>
						<h4 class="mb-3">Online Appoinment</h4>
						<p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
						<a href="appoinment.html" class="btn btn-main btn-round-full">Make a appoinment</a>
					</div>

					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Timing schedule</span>
						<h4 class="mb-3">Working Hours</h4>
						<ul class="w-hours list-unstyled">
							<li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
						</ul>
					</div>

					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Emegency Cases</span>
						<h4 class="mb-3">1-800-700-6200</h4>
						<p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}


<section class="section about">
	@include('rsud.layouts.about')
</section>
<section class="section service gray-bg">
	@include('rsud.layouts.service')
</section>
<section class="section appoinment">
	@include('rsud.layouts.berita')
</section>
<section class="cta-section ">
	@include('rsud.layouts.data')
</section>
{{-- <section class="section testimonial-2 gray-bg">
	@include('rsud.layouts.artikel')
</section> --}}
{{-- <section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Partners who support us</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/1.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/2.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!-- footer Start -->
<footer class="footer section gray-bg">
	@include('rsud.layouts.footer')
</footer>



    @include('rsud.layouts.foot')

  </body>
  </html>
