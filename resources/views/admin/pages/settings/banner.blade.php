@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-end">
                <h2 class="mb-0">Banner Settings</h2>
            </div>
        </div>
    </div>

    <!-- Alert message -->
    @if(session('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('admin.banner.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Banner Upload</label>
                            <input type="file" name="banner" class="form-control">
                        </div>

                        <!-- Show current banner -->
                       @if(!empty($banner->banner))
                           <div class="form-group mt-3">
                               <label>Current Banner:</label><br>
                               <img src="{{ asset($banner->banner) }}" alt="Banner" style="max-width:300px;">
                           </div>
                       @endif


                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Auto-dismiss success -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const alert = document.getElementById('success-alert');
    if(alert) {
        setTimeout(() => { alert.style.display = 'none'; }, 3000);
    }
});
</script>
@endsection
