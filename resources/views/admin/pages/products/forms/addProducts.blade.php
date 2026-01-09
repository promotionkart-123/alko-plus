@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-end">
                <h2 class="mb-0">Add Product</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
           <div class="card">
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form class="forms-sample" method="POST" action="{{ route('admin.store-products') }}" enctype="multipart/form-data">
                        @csrf

                        {{-- Title --}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                   value="{{ old('title') }}" required>
                            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <hr>

                        {{-- Sub Title --}}
                        <div class="form-group">
                            <label>Sub Title</label>
                            <input type="text" class="form-control @error('sub_title') is-invalid @enderror"
                                   name="sub_title" value="{{ old('sub_title') }}">
                            @error('sub_title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <hr>

                        {{-- Category --}}
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">Select Category</option>
                                @foreach ($subcategory as $data)
                                    <option value="{{ $data->id }}" {{ old('category_id') == $data->id ? 'selected' : '' }}>
                                        {{ $data->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <hr>

                        {{-- Highlight --}}
                        <div class="form-group">
                            <label>Highlight</label>
                            <div id="highlightEditor" class="editor" style="height:150px; background:white;"></div>
                            <input type="hidden" name="highlight" id="highlight" value="{{ old('highlight') }}">
                            @error('highlight') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <hr>

                        {{-- Description --}}
                        <div class="form-group">
                            <label>Description</label>
                            <div id="descriptionEditor" class="editor" style="height:200px; background:white;"></div>
                            <input type="hidden" name="description" id="description" value="{{ old('description') }}">
                            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <hr>

                        {{-- Specification --}}
                        <div class="form-group">
                            <label>Specification</label>
                            <div id="specificationEditor" class="editor" style="height:200px; background:white;"></div>
                            <input type="hidden" name="specification" id="specification" value="{{ old('specification') }}">
                            @error('specification') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <hr>

                        {{-- Application --}}
                        <div class="form-group">
                            <label>Application</label>
                            <div id="applicationEditor" class="editor" style="height:200px; background:white;"></div>
                            <input type="hidden" name="application" id="application" value="{{ old('application') }}">
                            @error('application') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <hr>

                        {{-- Banner Image --}}
                        <div class="form-group">
                            <label>Banner Image</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        {{-- Sub Images --}}
                        <div class="form-group">
                            <label>Sub Images</label>
                            <input type="file" name="sub_images[]" multiple class="form-control @error('sub_images.*') is-invalid @enderror">
                            @error('sub_images.*') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <hr>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('admin.products') }}" class="btn btn-light">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<script>
    const toolbarOptions = [
        [{ 'header': [1, 2, 3, false] }],
        ['bold', 'italic', 'underline', 'strike'],
        [{ 'color': [] }, { 'background': [] }],
        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
        [{ 'align': [] }],
        ['clean'],
        ['table'],

        ['table-add-row', 'table-add-column', 'table-remove-row', 'table-remove-column']
    ];

    document.addEventListener('DOMContentLoaded', function () {
        const editors = [
            { editorId: 'highlightEditor', inputId: 'highlight' },
            { editorId: 'descriptionEditor', inputId: 'description' },
            { editorId: 'specificationEditor', inputId: 'specification' },
            { editorId: 'applicationEditor', inputId: 'application' },
        ];

        editors.forEach(item => {
            const editorDiv = document.getElementById(item.editorId);
            const hiddenInput = document.getElementById(item.inputId);

            if (editorDiv && hiddenInput) {
                const quill = new Quill(editorDiv, {
                    theme: 'snow',
                    modules: {
                        toolbar: toolbarOptions
                    }
                });

                // Load old value if exists (e.g., after validation error)
                if (hiddenInput.value) {
                    quill.root.innerHTML = hiddenInput.value;
                }

                // Update hidden input before form submit
                editorDiv.closest('form').addEventListener('submit', function () {
                    hiddenInput.value = quill.root.innerHTML;
                });
            }
        });
    });
</script>

@endsection
