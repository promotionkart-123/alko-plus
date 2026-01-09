@extends('layout.main')
@section('content')

<div class="header-title ken-burn-center white" data-parallax="scroll" data-position="top"
     data-natural-height="650" data-natural-width="1920" data-image-src="{{ asset('assets/images/bg-2.jpg') }}">
    <div class="container" style="margin-top: 0px; opacity: 1;">
        <div class="title-base" style="margin-top: 113.5px;">
            <hr class="anima">
            <h1>Enquiry</h1>
            <p><a href="{{ route('home') }}">Home</a> / Enquiry</p>
        </div>
    </div>
</div>

<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col-md-8">
                <h2>Send a Product Enquiry</h2>
                <p class="text-color no-margins">We reply ASAP</p>
                <hr class="space s" />

                @php
                    $product_id = request()->query('product_id');
                @endphp

                <form action="{{ route('admin.product-enquiry-store') }}" method="POST">
                    @csrf

                    {{-- Hidden product id --}}
                    <input type="hidden" name="product_id" value="{{ $product_id }}">

                    {{-- Name & Email --}}
                    <div class="row">
                        <div class="col-md-6">
                            <input id="name" name="name" value="{{ old('name') }}" placeholder="Name" type="text"
                                   class="form-control @error('name') is-invalid @enderror">
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="col-md-6">
                            <input id="email" name="email" value="{{ old('email') }}" placeholder="Email" type="email"
                                   class="form-control @error('email') is-invalid @enderror">
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <hr class="space s" />

                    {{-- Phone --}}
                    <div class="row">
                        <div class="col-md-6">
                            <input id="phone" name="phone" value="{{ old('phone') }}" placeholder="Phone" type="text"
                                   class="form-control @error('phone') is-invalid @enderror">
                            @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        {{-- Company Name --}}
                        <div class="col-md-6">
                            <input id="company_name" name="company_name" value="{{ old('company_name') }}"
                                   placeholder="Company Name" type="text"
                                   class="form-control @error('company_name') is-invalid @enderror">
                            @error('company_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <hr class="space s" />

                    {{-- Address --}}
                    <div class="row">
                        <div class="col-md-12">
                            <input id="address" name="address" value="{{ old('address') }}" placeholder="Address"
                                   type="text"
                                   class="form-control @error('address') is-invalid @enderror">
                            @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <hr class="space s" />

                    {{-- City, State, Zip --}}
                    <div class="row">
                        <div class="col-md-4">
                            <input id="city" name="city" value="{{ old('city') }}" placeholder="City" type="text"
                                   class="form-control @error('city') is-invalid @enderror">
                            @error('city')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="col-md-4">
                            <input id="state" name="state" value="{{ old('state') }}" placeholder="State" type="text"
                                   class="form-control @error('state') is-invalid @enderror">
                            @error('state')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="col-md-4">
                            <input id="zip_code" name="zip_code" value="{{ old('zip_code') }}" placeholder="Zip Code"
                                   type="text"
                                   class="form-control @error('zip_code') is-invalid @enderror">
                            @error('zip_code')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <hr class="space s" />

                    {{-- Query / Message --}}
                    <div class="form-group">
                        <textarea id="query" name="query"
                                  class="form-control @error('query') is-invalid @enderror"
                                  placeholder="Your message">{{ old('query') }}</textarea>
                        @error('query')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <hr class="space s" />

                    <button class="anima-button btn-border btn-sm btn" type="submit">
                        <i class="fa fa-mail-reply-all"></i> Send Enquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
