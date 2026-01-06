<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
   @include('includes.css')
</head>
<body>
  @include('includes.header')
  @yield('content') 
  @include('includes.footer')
  @include('includes.script')
</body>
</html>
