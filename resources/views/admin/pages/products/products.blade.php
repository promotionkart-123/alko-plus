@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
            <h2>Products</h2>
            <a href="{{ route('admin.add-products') }}" class="btn btn-info">Add Product</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>
                                            @if($product->image)
                                                <img src="{{ asset('assets/images/products/' . $product->image) }}" 
                                                     alt="{{ $product->title }}" width="50">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $product->category ? $product->category->name : 'N/A' }}</td>
                                        <td>{{ $product->created_at->format('d M Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.show-products-details', $product->id) }}" class="btn btn-sm btn-info"><i class="mdi mdi-eye"></i></a>
                                            <a href="{{ route('admin.edit-products', $product->id) }}" class="btn btn-sm btn-info"><i class="mdi mdi-pencil"></i></a>
                                            <form action="{{ route('admin.delete-products', $product->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="mdi mdi-delete"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No Products Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
