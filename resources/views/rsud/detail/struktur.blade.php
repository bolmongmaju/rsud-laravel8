@extends('rsud.detail.app', ['breadcrumb' => 'Struktur Organisasi'])

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="department-content mt-3">
            <h3 class="text-md">Struktur Organisasi</h3>
            <div class="divider my-4"></div>
            <div class="department-img">
                <img src="{{ Storage::url($item->struktur_organisasi ?? null) }}" alt="struktur-organisasi" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection

