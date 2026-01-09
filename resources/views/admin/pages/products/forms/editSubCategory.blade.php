@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

    <div class="row mb-3">
        <div class="col-md-12">
            <h2>Edit Sub Category</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST"
                          action="{{ route('admin.update-sub-category', $subCategory->id) }}"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text"
                                   name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name', $subCategory->name) }}"
                                   required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id"
                                    class="form-control @error('category_id') is-invalid @enderror"
                                    required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $subCategory->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description"
                                      class="form-control @error('description') is-invalid @enderror"
                                      rows="4">{{ old('description', $subCategory->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr>

                        <div class="form-group">
                            <label>Banner Image</label>
                            <input type="file"
                                   name="banner_img"
                                   class="form-control @error('banner_img') is-invalid @enderror"
                                   accept="image/*">
                            @error('banner_img')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        @if($subCategory->banner_img)
                            <div class="mb-3">
                                <label>Current Banner</label><br>
                                <img src="{{ $subCategory->banner_img }}"
                                     width="150"
                                     class="img-thumbnail">
                            </div>
                        @endif

                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>

                        <a href="{{ route('admin.sub-category') }}"
                           class="btn btn-light">
                            Cancel
                        </a>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
