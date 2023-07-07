@extends('rsud.detail.app', ['breadcrumb' => 'Jadwal Poliklinik'])

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="department-content mt-3">
            {{-- <h3 class="text-md">Jadwal</h3> --}}
            <div class="divider my-4"></div>
            <div class="department-img">
                <img src="{{ Storage::url('public/photo-images/'. $item->image ?? null) }}" alt="jadwal-poliklinik" class="img-fluid" width="100%">
            </div>
        </div>
    </div>
</div>
@endsection

