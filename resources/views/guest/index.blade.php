@extends('layouts.guest.main')
@section('content')
   <!-- Start Hero Area -->
   <section class="hero-area">
      <!-- Single Slider -->
      <div class="hero-inner">
         <div class="container">
            <div class="row ">
               <div class="col-lg-6 co-12">
                  <div class="home-slider">
                     <div class="hero-text">
                        <h1 class="wow fadeInUp" data-wow-delay=".3">Mudahkan<br>Hiburanmu.</h1>
                        <p class="wow fadeInUp" data-wow-delay=".5s">Tinggal buat tiket dan tunggu beberapa saat <br> untuk mengklaim tiket anda.
                           <br>Ayo bergabung gratis.
                        </p>
                        <div class="button wow fadeInUp" data-wow-delay=".7s">
                           <a href="about-us.html" class="btn">Sign In</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/ End Single Slider -->
   </section>
   <!--/ End Hero Area -->

   <!-- Start Contact Area -->
   <section id="ticket" class="ticket section">
      <div class="container">
         <div class="contact-head wow fadeInUp" data-wow-delay=".4s">
            <div class="row">
               <div class="col-lg-5 col-12">
                  <div class="single-head">
                     <div class="contant-inner-title">
                        <h4>Contact Information</h4>
                        <p>Business consulting excepteur sint occaecat cupidatat consulting non proident.</p>
                     </div>
                     <div class="single-info">
                        <i class="lni lni-phone"></i>
                        <ul>
                           <li>+522 672-452-1120</li>
                        </ul>
                     </div>
                     <div class="single-info">
                        <i class="lni lni-envelope"></i>
                        <ul>
                           <li><a href="mailto:info@yourwebsite.com">example@yourwebsite.com</a></li>
                        </ul>
                     </div>
                     <div class="single-info">
                        <i class="lni lni-map"></i>
                        <ul>
                           <li>KA-62/1, Travel Agency, 45 Grand Central Terminal, New York.</li>
                        </ul>
                     </div>
                     <div class="contact-social">
                        <h5>Follow Us on</h5>
                        <ul>
                           <li>
                              <a href="#">
                                 <span class="icon-1"><i class="lni lni-facebook-filled"></i></span>
                                 <span class="icon-2"><i class="lni lni-facebook-filled"></i></span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <span class="icon-1"><i class="lni lni-twitter-original"></i></span>
                                 <span class="icon-2"><i class="lni lni-twitter-original"></i></span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <span class="icon-1"><i class="lni lni-linkedin-original"></i></span>
                                 <span class="icon-2"><i class="lni lni-linkedin-original"></i></span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <span class="icon-1"><i class="lni lni-instagram"></i></span>
                                 <span class="icon-2"><i class="lni lni-instagram"></i></span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <span class="icon-1"><i class="lni lni-behance-original"></i></span>
                                 <span class="icon-2"><i class="lni lni-behance-original"></i></span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7 col-12">
                  <div class="form-main">
                     <form class="form" method="post" action="">
                        @csrf
                        <div class="row">
                           <div class="col-lg-6 col-12">
                              <div class="form-group">
                                 <input name="name" type="text" placeholder="Nama Anda" required="required">
                              </div>
                           </div>
                           <div class="col-lg-6 col-12">
                              <div class="form-group">
                                 <input name="subject" type="text" placeholder="Domisili"
                                    required="required">
                              </div>
                           </div>
                           <div class="col-lg-6 col-12">
                              <div class="form-group">
                                 <input name="email" type="email" placeholder="Email anda"
                                    required="required">
                              </div>
                           </div>
                           <div class="col-lg-6 col-12">
                              <div class="form-group">
                                 <input name="phone" type="text" placeholder="Nomor telepon"
                                    required="required">
                              </div>
                           </div>
                           <div class="col-lg-12 col-12">
                              <div class="form-group">
                                 <input name="phone" type="number" placeholder="Jumlah tiket"
                                    required="required">
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group message ">
                                 <textarea name="message" placeholder="Keterangan tambahan"></textarea>
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group button">
                                 <button type="submit" class="btn ">Kirim</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--/ End Contact Area -->

   <!-- Start Latest News Area -->
   <div class="latest-news-area section" id="history">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="section-title">
                  <span class="wow fadeInDown" data-wow-delay=".2s">latest news</span>
                  <h2 class="wow fadeInUp" data-wow-delay=".4s">Latest News & Blog</h2>
                  <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                     Ipsum available, but the majority have suffered alteration in some form.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
               <!-- Single News -->
               <div class="single-news wow fadeInUp" data-wow-delay=".2s">
                  <div class="image">
                     <img class="thumb" src="assets/images/blog/blog-grid1.jpg" alt="#">
                     <div class="meta-details">
                        <img src="assets/images/blog/author.jpg" alt="#"> <span>BY TIM NORTON</span>
                     </div>
                  </div>
                  <div class="content-body">
                     <h4 class="title"><a href="blog-single-sidebar.html">Make your team a Design driven
                           company</a></h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard.</p>
                  </div>
               </div>
               <!-- End Single News -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
               <!-- Single News -->
               <div class="single-news wow fadeInUp" data-wow-delay=".4s">
                  <div class="image">
                     <img class="thumb" src="assets/images/blog/blog-grid2.jpg" alt="#">
                     <div class="meta-details">
                        <img src="assets/images/blog/author.jpg" alt="#"> <span>BY TIM NORTON</span>
                     </div>
                  </div>
                  <div class="content-body">
                     <h4 class="title"><a href="blog-single-sidebar.html">The newest web framework that changed
                           the world</a></h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard.</p>
                  </div>
               </div>
               <!-- End Single News -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
               <!-- Single News -->
               <div class="single-news wow fadeInUp" data-wow-delay=".6s">
                  <div class="image">
                     <img class="thumb" src="assets/images/blog/blog-grid3.jpg" alt="#">
                     <div class="meta-details">
                        <img src="assets/images/blog/author.jpg" alt="#"> <span>BY TIM NORTON</span>
                     </div>
                  </div>
                  <div class="content-body">
                     <h4 class="title"><a href="blog-single-sidebar.html">5 ways to improve user retention for
                           your startup</a></h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard.</p>
                  </div>
               </div>
               <!-- End Single News -->
            </div>
         </div>
      </div>
   </div>
   <!-- End Latest News Area -->
@endsection
