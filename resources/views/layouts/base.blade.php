<!DOCTYPE html>
<html>

@include('partials.head')

<body oncontextmenu="return false;">
    <div class="wrapper">
        
        @include('partials.header')
        <main class="py-4">
            @yield('content')
        </main>

        @include('partials.tchat')
        @include('partials.footer')

    </div>
    @include('partials.script')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>
