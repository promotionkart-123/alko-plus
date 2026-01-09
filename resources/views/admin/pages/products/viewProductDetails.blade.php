@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

    <div class="row mb-3">
        <div class="col-md-8">
            <h2 class="mb-0">{{ $product->title }}</h2>
            <small class="text-muted">Detailed Product Information</small>
        </div>
        <div class="col-md-4 text-md-right">
            <a href="{{ route('admin.products') }}" class="btn btn-secondary">
                Back
            </a>
        </div>
    </div>

    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Product Overview</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    @if ($product->image)
                        <img src="{{ asset('assets/images/products/'.$product->image) }}"
                             class="img-fluid rounded border"
                             alt="Product Image">
                    @else
                        <span class="text-muted">No Image Available</span>
                    @endif
                </div>

                <div class="col-md-8">
                    <table class="table table-borderless mb-0">
                        <tbody>
                            <tr>
                                <th width="35%">Title</th>
                                <td>{{ $product->title }}</td>
                            </tr>
                            <tr>
                                <th>Sub Title</th>
                                <td>{{ $product->sub_title ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $product->subcategory->name ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Highlights</th>
                                <td>{!! $product->highlight ?? '-' !!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3 shadow-sm">
                <div class="card-header bg-light">
                    <strong>Description</strong>
                </div>
                <div class="card-body">
                    <p class="mb-0">{!! $product->description ?? '-' !!}</p>
                </div>
            </div>

            <div class="card mb-3 shadow-sm">
                <div class="card-header bg-light">
                    <strong>Specification</strong>
                </div>
                <div class="card-body">
                    <p class="mb-0">{!! $product->specification ?? '-' !!}</p>
                </div>
            </div>

            @if ($product->application)
                <div class="card mb-3 shadow-sm">
                    <div class="card-header bg-light">
                        <strong>Application</strong>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">{!! $product->application !!}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>

    @if (!empty($product->sub_images))
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Gallery</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($product->sub_images as $img)
                        <div class="col-md-3 mb-3">
                            <img src="{{ asset('assets/images/products/subimages/'.$img) }}"
                                 class="img-fluid rounded border"
                                 alt="Sub Image">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

</div>
@endsection
