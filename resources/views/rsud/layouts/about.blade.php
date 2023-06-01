<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <div class="about-img">
                <img src="{{ Storage::url($profil->foto_pimpinan) }}" alt="foto_pimpinan" class="img-fluid">
                {{-- <img src="{{ asset('front/images/about/img-2.jpg') }}" alt="" class="img-fluid mt-4"> --}}
            </div>
        </div>
        {{-- <div class="col-lg-4 col-sm-6">
            <div class="about-img mt-4 mt-lg-0">
                <img src="{{ asset('front/images/about/img-3.jpg') }}" alt="" class="img-fluid">
            </div>
        </div> --}}
        <div class="col-lg-6">
            <div class="about-content pl-4 mt-lg-0">
                <h2 class="title-color">Kata Sambutan</h2>
                <p class="mt-4 mb-5">{!! nl2br(($profil->kata_sambutan)) ?? null !!}</p>

                {{-- <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a> --}}
            </div>
        </div>
    </div>
</div>
