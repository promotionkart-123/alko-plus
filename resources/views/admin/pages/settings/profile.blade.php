@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">

    <!-- Page Header -->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-end">
                <h2 class="mb-0">Profile Settings</h2>
            </div>
        </div>
    </div>

    <!-- Profile Form -->
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    {{-- Success Message --}}
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form  class="forms-sample" method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input 
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                id="name"
                                name="name"
                                value="{{ old('name', auth()->user()->name) }}"
                                placeholder="Name"
                                required
                            >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input 
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                id="email"
                                name="email"
                                value="{{ old('email', auth()->user()->email) }}"
                                placeholder="Email"
                                required
                            >
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <h5 class="mb-3">Password Section</h5>
                        
                        <!-- Current Password -->
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input
                                type="password"
                                class="form-control @error('current_password') is-invalid @enderror"
                                id="current_password"
                                name="current_password"
                                placeholder="Enter current password"
                            >
                            @error('current_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- New Password -->
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                id="password"
                                name="password"
                                placeholder="Enter new password"
                            >
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password_confirmation">Confirm New Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Confirm new password"
                            >
                        </div>
                        <hr>
                        <h5 class="mb-3">Profile Section</h5>
                         <div class="form-group">
                            <label for="image">Profile Image</label>
                            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">                                              
                             @error('image')
                                 <div class="invalid-feedback">{{ $message }}</div>
                             @enderror
                      
                             @if(auth()->user()->image)
                                 <div class="mt-2">
                                     <img  src="{{ asset('storage/' . auth()->user()->image) }}" alt="Profile Image" width="80" class="rounded"
                                     >
                                 </div>
                             @endif
                         </div>
                        <button type="submit" class="btn btn-primary mr-2">
                            Update Profile
                        </button>
                        <a href="{{ route('admin.profile-setting') }}" class="btn btn-light">
                            Cancel
                        </a>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
