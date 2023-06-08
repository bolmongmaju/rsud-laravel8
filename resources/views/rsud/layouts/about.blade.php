<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto col-lg-4 shuffle-item">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img about-img">
		               <img src="{{ Storage::url($profil->foto_pimpinan ?? null) }}" alt="foto_pimpinan" class="img-fluid img-thumbnail w-100">
		            </div>
	            </div>
	      	</div>
      </div>

        <div class="col-auto col-lg-4">
            <div class="about-content pl-4 mt-lg-0">
                <h2 class="title-color">Kata Sambutan</h2>
                <p class="mt-4 mb-5">{!! nl2br(($profil->kata_sambutan ?? null)) !!}</p>
            </div>
        </div>
    </div>
</div>
