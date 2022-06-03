<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.partials.head_admin')
</head>
<body>

@include('layout.partials.header_admin')
@include('layout.partials.nav_admin')

@yield('content')
@include('layout.partials.footer_admin-scripts')
  </body>
</html>