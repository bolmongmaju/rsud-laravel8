@extends('rsud.detail.app', ['breadcrumb' => 'Sejarah'])

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="department-content mt-3">
            <h3 class="text-md">Sejarah</h3>
            <div class="divider my-4"></div>
            <p>{{ $item->sejarah }}</p>
        </div>
    </div>

    {{-- <div class="col-lg-4">
        <div class="sidebar-widget schedule-widget mt-5">
            <h5 class="mb-4">Time Schedule</h5>

            <ul class="list-unstyled">
              <li class="d-flex justify-content-between align-items-center">
                <span>Monday - Friday</span>
                <span>9:00 - 17:00</span>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <span>Saturday</span>
                <span>9:00 - 16:00</span>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <span>Sunday</span>
                <span>Closed</span>
              </li>
            </ul>

            <div class="sidebar-contatct-info mt-4">
                <p class="mb-0">Need Urgent Help?</p>
                <h3>+23-4565-65768</h3>
            </div>
        </div>
    </div> --}}
</div>
@endsection

