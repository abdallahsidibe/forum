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
                                             <img src="{{ asset('storage/users-avatar/' . Auth::user()->avatar) }}"
                                             class="w-50 rounded-circle"  alt="">                                
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
                                            
                                         </ul>
                                     </div>

                                 </div>
                             </div>
                             <div class="col-lg-9">

                               <!--  <div class="card-header">-->
                                     @if (session('status'))
                                         <div class="alert alert-success" role="alert">
                                             {{ session('status') }}
                                         </div>
                                     @endif
                               <!--  </div>-->

                                 <div class="card">
                                     <div class="card-body" style="background-color: white">
                                         <h4>Mon Profil</h4>
                                         <hr>
                                         <form action="{{ url('my-profil-update') }}" method="POST"
                                             enctype="multipart/form-data">
                                             {{ csrf_field() }}
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="">Nom</label>
                                                         <input type="text" name="name" class="form-control"
                                                             value="{{ Auth::user()->name }}">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="">Prenom</label>
                                                         <input type="text" name="lastname" class="form-control"
                                                             value="{{ Auth::user()->lastname }}">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="">Téléphone</label>
                                                         <input type="text" name="phone" class="form-control"
                                                             value="{{ Auth::user()->phone }}">
                                                     </div>
                                                 </div>
                                                 
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label for="">Email</label>
                                                         <input type="text" name="email" class="form-control" readonly
                                                             value="{{ Auth::user()->email }}">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <button class="btn btn-primary">Update</button>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <input type="file" name="image" class="form-control"> <br>
                                                    <!-- <img name="image"
                                                         src="{{ asset('uploads/profile/' . Auth::user()->avatar) }}"
                                                         class="w-75" alt="">-->
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </main>
     </div>
     @include('partials.script')
 </body>

 </html>
