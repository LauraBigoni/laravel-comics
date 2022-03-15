<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    @include('includes.header')
    <main>
        @yield('content')
    </main>
    @include('includes.footer')
    @yield('scripts')
</body>

</html>
