<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>{{ $title . ' | ' . config('app.name') }}</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="{{ asset('favicon.png') }}" rel="icon">
   {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

   <!-- Google Fonts -->
   <link href="https://fonts.gstatic.com" rel="preconnect">
   <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">

   @include('layouts.dashboard.css')

   <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header ======= -->
   @include('layouts.dashboard.header')
   <!-- End Header -->

   <!-- ======= Sidebar ======= -->
   @include('layouts.dashboard.sidebar')
   <!-- End Sidebar-->

   <!-- ======= Main ======= -->
   <main id="main" class="main">

      <div class="pagetitle">
         <h1>{{ $title }}</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
               @yield('breadcrumb')

            </ol>
         </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
         @yield('content')
      </section>

   </main>
   <!-- End #main -->

   <!-- ======= Footer ======= -->
   @include('layouts.dashboard.footer')
   <!-- End Footer -->
   @include('layouts.dashboard.modal.logout')

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

   @include('layouts.dashboard.script')
</body>

</html>
