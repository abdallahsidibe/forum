@extends('layouts.base')

@section('title')
    Dashboard | Web IT
@endsection

@section('content')
    <section class="cover-sec">
        <img src="{{ asset('assetss/images/resources/cover-img.jpg') }}" alt="">
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
                                        <!-- <img src="{{ asset('assetss/images/resources/user-pro-img.png') }}" alt="">-->
                                        <img src="{{ asset('storage/users-avatar/' . $user->avatar) }}" alt="">
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


                                </div>
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

                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="main-ws-sec">
                                <div class="user-tab-sec">
                                    <h3>{{ $user->name }}</h3>                                  
                                    <div class="card">
                                        <div class="card-body" style="background-color: white">
                                            <h4>Information</h4>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Biographie</label>
                                                        <p>{{ $user->referent->biographie }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Adresse</label>
                                                        <p>{{ $user->referent->adresse }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Contact</label>
                                                        <p>{{ $user->referent->contact }}</p>
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
                <p><img src="{{ asset('assetss/images/copy-icon2.png') }}" alt="">Copyright 2019</p>
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
                    <img src="{{ asset('assetss/images/resources/np.png') }}" alt="">
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
