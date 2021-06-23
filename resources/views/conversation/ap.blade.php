<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESEAU SOCIAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{asset('assetss/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetss/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetss/css/line-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetss/css/line-awesome-font-awesome.min.css')}}">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetss/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetss/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetss/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetss/css/responsive.css')}}">
    @livewireStyles
</head>

<body oncontextmenu="return false;">
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="header-data">
                    <div class="logo">
                        <a href="index.html" title=""><img src="{{asset('assetss/images/logo.png')}}" alt=""></a>
                    </div>
                    <div class="search-bar">
                        <form>
                            <input type="text" name="search" placeholder="Search...">
                            <button type="submit"><i class="la la-search"></i></button>
                        </form>
                    </div>
                    <nav>
                        <ul>
                            <li>
                                <a href="index.html" title="">
                                    <span><img src="{{asset('assetss/images/icon1.png')}}" alt=""></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="companies.html" title="">
                                    <span><img src="{{asset('assetss/images/icon2.png')}}" alt=""></span>
                                    Companies
                                </a>
                                <ul>
                                    <li><a href="companies.html" title="">Companies</a></li>
                                    <li><a href="company-profile.html" title="">Company Profile</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="projects.html" title="">
                                    <span><img src="{{asset('assetss/images/icon3.png')}}" alt=""></span>
                                    Projects
                                </a>
                            </li>
                            <li>
                                <a href="profiles.html" title="">
                                    <span><img src="{{asset('assetss/images/icon4.png')}}" alt=""></span>
                                    Profiles
                                </a>
                                <ul>
                                    <li><a href="/profiles" title="">User Profile</a></li>
                                    <li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="jobs.html" title="">
                                    <span><img src="{{asset('assetss/images/icon5.png')}}" alt=""></span>
                                    Jobs
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="not-box-openm">
                                    <span><img src="{{asset('assetss/images/icon6.png')}}" alt=""></span>
                                    Messages
                                </a>
                                <div class="notification-box msg" id="message">
                                    <div class="nt-title">
                                        <h4>Setting</h4>
                                        <a href="#" title="">Clear all</a>
                                    </div>
                                    <div class="nott-list">
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{asset('assetss/images/resources/ny-img1.png')}}" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{asset('assetss/images/resources/ny-img2.png')}}" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title="">Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{asset('assetss/images/resources/ny-img3.png')}}" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title="">Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="view-all-nots">
                                            <a href="messages.html" title="">View All Messsages</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li>
                                <div>
                                    <a href="jobs.html" title=""> Connexion</a>                                                                         
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="jobs.html" title=""> Inscription</a>                                                                         
                                </div>
                            </li>
                        </ul>
                    </nav>     
                    <div class="menu-btn">
                        <a href="#" title=""><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="user-account">
                        <div class="user-info">
                            <img src="{{asset('assetss/images/resources/user.png"')}}' alt="">
                            <a href="#" title="">John</a>
                            <i class="la la-sort-down"></i>
                        </div>
                        <div class="user-account-settingss" id="users">
                            <h3>Online Status</h3>
                            <ul class="on-off-status">
                                <li>
                                    <div class="fgt-sec">
                                        <input type="radio" name="cc" id="c5">
                                        <label for="c5">
                                            <span></span>
                                        </label>
                                        <small>Online</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="fgt-sec">
                                        <input type="radio" name="cc" id="c6">
                                        <label for="c6">
                                            <span></span>
                                        </label>
                                        <small>Offline</small>
                                    </div>
                                </li>
                            </ul>
                            <h3>Custom Status</h3>
                            <div class="search_form">
                                <form>
                                    <input type="text" name="search">
                                    <button type="submit">Ok</button>
                                </form>
                            </div>
                            <h3>Setting</h3>
                            <ul class="us-links">
                                <li><a href="profile-account-setting.html" title="">Account Setting</a></li>
                                <li><a href="#" title="">Privacy</a></li>
                                <li><a href="#" title="">Faqs</a></li>
                                <li><a href="#" title="">Terms & Conditions</a></li>
                            </ul>
                            <h3 class="tc"><a href="sign-in.html" title="">Logout</a></h3>
                        </div>
                    </div>
                </div>
            </div>               
                </div>
            </div>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
       
        @include('conversations.index')
      
    </div>
    <script type="text/javascript" src="{{asset('assetss/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assetss/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{asset('assetss/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assetss/js/jquery.mCustomScrollbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('assetss/lib/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assetss/js/scrollbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('assetss/js/script.js')}}"></script>
    @livewireScripts
</body>

</html>