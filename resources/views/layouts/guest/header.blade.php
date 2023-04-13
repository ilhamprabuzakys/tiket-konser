<!-- Start Header Area -->
<header class="header">
   <div class="navbar-area">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand logo" href="{{ route('index') }}">
                     <img class="logo1" src="assets/images/logo/logo.svg" alt="Logo" />
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                     data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                     aria-expanded="false" aria-label="Toggle navigation">
                     <span class="toggler-icon"></span>
                     <span class="toggler-icon"></span>
                     <span class="toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                     <ul id="nav" class="navbar-nav">
                        <li class="nav-item">
                           <a class="active" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                           <a href="#ticket">Ticket</a>
                        </li>
                        <li class="nav-item"><a href="#history">History</a></li>
                     </ul>
                  </div>
                  <!-- navbar collapse -->
                  <div class="ml-auto button">
                     <a href="{{ route('login') }}" class="btn">Sign In Now</a>
                  </div>
               </nav>
               <!-- navbar -->

            </div>
         </div>
         <!-- row -->
      </div>
      <!-- container -->
   </div>
   <!-- navbar area -->
</header>
<!-- End Header Area -->
