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

<section id="hero" style="background-color: rgba(255, 255, 255, 0.8);">
    @include('rsud.layouts.banner')
</section>
{{-- <section class="section about">
	@include('rsud.layouts.about')
</section> --}}
<section class="features mt-5">
    @include('rsud.layouts.waktu_pelayanan')
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
<section class="section service gray-bg mt-5">
	@include('rsud.layouts.faq')
</section>
<section class="section clients">
	@include('rsud.layouts.link')
</section>

<!-- footer Start -->
<footer class="footer section gray-bg">
	@include('rsud.layouts.footer')
</footer>



    @include('rsud.layouts.foot')

  </body>
  </html>
