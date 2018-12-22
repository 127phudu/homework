@include('layouts.partials.head')

<body>

    <div class="header">
        <h1>@yield('header')</h1>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>

