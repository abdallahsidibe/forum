<header>
    <div class="container">
        <div class="header-data">
            <div class="logo">
                <a href="index.html" title=""><img src="{{ asset('assetss/images/logo.png') }}" alt=""></a>
            </div>
            <div class="search-bar">
                <form>
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
            </div>          

            @include('partials.navbar')
            
            <div class="menu-btn">
                <a href="#" title=""><i class="fa fa-bars"></i></a>
            </div>
            <div class="user-account">
                <div class="user-info">
                    <img src="{{ asset('storage/users-avatar/' . Auth::user()->avatar) }}" class=" rounded-circle w-25" alt="">
                    <a href="#" title="">{{ Auth::user()->name }}</a>
                    <i class="la la-sort-down"></i>
                </div>
                <div class="user-account-settingss" id="users">


                    <ul class="us-links">
                        <li><a href="{{ route('my-profil') }}" title="">Profil</a></li>
                        <li><a href="{{ route('topics.create') }}" title="">Créer un sujet</a></li>
                        <li><a href="{{ route('topics.ind') }}" title="">Mes sujets</a></li>
                        @if (Auth::user()->usertype == 'influent')
                        <li><a href="{{ route('my-info') }}" title="">Mes infos</a></li>
                        @endif
                    </ul>
                    <h3 class="tc"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Deconnexion') }}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </a></h3>
                </div>
            </div>
        </div>
    </div>
</header>
