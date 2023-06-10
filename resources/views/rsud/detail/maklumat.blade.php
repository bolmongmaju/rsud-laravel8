@extends('rsud.detail.app', ['breadcrumb' => 'Maklumat Pelayanan'])

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="department-content mt-3">
            <h3 class="text-md">Maklumat Pelayanan</h3>
            <div class="divider my-4"></div>
            <div class="department-img">
                <img src="{{ Storage::url($item->maklumat ?? null) }}" alt="maklumat-pelayanan" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection

