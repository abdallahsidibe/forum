 <!DOCTYPE html>
 <html>

 @include('partials.head')

 <body oncontextmenu="return false;">
     <div class="wrapper">
         @include('partials.header')
         <section class="cover-sec">
             <img src="{{ asset('assetss/images/resources/cover-img.jpg') }}" alt="">
             <div class="add-pic-box">
                 <div class="container">
                     <div class="row no-gutters">
                         <div class="col-lg-12 col-sm-12">
                             <input type="file" id="file">
                             <label for="file">Change Image</label>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <main>
             <div class="main-section">
                 <div class="container">
                     <div class="main-section-data">
                         <div class="row">
                             <div class="col-lg-3">
                                 <div class="main-left-sidebar">
                                     <div class="user_profile">
                                         <div class="user-pro-img">                                             
                                             <img src="{{ asset('uploads/profile/' . Auth::user()->profil->image) }}" alt="">
                                           <!--  <div class="add-dp" id="OpenImgUpload">
                                                 <input type="file" id="file">
                                                 <label for="file"><i class="fas fa-camera"></i></label>
                                             </div>-->
                                         </div>
                                         <div class="user_pro_status">
                                             <ul class="flw-status">
                                                 <li>
                                                     <span>Following</span>
                                                     <b>34</b>
                                                 </li>
                                                 <li>
                                                     <span>Followers</span>
                                                     <b>155</b>
                                                 </li>
                                             </ul>
                                         </div>
                                         <ul class="social_links">
                                             <li><a href="#" title=""><i class="la la-globe"></i> www.example.com</a>
                                             </li>
                                             <li><a href="#" title=""><i class="fa fa-facebook-square"></i>
                                                     Http://www.facebook.com/john...</a></li>
                                             <li><a href="#" title=""><i class="fa fa-twitter"></i>
                                                     Http://www.Twitter.com/john...</a></li>
                                             <li><a href="#" title=""><i class="fa fa-google-plus-square"></i>
                                                     Http://www.googleplus.com/john...</a></li>
                                             <li><a href="#" title=""><i class="fa fa-behance-square"></i>
                                                     Http://www.behance.com/john...</a></li>
                                             <li><a href="#" title=""><i class="fa fa-pinterest"></i>
                                                     Http://www.pinterest.com/john...</a></li>
                                             <li><a href="#" title=""><i class="fa fa-instagram"></i>
                                                     Http://www.instagram.com/john...</a></li>
                                             <li><a href="#" title=""><i class="fa fa-youtube"></i>
                                                     Http://www.youtube.com/john...</a></li>
                                         </ul>
                                     </div>

                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <!--     -->
                                 <div class="card-header">
                                     @if (session('status'))
                                         <div class="alert alert-success" role="alert">
                                             {{ session('status') }}
                                         </div>
                                     @endif
                                 </div>
                                 <div class="main-ws-sec">
                                     <div class="post-topbar">
                                         <div class="user-picy">
                                             <img src="{{ asset('assetss/images/resources/user-pic.png') }}" alt="">
                                         </div>
                                         <div class="post-st">
                                             <ul>
                                                 <li><a class="post_project" href="#" title="">Profil</a></li>
                                                 <li><a class="post-jb active" href="#" title="">Experiences</a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="user-tab-sec rewivew">
                                         <h3> {{ Auth::user()->name }}</h3>
                                         <div class="star-descp">
                                             <span> {{ Auth::user()->profil->poste }}</span>
                                             <ul>
                                                 <li><i class="fa fa-star"></i></li>
                                                 <li><i class="fa fa-star"></i></li>
                                                 <li><i class="fa fa-star"></i></li>
                                                 <li><i class="fa fa-star"></i></li>
                                                 <li><i class="fa fa-star-half-o"></i></li>
                                             </ul>
                                             <a href="#" title="">Status</a>
                                         </div>
                                         <div class="tab-feed st2 settingjb">
                                             <ul>
                                                 <li data-tab="info-dd">
                                                     <a href="#" title="">
                                                         <img src="{{ asset('assetss/images/ic2.png') }}" alt="">
                                                         <span>Info</span>
                                                     </a>
                                                 </li>
                                                 <li data-tab="portfolio-dd">
                                                     <a href="#" title="">
                                                         <img src="{{ asset('assetss/images/ic3.png') }}" alt="">
                                                         <span>Portfolio</span>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     @include('frontend.profil.show')

                                 </div>
                             </div>
                             <div class="col-lg-3">
                                 <div class="right-sidebar">
                                     <div class="widget widget-portfolio">
                                         <div class="wd-heady">
                                             <h3>Portfolio</h3>
                                             <img src="{{ asset('assetss/images/photo-icon.png') }}" alt="">
                                         </div>
                                         <div class="pf-gallery">
                                             <ul>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery1.png') }}"
                                                             alt=""></a></li>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery2.png') }}"
                                                             alt=""></a></li>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery3.png') }}"
                                                             alt=""></a></li>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery4.png') }}"
                                                             alt=""></a></li>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery5.png') }}"
                                                             alt=""></a></li>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery6.png') }}"
                                                             alt=""></a></li>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery7.png') }}"
                                                             alt=""></a></li>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery8.png') }}"
                                                             alt=""></a></li>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery9.png') }}"
                                                             alt=""></a></li>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery10.png') }}"
                                                             alt=""></a></li>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery11.png') }}"
                                                             alt=""></a></li>
                                                 <li><a href="#" title=""><img
                                                             src="{{ asset('assetss/images/resources/pf-gallery12.png') }}"
                                                             alt=""></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </main>
         <!-- Post job-->
         @include('frontend.profil.prof')
         @include('frontend.profil.exp')
         <!--End job -->

         <!--Info -->
         @include('frontend.profil.edit')
     </div>
     @include('partials.script')
 </body>

 </html>
