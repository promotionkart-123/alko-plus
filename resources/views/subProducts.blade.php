@extends('layout.main')
@section('content')

<div class="header-title ken-burn-center white" 
     data-parallax="scroll" 
     data-position="top" 
     data-natural-height="650"
     data-natural-width="1920" 
     data-image-src="{{ asset('assets/images/bg-2.jpg') }}">
    <div class="container" style="margin-top: 0px; opacity: 1;">
        <div class="title-base" style="margin-top: 113.5px;">
            <hr class="anima">
            <h1>{{ $subcategory->name ?? 'Products' }}</h1>
            <p><a href="{{ route('home') }}">Home</a> / Products / {{ $subcategory->name }}</p>
        </div>
    </div>
</div>

<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col">
                <div class="maso-box row" style="position: relative;">
                    @forelse ($products as $prod)
                        <div class="maso-item col-md-6" style="position: relative; visibility: visible;">
                            <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img-box">
                                            <img src="{{ asset($prod->image ? 'assets/images/products/' . $prod->image : 'assets/images/gallery/default.jpg') }}" 
                                                 alt="{{ $prod->title }}" style="width: 100%; max-width: 100%;">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h3>{{ $prod->title }}</h3>
                                        <hr class="anima">
                                        <p>{!!  $prod->description ?? '-' !!}</p>
                                        <a class="btn-text" href="{{ route('show.product-details', $prod->id) }}">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No products found in this subcategory.</p>
                    @endforelse

                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
