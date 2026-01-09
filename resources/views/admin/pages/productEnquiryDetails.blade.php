@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Enquiry #{{ $enquiry->id }}</h4>
                    <small class="text-white-75">Submitted On: {{ $enquiry->created_at->format('d M Y, h:i A') }}</small>
                </div>

                <div class="card-body">
                    
                    {{-- Customer & Product Info --}}
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h6 class="text-muted">Customer Details</h6>
                            <p class="mb-1"><strong>{{ $enquiry->name }}</strong></p>
                            <p class="mb-1">{{ $enquiry->email }}</p>
                            <p class="mb-1">{{ $enquiry->phone ?? '-' }}</p>
                        </div>

                        <div class="col-sm-6 text-sm-right">
                            <h6 class="text-muted">Product</h6>
                            <p class="mb-1">{{ $enquiry->product?->title ?? '-' }}</p>
                        </div>
                    </div>

                    <hr>

                    {{-- Company & Address --}}
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <p><strong>Company:</strong> {{ $enquiry->company_name ?? '-' }}</p>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                            <p><strong>Address:</strong> {{ $enquiry->address ?? '-' }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <p><strong>City:</strong> {{ $enquiry->city ?? '-' }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><strong>State:</strong> {{ $enquiry->state ?? '-' }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p><strong>Zip:</strong> {{ $enquiry->zip_code ?? '-' }}</p>
                        </div>
                    </div>

                    <hr>

                    {{-- Message / Query --}}
                    <div class="mb-4">
                        <h6 class="text-muted">Message</h6>
                        <p class="bg-light p-3 rounded">{!! nl2br(e($enquiry->query)) !!}</p>
                    </div>

                </div>

                <div class="card-footer text-right">
                    <a href="{{ route('admin.product-enquiry') }}" class="btn btn-secondary">
                        Back
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
