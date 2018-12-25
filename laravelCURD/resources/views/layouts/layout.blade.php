@include('layouts.partials.head')

<body>

    <div class="header">
        <div style="margin: 10px">
            <a class="btn btn-primary" href="{{ url('category') }}">Danh mục</a>
            <a class="btn btn-primary" href="{{ url('product') }}">Sản phẩm</a>
            <a class="btn btn-primary" href="{{ url('comment') }}">Comment</a>
        </div>
        <h1>@yield('header')</h1>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>

