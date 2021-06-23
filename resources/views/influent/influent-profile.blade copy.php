@extends('layouts.base')

@section('title')
    Dashboard | Web IT
@endsection

@section('content')
<section class="cover-sec">
    <img src="{{asset('assetss/images/resources/cover-img.jpg')}}" alt="">
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
                                   <!-- <img src="{{asset('assetss/images/resources/user-pro-img.png')}}" alt="">-->
                                    <img src="{{ asset('uploads/profile/' . $user->profil->image) }}" alt="">
                                </div>
                                <div class="user_pro_status">
                                    <ul class="flw-hr">
                                        <li><a href="#" title="" class="flww"><i class="la la-plus"></i>
                                                Follow</a></li>
                                        <li><a href="#" title="" class="hre">Hire</a></li>
                                    </ul>
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
                        <div class="main-ws-sec">
                            <div class="user-tab-sec">
                                <h3>{{ $user->name }}</h3>
                                <div class="star-descp">
                                    <span>Graphic Designer at Self Employed</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                                <div class="tab-feed">
                                    <ul>
                                        <li data-tab="info-dd" class="active">
                                            <a href="#" title="">
                                                <img src="{{asset('assetss/images/ic2.png')}}" alt="">
                                                <span>Info</span>
                                            </a>
                                        </li>
                                        <!--
                                        <li data-tab="feed-dd" class="active">
                                            <a href="#" title="">
                                                <img src="{{asset('assetss/images/ic1.png')}}" alt="">
                                                <span>Feed</span>
                                            </a>
                                        </li>                                        
                                        <li data-tab="portfolio-dd">
                                            <a href="#" title="">
                                                <img src="{{asset('assetss/images/ic3.png')}}" alt="">
                                                <span>Portfolio</span>
                                            </a>
                                        </li>
                                        -->
                                    </ul>
                                </div>
                            </div>
                           
                            <div class="product-feed-tab" id="info-dd">
                                <div class="user-profile-ov">
                                    <h3>Apercu</h3>
                                    <p>{{$user->profil->apercu}}
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor
                                        aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue
                                        nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo
                                        viverra. </p>
                                </div>
                                <div class="user-profile-ov st2">
                                    <h3>Experience</h3>
                                    <h4>{{ $user->experience->title }}</h4>
                                    <p>{{ $user->experience->description }}
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor
                                        aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue
                                        nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo
                                        viverra. </p>
                                    <h4>UI / UX Designer</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor
                                        aliquam felis, nec condimentum ipsum commodo id.</p>
                                    <h4>PHP developer</h4>
                                    <p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id.
                                        Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur
                                        aliquam lectus commodo viverra. </p>
                                </div>
                                <div class="user-profile-ov">
                                    <h3>Education</h3>
                                    <h4>{{  $user->experience->niveau }}</h4>
                                    <span>{{  $user->experience->annee }}</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor
                                        aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue
                                        nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo
                                        viverra. </p>
                                </div>
                                <div class="user-profile-ov">
                                    <h3>Location</h3>
                                    <h4>{{  $user->experience->ville }}</h4>
                                    <p>{{ $user->profil->quartier }} </p>
                                </div>
                                <div class="user-profile-ov">
                                    <h3>Skills</h3>
                                    <ul>
                                        <li><a href="#" title="">{{ $user->experience->comptu }}</a></li>
                                        <li><a href="#" title="">{{ $user->experience->comptd }}</a></li>
                                        <li><a href="#" title="">{{ $user->experience->comptt }}</a></li>
                                        <li><a href="#" title="">Javascript</a></li>
                                        <li><a href="#" title="">Wordpress</a></li>
                                        <li><a href="#" title="">Photoshop</a></li>
                                        <li><a href="#" title="">Illustrator</a></li>
                                        <li><a href="#" title="">Corel Draw</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--
                            <div class="product-feed-tab" id="portfolio-dd">
                                <div class="portfolio-gallery-sec">
                                    <h3>Portfolio</h3>
                                    <div class="gallery_pf">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                <div class="gallery_pt">
                                                    <img src="{{asset('assetss/images/resources/pf-img1.jpg')}}" alt="">
                                                    <a href="#" title=""><img src="{{asset('assetss/images/all-out.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                <div class="gallery_pt">
                                                    <img src="{{asset('assetss/images/resources/pf-img2.jpg')}}" alt="">
                                                    <a href="#" title=""><img src="{{asset('assetss/images/all-out.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                <div class="gallery_pt">
                                                    <img src="{{asset('assetss/images/resources/pf-img3.jpg')}}" alt="">
                                                    <a href="#" title=""><img src="{{asset('assetss/images/all-out.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                <div class="gallery_pt">
                                                    <img src="{{asset('assetss/images/resources/pf-img4.jpg')}}" alt="">
                                                    <a href="#" title=""><img src="{{asset('assetss/images/all-out.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                <div class="gallery_pt">
                                                    <img src="{{asset('assetss/images/resources/pf-img5.jpg')}}" alt="">
                                                    <a href="#" title=""><img src="{{asset('assetss/images/all-out.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                <div class="gallery_pt">
                                                    <img src="{{asset('assetss/images/resources/pf-img6.jpg')}}" alt="">
                                                    <a href="#" title=""><img src="{{asset('assetss/images/all-out.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                <div class="gallery_pt">
                                                    <img src="{{asset('assetss/images/resources/pf-img7.jpg')}}" alt="">
                                                    <a href="#" title=""><img src="{{asset('assetss/images/all-out.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                <div class="gallery_pt">
                                                    <img src="{{asset('assetss/images/resources/pf-img8.jpg')}}" alt="">
                                                    <a href="#" title=""><img src="{{asset('assetss/images/all-out.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                <div class="gallery_pt">
                                                    <img src="{{asset('assetss/images/resources/pf-img9.jpg')}}" alt="">
                                                    <a href="#" title=""><img src="{{asset('assetss/images/all-out.png')}}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="right-sidebar">
                            <div class="message-btn">
                                <a href="{{ route('send.message') }}" title="" class="text-green-500" @click="true"><i class="fa fa-envelope" class="text-green-500" @click="true"></i> Message</a>
                            </div>
                           <div class="widget widget-portfolio">
                                <div class="wd-heady">
                                    <h3>Portfolio</h3>
                                    <img src="{{asset('assetss/images/photo-icon.png')}}" alt="">
                                </div>
                                <div class="pf-gallery">
                                    <ul>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery1.png')}}"
                                                    alt=""></a></li>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery2.png')}}"
                                                    alt=""></a></li>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery3.png')}}"
                                                    alt=""></a></li>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery4.png')}}"
                                                    alt=""></a></li>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery5.png')}}"
                                                    alt=""></a></li>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery6.png')}}"
                                                    alt=""></a></li>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery7.png')}}"
                                                    alt=""></a></li>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery8.png')}}"
                                                    alt=""></a></li>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery9.png')}}"
                                                    alt=""></a></li>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery10.png')}}"
                                                    alt=""></a></li>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery11.png')}}"
                                                    alt=""></a></li>
                                        <li><a href="#" title=""><img src="{{asset('assetss/images/resources/pf-gallery12.png')}}"
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
<footer>
    <div class="footy-sec mn no-margin">
        <div class="container">
            <ul>
                <li><a href="help-center.html" title="">Help Center</a></li>
                <li><a href="about.html" title="">About</a></li>
                <li><a href="#" title="">Privacy Policy</a></li>
                <li><a href="#" title="">Community Guidelines</a></li>
                <li><a href="#" title="">Cookies Policy</a></li>
                <li><a href="#" title="">Career</a></li>
                <li><a href="forum.html" title="">Forum</a></li>
                <li><a href="#" title="">Language</a></li>
                <li><a href="#" title="">Copyright Policy</a></li>
            </ul>
            <p><img src="{{asset('assetss/images/copy-icon2.png')}}" alt="">Copyright 2019</p>
            <img class="fl-rgt" src="images/logo2.png')}}" alt="">
        </div>
    </div>
</footer>
<div class="overview-box" id="create-portfolio">
    <div class="overview-edit">
        <h3>Create Portfolio</h3>
        <form>
            <input type="text" name="pf-name" placeholder="Portfolio Name">
            <div class="file-submit">
                <input type="file" name="file">
            </div>
            <div class="pf-img">
                <img src="{{asset('assetss/images/resources/np.png')}}" alt="">
            </div>
            <input type="text" name="website-url" placeholder="htp://www.example.com">
            <button type="submit" class="save">Save</button>
            <button type="submit" class="cancel">Cancel</button>
        </form>
        <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
    </div>
</div>
</div>
@endsection

@section('scripts')

@endsection