@extends('rsud.detail.app', ['breadcrumb' => 'Dasar Hukum'])

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="department-content mt-3">
            <h3 class="text-md">Dasar Hukum</h3>
            <div class="divider my-4"></div>
            <p>{!! strip_tags($item->dasar_hukum ?? null) !!}</p>
        </div>
    </div>
</div>
@endsection

