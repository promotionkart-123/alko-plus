@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-end">
                <h2 class="mb-0">Edit Product</h2>
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

                    <form method="POST"
                          action="{{ route('admin.update-products', $product->id) }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Title --}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text"
                                   name="title"
                                   class="form-control @error('title') is-invalid @enderror"
                                   value="{{ old('title', $product->title) }}"
                                   required>
                            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <hr>

                        {{-- Sub Title --}}
                        <div class="form-group">
                            <label>Sub Title</label>
                            <input type="text"
                                   name="sub_title"
                                   class="form-control @error('sub_title') is-invalid @enderror"
                                   value="{{ old('sub_title', $product->sub_title) }}">
                            @error('sub_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <hr>

                        {{-- Category --}}
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id"
                                    class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">Select Category</option>
                                @foreach($subcategory as $data)
                                    <option value="{{ $data->id }}"
                                        {{ old('category_id', $product->category_id) == $data->id ? 'selected' : '' }}>
                                        {{ $data->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <hr>

                        {{-- Highlight --}}
                        <div class="form-group">
                            <label>Highlight</label>
                            <div id="highlightEditor" class="editor"></div>
                            <input type="hidden" name="highlight" id="highlight"
                                   value="{{ old('highlight', $product->highlight) }}">
                        </div>

                        <hr>

                        {{-- Description --}}
                        <div class="form-group">
                            <label>Description</label>
                            <div id="descriptionEditor" class="editor"></div>
                            <input type="hidden" name="description" id="description"
                                   value="{{ old('description', $product->description) }}">
                        </div>

                        <hr>

                        {{-- Specification --}}
                        <div class="form-group">
                            <label>Specification</label>
                            <div id="specificationEditor" class="editor"></div>
                            <input type="hidden" name="specification" id="specification"
                                   value="{{ old('specification', $product->specification) }}">
                        </div>

                        <hr>

                        {{-- Application --}}
                        <div class="form-group">
                            <label>Application</label>
                            <div id="applicationEditor" class="editor"></div>
                            <input type="hidden" name="application" id="application"
                                   value="{{ old('application', $product->application) }}">
                        </div>

                        <hr>

                        {{-- Banner Image --}}
                        <div class="form-group">
                            <label>Banner Image</label>

                            @if($product->image)
                                <div id="bannerPreview" class="mb-2">
                                    <img src="{{ asset('/assets/images/products/'.$product->image) }}" height="80">
                                    <button type="button"
                                            class="btn btn-sm btn-danger ml-2 remove-banner">
                                        Remove
                                    </button>
                                </div>
                                <input type="hidden" name="remove_image" id="remove_image" value="0">
                            @endif

                            <input type="file"
                                   name="image"
                                   class="form-control @error('image') is-invalid @enderror">
                            @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <hr>

                        {{-- Sub Images --}}
                        <div class="form-group">
                            <label>Sub Images</label>

                            @if($product->sub_images)
                                <div class="mb-2 d-flex flex-wrap">
                                    @foreach($product->sub_images as $img)
                                        <div class="position-relative mr-2 mb-2 sub-image-box">
                                            <img src="{{ asset('/assets/images/products/subimages/'.$img) }}"
                                                 height="60">

                                            <button type="button"
                                                    class="btn btn-danger btn-sm position-absolute"
                                                    style="top:-5px; right:-5px;"
                                                    data-image="{{ $img }}">
                                                ×
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <input type="file"
                                   name="sub_images[]"
                                   multiple
                                   class="form-control @error('sub_images.*') is-invalid @enderror">

                            <div id="removedSubImages"></div>

                            @error('sub_images.*')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <hr>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('admin.products') }}" class="btn btn-light">Cancel</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    function initQuill(editorId, inputId, height = 200) {
        const editor = document.getElementById(editorId);
        const input = document.getElementById(inputId);

        if (!editor || !input) return;

        editor.style.height = height + 'px';

        const quill = new Quill(editor, {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ header: [1, 2, 3, false] }],
                    ['bold', 'italic', 'underline'],
                    [{ list: 'ordered' }, { list: 'bullet' }],
                    [{ align: [] }],
                    ['link'],
                    ['clean']
                ]
            }
        });

        if (input.value) {
            quill.root.innerHTML = input.value;
        }

        editor.closest('form').addEventListener('submit', function () {
            input.value = quill.root.innerHTML;
        });
    }

    initQuill('highlightEditor', 'highlight', 150);
    initQuill('descriptionEditor', 'description');
    initQuill('specificationEditor', 'specification');
    initQuill('applicationEditor', 'application');

    /* Remove banner image */
    const removeBannerBtn = document.querySelector('.remove-banner');
    if (removeBannerBtn) {
        removeBannerBtn.addEventListener('click', function () {
            document.getElementById('remove_image').value = 1;
            document.getElementById('bannerPreview').style.display = 'none';
        });
    }

    /* Remove sub images */
    document.querySelectorAll('.sub-image-box button').forEach(btn => {
        btn.addEventListener('click', function () {
            const image = this.dataset.image;

            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'remove_sub_images[]';
            input.value = image;

            document.getElementById('removedSubImages').appendChild(input);
            this.closest('.sub-image-box').remove();
        });
    });

});
</script>
@endsection
