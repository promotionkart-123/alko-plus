@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

    {{-- Header --}}
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>Welcome back, {{ auth()->user()->name }}</h2>
            <p class="text-muted">{{ \Carbon\Carbon::now()->toDayDateTimeString() }}</p>
        </div>
    </div>

    {{-- Statistics Cards --}}
    <div class="row">
        <div class="col-md-3 grid-margin">
            <div class="card text-white bg-primary">
              <a href="{{ route('admin.products')}}" style="text-decoration:none;color:white">
                <div class="card-body">
                    <h5>Total Products</h5>
                    <h2>{{ $products ?? 0 }}</h2>
                </div>
                </a>
            </div>
        </div>

        <div class="col-md-3 grid-margin">
            <div class="card text-white bg-success">
              <a href="{{ route('admin.category')}}" style="text-decoration:none;color:white">
                <div class="card-body">
                    <h5>Categories</h5>
                    <h2>{{ $category ?? 0 }}</h2>
                </div>
                </a>
            </div>
        </div>

        <div class="col-md-3 grid-margin">
            <a href="{{ route('admin.contact-enquiry')}}" style="text-decoration:none;color:white">
              <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5>Enquiry</h5>
                    <h2>{{ $enquiry ?? 0 }}</h2>
                </div>
                </a>
            </div>
        </div>

        <div class="col-md-3 grid-margin">
            <div class="card text-white bg-danger">
               <a href="{{ route('admin.career-enquiry')}}" style="text-decoration:none;color:white">
                <div class="card-body">
                    <h5>Career Enquiry</h5>
                    <h2>{{ $career ?? 0 }}</h2>
                </div>
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
