@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-end">
                <h2 class="mb-0">Settings</h2>
            </div>
        </div>
    </div>

    <!-- Settings Cards -->
    <div class="row">

        <!-- Home Banner -->
        <div class="col-md-4 grid-margin stretch-card">
            <a href="{{ route('admin.banner-setting') }}" class="text-decoration-none">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Home Page Banner</h4>
                        <div class="media">
                            <i class="mdi mdi-image-multiple icon-md text-info mr-3"></i>
                            <div class="media-body">
                                <p class="card-text text-muted">
                                    Manage homepage banners and promotional images.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Contact Details -->
        <div class="col-md-4 grid-margin stretch-card">
            <a href="{{ route('admin.contact-setting') }}" class="text-decoration-none">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Contact Details</h4>
                        <div class="media">
                            <i class="mdi mdi-phone icon-md text-success mr-3"></i>
                            <div class="media-body">
                                <p class="card-text text-muted">
                                    Update address, phone number, and email.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Profile -->
        <div class="col-md-4 grid-margin stretch-card">
            <a href="{{ route('admin.profile-setting') }}" class="text-decoration-none">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Profile</h4>
                        <div class="media">
                            <i class="mdi mdi-account icon-md text-primary mr-3"></i>
                            <div class="media-body">
                                <p class="card-text text-muted">
                                    Update admin profile and password.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
