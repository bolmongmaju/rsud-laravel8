<div class="container">
    <div class="row">
        <div class="col-lg-4 mr-auto col-sm-6">
            <div class="widget mb-5 mb-lg-0">
                <div class="logo mb-4">
                    <img src="{{ Storage::url($profil->logo ?? null) }}" alt="" class="img-fluid">
                </div>
                {{-- <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p> --}}

                <ul class="list-inline footer-socials mt-4">
                    @forelse ($sosmeds as $item)
                    <li class="list-inline-item">
                        <a href="{{ $item->url }}"><i class="{{ $item->icon }}"></i></a>
                    </li>
                    @empty
                    <li class="list-inline-item">
                        <a href="#"><i class="icofont-facebook"></i></a>
                    </li>
                    @endforelse
                </ul>
            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="widget mb-5 mb-lg-0">
                <h4 class="text-capitalize mb-3">Layanan</h4>
                <div class="divider mb-4"></div>

                <ul class="list-unstyled footer-menu lh-35">
                    <li><a href="#!">Rawat Inap </a></li>
                    <li><a href="#!">Rawat Jalan</a></li>
                    <li><a href="#!">Gawat Darurat</a></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="widget mb-5 mb-lg-0">
                <h4 class="text-capitalize mb-3">Link Terkait</h4>
                <div class="divider mb-4"></div>

                <ul class="list-unstyled footer-menu lh-35">
                    @forelse ($links as $item)
                    <li><a href="{{ $item->url }}">{{ $item->name }}</a></li>
                    @empty
                    <li><a href="https://bolmongkab.go.id">Bolmongkab </a></li>
                    @endforelse
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget widget-contact mb-5 mb-lg-0">
                <h4 class="text-capitalize mb-3">Hubungi Kami</h4>
                <div class="divider mb-4"></div>

                <div class="footer-contact-block mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-email mr-3"></i>
                        <span class="h6 mb-0">Support Available for 24/7</span>
                    </div>
                    <h4 class="mt-2"><a href="mailto:{{ $contact->email ?? null }}">{{ $contact->email ?? null }}</a></h4>
                </div>

                <div class="footer-contact-block">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-support mr-3"></i>
                        <span class="h6 mb-0">{{ $contact->hari_kerja ?? null }} : {{ $contact->jam_buka ?? null }} - {{ $contact->jam_tutup ?? null }}</span>
                    </div>
                    <h4 class="mt-2"><a href="tel:{{ $contact->no_telp ?? null }}">{{ $contact->no_telp ?? null }}</a></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-btm py-4 mt-5">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
                <div class="copyright">
                    Copyright &copy; {{ date('Y') }}, Designed &amp; Developed by <a href="https://diskominfo.bolmongkab.go.id/">Diskominfo</a>
                </div>
            </div>
            {{-- <div class="col-lg-6">
                <div class="subscribe-form text-lg-right mt-5 mt-lg-0 mr-5">
                    <p>RSUD Kabupaten Bolaang Mongondow</p>
                </div>
            </div> --}}
        </div>

        <div class="row">
            <div class="col-lg-4">
                <a class="backtop scroll-top-to" href="#top">
                    <i class="icofont-long-arrow-up"></i>
                </a>
            </div>
        </div>
    </div>
</div>
