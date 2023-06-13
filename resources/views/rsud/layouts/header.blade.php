<div class="header-top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="top-bar-info list-inline-item pl-0 mb-0">
                    <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>{{ $contact->email ?? null }}</a></li>
                    <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>{{ $contact->alamat ?? null }} </li>
                </ul>
            </div>
            {{-- <div class="col-lg-6">
                <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                    <a href="tel:+23-345-67890">
                        <span>Telp/WA : </span>
                        <span class="h4">{{ $contact->no_telp ?? null }}</span>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navigation" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ Storage::url($profil->logo ?? null) }}" width="250" alt="logo-bolmong" class="img-fluid">
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
            aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icofont-navigation-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarmain">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Profil <i class="icofont-thin-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
                        <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ route('visimisi') }}">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('struktur') }}">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('maklumat') }}">Maklumat Pelayanan</a></li>
                        <li><a class="dropdown-item" href="{{ route('motto') }}">Motto</a></li>

                        {{-- <li class="dropdown dropdown-submenu dropright">
                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                            <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Layanan <i class="icofont-thin-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                        <li><a class="dropdown-item" href="{{ route('rj') }}">Pelayanan Rawat Jalan</a></li>
                        <li><a class="dropdown-item" href="{{ route('ri') }}">Pelayanan Rawat Inap</a></li>
                        <li><a class="dropdown-item" href="{{ route('gd') }}">Pelayanan Gawat Darurat</a></li>
                    </ul>
                </li> --}}

                <li class="nav-item"><a class="nav-link" href="{{ route('layanan') }}">Layanan</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dokter <i class="icofont-thin-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="#">Daftar Dokter</a></li>
                        <li><a class="dropdown-item" href="#">Spesialis</a></li>
                        <li><a class="dropdown-item" href="#">Klinik</a></li>
                        <li><a class="dropdown-item" href="#">Jadwal Poliklinik</a></li>
                    </ul>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Informasi <i class="icofont-thin-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown05">
                        <li><a class="dropdown-item" href="{{ route('berita') }}">Berita</a></li>
                    </ul>
                </li> --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Media <i class="icofont-thin-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown06">
                        <li><a class="dropdown-item" href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a class="dropdown-item" href="{{ route('dokumen') }}">Dokumen</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('berita') }}">Berita</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>
