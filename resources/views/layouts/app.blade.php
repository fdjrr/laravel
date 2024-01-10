<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>{{ config('app.name') }} &ndash; {{ $title }}</title>
  <link rel="shortcut icon" href="{{ asset('static/logo-small.svg') }}" type="image/x-icon">

  <!-- CSS files -->
  <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('dist/css/demo.min.css') }}" rel="stylesheet" />
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
      font-feature-settings: "cv03", "cv04", "cv11";
    }
  </style>

  @vite(['resources/css/app.css'])
</head>

<body>
  <script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>
  <div class="page">
    <x-sidebar></x-sidebar>

    <x-navbar></x-navbar>

    <div class="page-wrapper">
      {{ $slot }}
    </div>

  </div>

  <!-- Libs JS -->
  <script src="{{ asset('dist/libs/tom-select/dist/js/tom-select.base.min.js') }}"></script>
  <script src="{{ asset('dist/libs/litepicker/dist/litepicker.js') }}"></script>

  <!-- Tabler Core -->
  <script src="{{ asset('dist/js/tabler.min.js') }}"></script>
  <script src="{{ asset('dist/js/demo.min.js') }}"></script>

  @vite(['resources/js/app.js'])
</body>

</html>