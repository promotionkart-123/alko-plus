@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

 
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-end">
                <h2 class="mb-0">Contact Page Setting</h2>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('admin.contact.setting.store') }}">
                        @csrf

                        <div class="form-group">
                            <label>Contact No</label>
                            <input type="text" name="contact_no" class="form-control"
                                value="{{ old('contact_no', $contact->contact_no ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email', $contact->email ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control"
                                rows="4">{{ old('address', $contact->address ?? '') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const alert = document.getElementById('success-alert');
        if(alert) {
            setTimeout(() => {
                alert.classList.remove('show');
                alert.classList.add('fade');
                alert.style.display = 'none';
            }, 3000);
        }
    });
</script>
@endsection
