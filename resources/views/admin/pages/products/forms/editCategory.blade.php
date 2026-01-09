@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

    <div class="row">
        <div class="col-md-12 grid-margin">
            <h2 class="mb-0">Edit Category</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('admin.update-category', $category->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input 
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                id="name"
                                name="name"
                                value="{{ old('name', $category->name) }}"
                                placeholder="Category Name"
                                required
                            >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <a href="{{ route('admin.category') }}" class="btn btn-light">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
