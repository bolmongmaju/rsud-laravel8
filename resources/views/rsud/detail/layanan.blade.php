@extends('rsud.detail.app', ['breadcrumb' => 'Daftar Fasilitas Layanan'])

@section('content')
<div class="row justify-content-center">
    <div class="col">
        <div class="department-content">

            <div class="accordion-section">
                <div class="accordion-holder">
                    <div class="accordion accordion-flush" id="accordionGroup" role="tablist" aria-multiselectable="true">
                        @forelse ($layanan as $item)
                        <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h4 class="card-title">
                            <a role="button" data-toggle="collapse" href="#{{ $item->slug }}" aria-expanded="true" aria-controls="collapseOne">
                                <i class="icofont-simple-right"></i> {{ Str::title($item->name) }}
                            </a>
                            </h4>
                        </div>

                        <div id="{{ $item->slug }}" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionGroup">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                              <th scope="col" style="width: 5%;">No</th>
                                              <th scope="col" style="width: 25%;">Komponen</th>
                                              <th scope="col">Uraian</th>
                                            </tr>
                                          </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Persyaratan pelayanan</td>
                                                <td>{!! strip_tags($item->persyaratan) !!}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Prosedur</td>
                                                <td>{!! strip_tags($item->prosedur) !!}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Waktu pelayanan</td>
                                                <td>{!! strip_tags($item->waktu) !!}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Biaya/tarif</td>
                                                <td>{!! $item->biaya !!}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Produk layanan</td>
                                                <td>{!! $item->produk_layanan !!}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        </div>
                        @empty
                        <span>empty</span>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

