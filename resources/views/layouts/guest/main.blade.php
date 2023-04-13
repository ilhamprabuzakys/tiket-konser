<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

   @include('layouts.guest.css')


   <title>{{ config('app.name') }} {{ ' | ' . $title ?? '' }}</title>
</head>

<body>

   <!-- Preloader -->
   <div class="preloader">
      <div class="preloader-inner">
         <div class="preloader-icon">
            <span></span>
            <span></span>
         </div>
      </div>
   </div>
   <!-- /End Preloader -->

   @include('layouts.guest.header')

   @yield('content')



   @include('layouts.guest.footer')

   <!-- ========================= scroll-top ========================= -->
   <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
   </a>

   <!-- ========================= JS here ========================= -->
   @include('layouts.guest.script')
</body>

</html>
