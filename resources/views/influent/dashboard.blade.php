@extends('layouts.base')
@section('title')
    Dashboard | Web IT
@endsection

@section('content')
    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                            <div class="main-left-sidebar no-margin">
                                <div class="user-data full-width">
                                    <div class="user-profile">
                                        <div class="username-dt">
                                            <div class="usr-pic">
                                                <img src="{{ asset('storage/users-avatar/' . Auth::user()->avatar) }}"
                                                    class=" rounded-circle w-75" alt="">
                                            </div>
                                        </div>
                                        <div class="user-specs">
                                            <h3>{{ Auth::user()->name }}</h3>
                                            <span></span>
                                        </div>
                                    </div>
                                    <ul class="user-fw-status">
                                        @if (Auth::user()->usertype == 'influent')
                                            <li>
                                                <h4>Abonnement</h4>
                                                <span>34</span>
                                            </li>
                                            <li>
                                                <h4>Abonnés</h4>
                                                <span>155</span>
                                            </li>
                                        @endif
                                        <!-- <li>
                                                <a href="https://www.gambolthemes.net/workwise-new/my-profile.html"
                                                    title="">View Profile</a>
                                            </li>-->
                                    </ul>
                                </div>
                                <div class="suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Suggestions</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="suggestions-list">
                                        <div class="suggestion-usd">
                                            <img src="{{ asset('assetss/images/resources/s1.png') }}" alt="">
                                            <div class="sgt-text">
                                                <h4>Jessica William</h4>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="{{ asset('assetss/images/resources/s2.png') }}" alt="">
                                            <div class="sgt-text">
                                                <h4>John Doe</h4>
                                                <span>PHP Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="{{ asset('assetss/images/resources/s3.png') }}" alt="">
                                            <div class="sgt-text">
                                                <h4>Poonam</h4>
                                                <span>Wordpress Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="{{ asset('assetss/images/resources/s4.png') }}" alt="">
                                            <div class="sgt-text">
                                                <h4>Bill Gates</h4>
                                                <span>C & C++ Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="{{ asset('assetss/images/resources/s5.png') }}" alt="">
                                            <div class="sgt-text">
                                                <h4>Jessica William</h4>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="suggestion-usd">
                                            <img src="{{ asset('assetss/images/resources/s6.png') }}" alt="">
                                            <div class="sgt-text">
                                                <h4>John Doe</h4>
                                                <span>PHP Developer</span>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                        <div class="view-more">
                                            <a href="#" title="">View More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tags-sec full-width">
                                    <ul>
                                        <li><a href="#" title="">Help Center</a></li>
                                        <li><a href="#" title="">About</a></li>
                                        <li><a href="#" title="">Privacy Policy</a></li>
                                        <li><a href="#" title="">Community Guidelines</a></li>
                                        <li><a href="#" title="">Cookies Policy</a></li>
                                        <li><a href="#" title="">Career</a></li>
                                        <li><a href="#" title="">Language</a></li>
                                        <li><a href="#" title="">Copyright Policy</a></li>
                                    </ul>
                                    <div class="cp-sec">
                                        <img src="{{ asset('assetss/images/logo2.png') }}" alt="">
                                        <p><img src="{{ asset('assetss/images/cp.png') }}" alt="">Copyright 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 no-pd">
                            <div class="main-ws-sec">
                                <div class="post-topbar">
                                    <div class="user-picy">
                                        <img src="{{ asset('storage/users-avatar/' . Auth::user()->avatar) }}"
                                            class="rounded-circle w-75" alt="">
                                    </div>
                                    <div class="post-st">
                                        <ul>
                                            <!--  <li><a class="post_project" href="#" title="">Post a Project</a></li>-->
                                            @if (Auth::user()->usertype == 'influent')
                                                <li><a class="post-jb active" href="#" title="">Publier</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="posts-section">
                                    @foreach ($pubs as $pub)
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <div class="user-picy">
                                                        <img src="{{ asset('storage/users-avatar/' . Auth::user()->avatar) }}"
                                                            class="rounded-circle w-75 " alt="">
                                                    </div>
                                                    <div class="usy-name">
                                                        <h3>{{ $pub->user->name }}</h3>
                                                        <span><img src="{{ asset('assetss/images/clock.png') }}" alt="">3
                                                            min
                                                            ago</span>
                                                    </div>
                                                </div>
                                                <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open"><i
                                                            class="la la-ellipsis-v"></i></a>
                                                    
                                                </div>
                                            </div>
                                         
                                            <div class="job_descp">
                                                <h3>{{ $pub->title }}</h3>

                                                <p> {{ $pub->content }} <br> <a href="{{ route('pubs.show', $pub) }}"
                                                        title="">voir plus</a></p>

                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                        <img src="{{ asset('assetss/images/liked-img.png') }}" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i>
                                                            Comment 15</a></li>
                                                </ul>
                                                <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!--POUR AFFICHER LA PUBLIC-->
                                    <div class="post-bar">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                <img src="{{ asset('assetss/images/resources/us-pic.png') }}" alt="">
                                                <div class="usy-name">
                                                    <h3>John Doe</h3>
                                                    <span><img src="{{ asset('assetss/images/clock.png') }}" alt="">3 min
                                                        ago</span>
                                                </div>
                                            </div>
                                            <div class="ed-opts">
                                                <a href="#" title="" class="ed-opts-open"><i
                                                        class="la la-ellipsis-v"></i></a>
                                                <ul class="ed-options">
                                                    <li><a href="#" title="">Edit Post</a></li>
                                                    <li><a href="#" title="">Unsaved</a></li>
                                                    <li><a href="#" title="">Unbid</a></li>
                                                    <li><a href="#" title="">Close</a></li>
                                                    <li><a href="#" title="">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="epi-sec">
                                            <ul class="descp">
                                                <li><img src="{{ asset('assetss/images/icon8.png') }}" alt=""><span>Epic
                                                        Coder</span></li>
                                                <li><img src="{{ asset('assetss/images/icon9.png') }}"
                                                        alt=""><span>India</span></li>
                                            </ul>
                                            <ul class="bk-links">
                                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                <li><a href="#" title="" class="bid_now">Bid Now</a></li>
                                            </ul>
                                        </div>
                                        <div class="job_descp">
                                            <h3>Senior Wordpress Developer</h3>
                                            <ul class="job-dt">
                                                <li><a href="#" title="">Full Time</a></li>
                                                <li><span>$30 / hr</span></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                                luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id
                                                magna sit amet... <a href="#" title="">view more</a></p>
                                            <ul class="skill-tags">
                                                <li><a href="#" title="">HTML</a></li>
                                                <li><a href="#" title="">PHP</a></li>
                                                <li><a href="#" title="">CSS</a></li>
                                                <li><a href="#" title="">Javascript</a></li>
                                                <li><a href="#" title="">Wordpress</a></li>
                                            </ul>
                                        </div>
                                        <div class="job-status-bar">
                                            <ul class="like-com">
                                                <li>
                                                    <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                    <img src="{{ asset('assetss/images/liked-img.png') }}" alt="">
                                                    <span>25</span>
                                                </li>
                                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i>
                                                        Comment 15</a></li>
                                            </ul>
                                            <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                        </div>
                                    </div>
                                    <div class="posty">
                                        <div class="post-bar no-margin">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="{{ asset('assetss/images/resources/us-pc2.png') }}" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="{{ asset('assetss/images/clock.png') }}" alt="">3
                                                            min ago</span>
                                                    </div>
                                                </div>
                                                <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open"><i
                                                            class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options">
                                                        <li><a href="#" title="">Edit Post</a></li>
                                                        <li><a href="#" title="">Unsaved</a></li>
                                                        <li><a href="#" title="">Unbid</a></li>
                                                        <li><a href="#" title="">Close</a></li>
                                                        <li><a href="#" title="">Hide</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="epi-sec">
                                                <ul class="descp">
                                                    <li><img src="{{ asset('assetss/images/icon8.png') }}"
                                                            alt=""><span>Epic Coder</span>
                                                    </li>
                                                    <li><img src="{{ asset('assetss/images/icon9.png') }}"
                                                            alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Senior Wordpress Developer</h3>
                                                <ul class="job-dt">
                                                    <li><a href="#" title="">Full Time</a></li>
                                                    <li><span>$30 / hr</span></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                                    luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id
                                                    magna sit amet... <a href="#" title="">view more</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                        <img src="{{ asset('assetss/images/liked-img.png') }}" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i>
                                                            Comment 15</a></li>
                                                </ul>
                                                <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                            </div>
                                        </div>
                                        <div class="comment-section">
                                            <a href="#" class="plus-ic">
                                                <i class="la la-plus"></i>
                                            </a>
                                            <div class="comment-sec">
                                                <ul>
                                                    <li>
                                                        <div class="comment-list">
                                                            <div class="bg-img">
                                                                <img src="{{ asset('assetss/images/resources/bg-img1.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="comment">
                                                                <h3>John Doe</h3>
                                                                <span><img src="{{ asset('assetss/images/clock.png') }}"
                                                                        alt=""> 3 min
                                                                    ago</span>
                                                                <p>Lorem ipsum dolor sit amet, </p>
                                                                <a href="#" title="" class="active"><i
                                                                        class="fa fa-reply-all"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="comment-list">
                                                                    <div class="bg-img">
                                                                        <img src="{{ asset('assetss/images/resources/bg-img2.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="comment">
                                                                        <h3>John Doe</h3>
                                                                        <span><img
                                                                                src="{{ asset('assetss/images/clock.png') }}"
                                                                                alt=""> 3
                                                                            min ago</span>
                                                                        <p>Hi John </p>
                                                                        <a href="#" title=""><i
                                                                                class="fa fa-reply-all"></i>Reply</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="comment-list">
                                                            <div class="bg-img">
                                                                <img src="{{ asset('assetss/images/resources/bg-img3.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="comment">
                                                                <h3>John Doe</h3>
                                                                <span><img src="{{ asset('assetss/images/clock.png') }}"
                                                                        alt=""> 3 min
                                                                    ago</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur
                                                                    adipiscing elit. Aliquam luctus hendrerit metus,
                                                                    ut ullamcorper quam finibus at.</p>
                                                                <a href="#" title=""><i
                                                                        class="fa fa-reply-all"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="post-comment">
                                                <div class="cm_img">
                                                    <img src="{{ asset('assetss/images/resources/bg-img4.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="comment_box">
                                                    <form>
                                                        <input type="text" placeholder="Post a comment">
                                                        <button type="submit">Send</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="process-comm">
                                        <div class="spinner">
                                            <div class="bounce1"></div>
                                            <div class="bounce2"></div>
                                            <div class="bounce3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--side-bar right-->
                        <div class="col-lg-3 pd-right-none no-pd">
                            <div class="right-sidebar">
                                <div class="widget widget-about">
                                    <img src="{{ asset('assetss/images/wd-logo.png') }}" alt="">
                                    <!-- <h3>Track Time on Workwise</h3>
                                        <span>Pay only for the Hours worked</span>
                                        <div class="sign_link">
                                            <h3><a href="sign-in.html" title="">Sign up</a></h3>
                                            <a href="#" title="">Learn More</a>
                                        </div>-->
                                    <h3>Offre d'emploi</h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                    <div class="sign_link">
                                        <h3><a href="sign-in.html" title="">Déposer une offre</a></h3>

                                    </div>
                                </div>
                                <div class="widget widget-jobs">
                                    <div class="sd-title">
                                        <h3>Top Jobs</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="jobs-list">
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior Product Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior UI / UX Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Junior Seo Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior PHP Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="job-details">
                                                <h3>Senior Developer Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <div class="hr-rate">
                                                <span>$25/hr</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="post-popup job_post">
        <div class="post-project">
            <h3>Faire une publication</h3>
            <div class="post-project-fields">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('pubs.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Title"
                                class="form-control @error('name') is-invalid @enderror" name="title"
                                value="{{ old('title') }}" required autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <textarea name="content" id="contenu"
                                class="form-control @error('content') is-invalid @enderror" rows="5"
                                placeholder="Description"></textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $errors->first('content') }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <ul>

                                <li><button class="active" type="submit">Publier</button></li>

                                <li> <button type="button" data-dismiss="modal">Close</button></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div>
    </div>

@endsection


@section('scripts')

@endsection
