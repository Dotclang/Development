<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
<body>
    <div id="app">
            @include('includes.nav')

        {{-- <main class="py-4"> --}}
            @include('includes.breadcrumb')
            @yield('content')
        {{-- </main> --}}

        {{-- footer --}}
            @include('includes.footer')
        {{-- endfooter --}}
    </div>
    @include('includes.asset')
</body>
</html>
