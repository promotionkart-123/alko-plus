<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Forgot Password | Alko Plus</title>

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

            <h4>Forgot your password?</h4>
            <h6 class="font-weight-light">
              Enter your email to receive a reset link.
            </h6>

            <!-- Session Status -->
            @if (session('status'))
              <div class="alert alert-success mt-3">
                {{ session('status') }}
              </div>
            @endif

            <form class="pt-3" method="POST" action="{{ route('password.email') }}">
              @csrf

              <!-- Email -->
              <div class="form-group">
                <input
                  type="email"
                  name="email"
                  class="form-control form-control-lg @error('email') is-invalid @enderror"
                  placeholder="Email address"
                  required
                  autofocus
                >
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Submit -->
              <div class="mt-3">
                <button
                  type="submit"
                  class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                  EMAIL PASSWORD RESET LINK
                </button>
              </div>

              <!-- Back to login -->
              <div class="text-center mt-4 font-weight-light">
                Remembered your password?
                <a href="{{ route('login') }}" class="text-primary">Sign in</a>
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
