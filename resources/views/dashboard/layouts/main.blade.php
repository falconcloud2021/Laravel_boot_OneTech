<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>OneTech Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
{{-- <meta property="og:url" content="https://demo.themesberg.com/volt-pro"> --}}
<meta property="og:title" content="Dashboard">
<meta property="og:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
<meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
<meta property="twitter:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="public/dashboard/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="public/dashboard/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="public/dashboard/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="public/dashboard/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="public/dashboard/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Sweet Alert -->
<link type="text/css" href="public/dashboard/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
<!-- Notyf -->
<link type="text/css" href="public/dashboard/vendor/notyf/notyf.min.css" rel="stylesheet">
<!-- Volt CSS -->
<link type="text/css" href="{{ asset('public/dashboard/css/volt.css') }}" rel="stylesheet">
<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->      
  <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="#">
        <img class="navbar-brand-dark" src="public/dashboard/assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="public/dashboard/assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
  </nav>
            
  @include('dashboard.partials.sidebar-menu')

<main class="content">

  @include('dashboard.partials.navbar-top')
  
  @yield('content')

  <div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
    <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
        <span class="fw-bold d-inline-flex align-items-center h6">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
            Settings
        </span>
    </div>
  </div>

  <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
    <div class="row">
      <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
        <p class="mb-0 text-center text-lg-start">© 2023-<span class="current-year"></span> <a class="text-primary fw-normal" href="#" target="_blank">Dashboard</a></p>
      </div>
      <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
        <!-- List -->
        <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
            <li class="list-inline-item px-0 px-sm-2">
                <a href="#">Main</a>
            </li>
            <li class="list-inline-item px-0 px-sm-2">
                <a href="#">Products</a>
            </li>
            <li class="list-inline-item px-0 px-sm-2">
                <a href="#">Blog</a>
            </li>
            <li class="list-inline-item px-0 px-sm-2">
                <a href="#">Contact</a>
            </li>
        </ul>
      </div>
    </div>
  </footer>
</main>

<!-- Core -->
<script src="public/dashboard/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="public/dashboard/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Vendor JS -->
<script src="public/dashboard/vendor/onscreen/dist/on-screen.umd.min.js"></script>
<!-- Slider -->
<script src="public/dashboard/vendor/nouislider/distribute/nouislider.min.js"></script>
<!-- Smooth scroll -->
<script src="public/dashboard/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<!-- Charts -->
<script src="public/dashboard/vendor/chartist/dist/chartist.min.js"></script>
<script src="public/dashboard/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Datepicker -->
<script src="public/dashboard/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
<!-- Sweet Alerts 2 -->
<script src="public/dashboard/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<!-- Vanilla JS Datepicker -->
<script src="public/dashboard/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
<!-- Notyf -->
<script src="public/dashboard/vendor/notyf/notyf.min.js"></script>
<!-- Simplebar -->
<script src="public/dashboard/vendor/simplebar/dist/simplebar.min.js"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Volt JS -->
<script src="public/dashboard/assets/js/volt.js"></script>

    
</body>

</html>
