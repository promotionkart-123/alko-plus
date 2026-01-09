@extends('layout.main')
@section('content')

    <div class="header-title ken-burn-center white" data-parallax="scroll" data-position="top" data-natural-height="650"
        data-natural-width="1920" data-image-src="{{ asset('assets/images/bg-2.jpg') }}">
        <div class="container" style="margin-top: 0px; opacity: 1;">
            <div class="title-base" style="margin-top: 113.5px;">
                <hr class="anima">
                <h1>{{ $product->title }}</h1>
                <p><a href="{{ route('home') }}">Home</a> / Products / {{ $product->title }}</p>
            </div>
        </div>
    </div>

    <div class="section-empty section-item">
        <div class="container content">
            <div class="row">
                {{-- Product Images --}}
                <div class="col-md-6 col-sm-12">
                    <h1>{{ $product->title }}</h1>
                    <h3>{{ $product->sub_title }}</h3>
                    <hr class="space m">

                    {{-- Main Image --}}
                    <a class="img-box" href="#">
                        <img src="{{ asset($product->image ? 'assets/images/products/' . $product->image : 'assets/images/gallery/default.jpg') }}"
                            alt="{{ $product->title }}">
                    </a>

                    {{-- Sub Images Carousel --}}
                    @if($product->sub_images && count($product->sub_images) > 0)
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="flexslider carousel gallery white visible-dir-nav nav-inner"
                                    data-options="minWidth:200,itemMargin:15,numItems:3,controlNav:true,directionNav:true">
                                    <ul class="slides">
                                        @foreach($product->sub_images as $subImg)
                                            <li>
                                                <a class="img-box lightbox" data-lightbox-anima="fade-top"
                                                    href="{{ asset('assets/images/products/subimages/' . $subImg) }}">
                                                    <img src="{{ asset('assets/images/products/subimages/' . $subImg) }}"
                                                        alt="{{ $product->title }}">
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>

                {{-- Product Info --}}
                <div class="col-md-6 col-sm-12 boxed-inverse shadow-2">
                    <div class="list-group latest-post-list list-blog">
                        <p class="list-group-item active">{{ $product->title }}</p>
                        <p class="list-group-item active">Highlights :</p>
                        <div class="list-group-item">
                            {!! $product->highlight !!}
                        </div>

                        <hr class="space m">
                        <p class="list-group-item active">Share :</p>
                        <div class="btn-group social-group">
                            <a target="_blank" href="#" data-social="share-facebook" data-toggle="tooltip"
                                title="Facebook"><i class="fa fa-facebook text-s circle"></i></a>
                            <a target="_blank" href="#" data-social="share-twitter" data-toggle="tooltip" title="Twitter"><i
                                    class="fa fa-twitter text-s circle"></i></a>
                            <a target="_blank" href="#" data-social="share-google" data-toggle="tooltip" title="Google+"><i
                                    class="fa fa-google-plus text-s circle"></i></a>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('product-enquiry-form', ['product_id' => $product->id]) }}"><button class="btn btn-primary">Enquire Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Description --}}
            <div class="row">
                <div class="col-sm-12">
                    <hr class="space m">
                    <h2>Description</h2>
                    <p>{!! $product->description !!}</p>
                    <hr class="space visible-sm">
                </div>
            </div>

            {{-- Specifications --}}
            <section class="description specification">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Product Specifications</h4>
                        @if($product->specification_file)
                            <a href="{{ asset('assets/files/' . $product->specification_file) }}" class="btn download mb-4"><i
                                    class="fa-solid fa-download"></i> Download Specifications</a>
                        @endif
                    </div>

                    <div class="descriptarea">
                        <div class="contentarea">
                            {!! $product->specification !!}
                        </div>
                    </div>

                    {{-- Application --}}
                    @if($product->application)
                        <div class="mt-4">
                            <h4>Application</h4>
                            {!! $product->application !!}
                        </div>
                    @endif
                </div>
            </section>
        </div>
    </div>

@endsection