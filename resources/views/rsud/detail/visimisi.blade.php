@extends('rsud.detail.app', ['breadcrumb' => 'Visi Misi'])

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="department-content mt-3">
            <h3 class="text-md">Visi</h3>
            <div class="divider my-4"></div>
            <p>{!! strip_tags($item->visi ?? null) !!}</p>
        </div>

        <div class="department-content mt-3">
            <h3 class="text-md">Misi</h3>
            <div class="divider my-4"></div>
            <p>{!! strip_tags($item->misi ?? null) !!}</p>
        </div>
    </div>
</div>
@endsection

