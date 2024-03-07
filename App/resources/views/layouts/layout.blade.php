@vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="sidebar-mini">
    <div class='wrapper'>
        @include('layouts.navbar')
        @include('layouts.sidebar')

        <div class='content-wrapper'>
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</body>
