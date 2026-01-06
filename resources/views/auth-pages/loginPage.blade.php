<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Alko Plus Login</title>

  <link rel="stylesheet" href="{{ asset('assets/admin/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/vendors/base/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.png') }}" />
</head>

<body>
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">

            <div class="brand-logo text-center">
              <img src="{{ asset('assets/images/logos/alko-logo.png') }}" alt="logo">
            </div>

            <h4>Hello! let's get started</h4>
            <h6 class="font-weight-light">Sign in to continue.</h6>

            <!-- Session Status -->
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif

            <form class="pt-3" method="POST" action="{{ route('login') }}">
              @csrf

              <!-- Email -->
              <div class="form-group">
                <input
                  type="email"
                  name="email"
                  value="{{ old('email') }}"
                  class="form-control form-control-lg @error('email') is-invalid @enderror"
                  placeholder="Email address"
                  required
                  autofocus
                >
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Password -->
              <div class="form-group">
                <input
                  type="password"
                  name="password"
                  class="form-control form-control-lg @error('password') is-invalid @enderror"
                  placeholder="Password"
                  required
                >
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Remember Me -->
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input
                      type="checkbox"
                      name="remember"
                      class="form-check-input"
                      {{ old('remember') ? 'checked' : '' }}
                    >
                    Keep me signed in
                  </label>
                </div>

                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="auth-link text-black">
                    Forgot password?
                  </a>
                @endif
              </div>

              <!-- Submit -->
              <div class="mt-3">
                <button
                  type="submit"
                  class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                  SIGN IN
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('assets/admin/vendors/base/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('assets/admin/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/admin/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/admin/js/template.js') }}"></script>
</body>
</html>
