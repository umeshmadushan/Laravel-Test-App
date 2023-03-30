<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../../assets/img/favicon.png">
<title>
    Argon Dashboard 2 PRO by Creative Tim
  </title>


<link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />

<meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, Argon Dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, soft design, soft dashboard bootstrap 5 dashboard">
<meta name="description" content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@creativetim">
<meta name="twitter:title" content="Argon Dashboard PRO by Creative Tim">
<meta name="twitter:description" content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
<meta name="twitter:creator" content="@creativetim">
<meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/argon-dashboard-pro.jpg">

<meta property="fb:app_id" content="655968634437471">
<meta property="og:title" content="Argon Dashboard PRO by Creative Tim" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/landing" />
<meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/argon-dashboard-pro.jpg" />
<meta property="og:description" content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
<meta property="og:site_name" content="Creative Tim" />

@include('libraries.styles')


<style>
    .async-hide {
      opacity: 0 !important
    }
  </style>


</head>
<body class="g-sidenav-show   bg-gray-100">


<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div class="min-height-300 bg-primary position-absolute w-100"></div>

@include('components.navbar')

@include('components.slidebar')

<main class="main-content position-relative border-radius-lg ">

      

<div class="container-fluid py-4">

      @yield('content')

      @include('components.fotter')

</div>
</main>
{{-- <div class="fixed-plugin">
<a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
<i class="fa fa-cog py-2"> </i>
</a>
<div class="card shadow-lg">
<div class="card-header pb-0 pt-3 bg-transparent ">
<div class="float-start">
<h5 class="mt-3 mb-0">Argon Configurator</h5>
<p>See our dashboard options.</p>
</div>
<div class="float-end mt-4">
<button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
<i class="fa fa-close"></i>
</button>
</div>

</div>
<hr class="horizontal dark my-1">
<div class="card-body pt-sm-3 pt-0 overflow-auto">

<div>
<h6 class="mb-0">Sidebar Colors</h6>
</div>
<a href="javascript:void(0)" class="switch-trigger background-color">
<div class="badge-colors my-2 text-start">
<span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
<span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
<span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
<span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
<span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
<span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
</div>
</a>

<div class="mt-3">
<h6 class="mb-0">Sidenav Type</h6>
<p class="text-sm">Choose between 2 different sidenav types.</p>
</div>
<div class="d-flex">
<button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
<button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
</div>
<p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>

<div class="d-flex my-3">
<h6 class="mb-0">Navbar Fixed</h6>
<div class="form-check form-switch ps-0 ms-auto my-auto">
<input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
</div>
</div>
<hr class="horizontal dark mb-1">
<div class="d-flex my-4">
<h6 class="mb-0">Sidenav Mini</h6>
<div class="form-check form-switch ps-0 ms-auto my-auto">
<input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
</div>
</div>
<hr class="horizontal dark my-sm-4">
<div class="mt-2 mb-5 d-flex">
<h6 class="mb-0">Light / Dark</h6>
<div class="form-check form-switch ps-0 ms-auto my-auto">
<input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
</div>
</div>
<a class="btn btn-primary w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro">Buy now</a>
<a class="btn btn-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free demo</a>
<a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard">View documentation</a>
<div class="w-100 text-center">
<a class="github-button" href="https://github.com/creativetimofficial/ct-argon-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
<h6 class="mt-3">Thank you for sharing!</h6>
<a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
<i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
</a>
<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
<i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
</a>
</div>
</div>
</div>
</div> --}}



@include('libraries.scripts')


</body>
</html>