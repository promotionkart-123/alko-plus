@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

    {{-- Header --}}
    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
            <h2 class="mb-0">Sub Category Details</h2>
            <a href="{{ route('admin.add-sub-category') }}" class="btn btn-info">
                Add
            </a>
        </div>
    </div>

    {{-- Card --}}
    <div class="card">
        <div class="card-body">

            {{-- Flash Messages --}}
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th width="20%">Image</th>
                            <th>Description</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($subcategories as $subCategory)
                            <tr>
                                <td>{{ $subCategory->id }}</td>
                                <td>{{ $subCategory->name }}</td>

                                {{-- Banner Image --}}
                                <td class="text-center">
                                    @if($subCategory->banner_img && file_exists(public_path($subCategory->banner_img)))
                                        <img src="{{ asset($subCategory->banner_img) }}"
                                             alt="{{ $subCategory->name }}"
                                             style="width: 100px; height: 100px; object-fit: cover;"
                                             class="img-thumbnail">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>

                                <td>{{ $subCategory->description ?? '-' }}</td>

                                {{-- Actions --}}
                                <td class="text-center">
                                    {{-- Edit --}}
                                    <a href="{{ route('admin.edit-sub-category', $subCategory->id) }}"
                                       class="btn btn-sm btn-info mb-1">
                                        <i class="mdi mdi-border-color"></i>
                                    </a>

                                    {{-- Delete --}}
                                    <form action="{{ route('admin.delete-sub-category', $subCategory->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete this sub category?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger mb-1">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">
                                    No sub categories found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="mt-3">
                {{ $subcategories->links() }}
            </div>

        </div>
    </div>
</div>
@endsection
