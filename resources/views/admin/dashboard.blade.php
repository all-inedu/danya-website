@extends('layout.admin.app')
@section('content')
<div class="col-md-12 card shadow-none position-relative overflow-hidden m-0" style="background: var(--light-red)">
    <div class="card-body px-4 py-2">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold m-0">Home Dashboard</h4>
            </div>
            <div class="col-3">
                <div class="text-end mb-n4 me-n4">  
                    {{-- <img src="{{ asset('/images/profile/profile.png') }}" alt="" height="100" class="img-fluid mb-n4"> --}}
                    <i class="ti ti-layout-dashboard" style="color: var(--red); font-size: 84px"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col d-flex flex-md-row flex-column gap-md-3">
    <div class="col">
        <div class="card m-0">
            <div class="card-body">
                <div class="row align-items-start">
                    <div class="col-md-8 col">
                        <a href="{{ route('admin.change_making_project') }}">
                            <h5 class="card-title mb-9 fw-semibold">
                                Change Making Project
                            </h5>
                        </a>
                        <h4 class="fw-semibold mb-3">
                            {{ $change_making_projects->count() }}
                        </h4>
                        <div class="d-flex align-items-center pb-1">
                            <span
                                class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                <i class="ti ti-note text-danger"></i>
                            </span>
                            <p class="text-dark me-1 fs-3 mb-0">
                                Total in
                            </p>
                            <p class="fs-3 mb-0">
                                {{ date('Y') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-3">
                        <div class="d-flex justify-content-end">
                            <div class="text-white rounded-circle p-6 d-flex align-items-center justify-content-center" style="background: var(--red)">
                                <i class="ti ti-folders fs-6"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card m-0">
            <div class="card-body">
                <div class="row align-items-start">
                    <div class="col-md-8 col">
                        <a href="{{ route('admin.award_achievement') }}">
                            <h5 class="card-title mb-9 fw-semibold">
                                Award & Achievements
                            </h5>
                        </a>
                        <h4 class="fw-semibold mb-3">
                            {{ $award_achievements->count() }}
                        </h4>
                        <div class="d-flex align-items-center pb-1">
                            <span
                                class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                <i class="ti ti-note text-danger"></i>
                            </span>
                            <p class="text-dark me-1 fs-3 mb-0">
                                Total in
                            </p>
                            <p class="fs-3 mb-0">
                                {{ date('Y') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-3">
                        <div class="d-flex justify-content-end">
                            <div class="text-white rounded-circle p-6 d-flex align-items-center justify-content-center" style="background: var(--red)">
                                <i class="ti ti-award fs-6"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col d-flex flex-md-row flex-column gap-md-3">
    <div class="col">
        <div class="card m-0">
            <div class="card-body">
                <div class="row align-items-start">
                    <div class="col-md-8 col">
                        <a href="{{ route('admin.speaking_opportunities') }}">
                            <h5 class="card-title mb-9 fw-semibold">
                                Speaking Opportunities
                            </h5>
                        </a>
                        <h4 class="fw-semibold mb-3">
                            {{ $speaking_opportunities->count() }}
                        </h4>
                        <div class="d-flex align-items-center pb-1">
                            <span
                                class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                <i class="ti ti-note text-danger"></i>
                            </span>
                            <p class="text-dark me-1 fs-3 mb-0">
                                Total in
                            </p>
                            <p class="fs-3 mb-0">
                                {{ date('Y') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-3">
                        <div class="d-flex justify-content-end">
                            <div class="text-white rounded-circle p-6 d-flex align-items-center justify-content-center" style="background: var(--red)">
                                <i class="ti ti-speakerphone fs-6"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card m-0">
            <div class="card-body">
                <div class="row align-items-start">
                    <div class="col-md-8 col">
                        <h5 class="card-title mb-9 fw-semibold">
                            Contact With Me
                        </h5>
                        <h4 class="fw-semibold mb-3">
                            0
                        </h4>
                        <div class="d-flex align-items-center pb-1">
                            <span
                                class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                <i class="ti ti-note text-danger"></i>
                            </span>
                            <p class="text-dark me-1 fs-3 mb-0">
                                Total in
                            </p>
                            <p class="fs-3 mb-0">
                                {{ date('Y') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-3">
                        <div class="d-flex justify-content-end">
                            <div class="text-white rounded-circle p-6 d-flex align-items-center justify-content-center" style="background: var(--red)">
                                <i class="ti ti-file-phone fs-6"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection