@extends('rsud.detail.app', ['breadcrumb' => 'Kontak'])

@section('content')
<section class="section contact-info pb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-live-support"></i>
            <h5>Hubungi Kami</h5>
            {{ $kontak->no_telp ?? null }}
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-support-faq"></i>
            <h5>Email</h5>
            {{ $kontak->email ?? null }}
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-location-pin"></i>
            <h5>Alamat</h5>
            {{ $kontak->alamat ?? null }}
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="google-map mt-5">
      <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3645911776384!2d124.03118727369788!3d0.8640990629472759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327e6e39090c5059%3A0xdf5d9d89db192359!2sRSUD%20Kab.%20BOLAANG%20MONGONDOW!5e0!3m2!1sid!2sid!4v1685936769776!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </div>
@endsection

