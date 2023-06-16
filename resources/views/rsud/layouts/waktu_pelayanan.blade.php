<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="feature-block d-lg-flex">
                <div class="feature-item mb-5 mb-lg-0">
                    <div class="feature-icon mb-4">
                        <i class="icofont-surgeon-alt"></i>
                    </div>
                    <span>Layanan 24 Jam</span>
                    <h4 class="mb-3">Online</h4>
                    <p class="mb-4">Melayani Dengan Senyum, Salam, Sambut, Sapa, Sentuh</p>
                    <a href="#" class="btn btn-main btn-round-full">Pendaftaran Online</a>
                </div>

                <div class="feature-item mb-5 mb-lg-0">
                    <div class="feature-icon mb-4">
                        <i class="icofont-ui-clock"></i>
                    </div>
                    <span>Timing schedule</span>
                    <h4 class="mb-3">Waktu Pelayanan</h4>
                    <ul class="w-hours list-unstyled">
                        <li class="d-flex justify-content-between">{{ $contact->hari_kerja ?? null }} : <span>{{ $contact->jam_buka ?? null }} - {{ $contact->jam_tutup ?? null }}</span></li>
                        <li class="d-flex justify-content-between">{{ $contact->keterangan ?? null }}</li>
                    </ul>
                </div>

                <div class="feature-item mb-5 mb-lg-0">
                    <div class="feature-icon mb-4">
                        <i class="icofont-support"></i>
                    </div>
                    <span>Kontak Darurat</span>
                    <h4 class="mb-3">{{ $contact->no_telp ?? null }}</h4>
                    <p>Hubungi kontak diatas jika sudah keadaan darurat</p>
                </div>
            </div>
        </div>
    </div>
</div>
