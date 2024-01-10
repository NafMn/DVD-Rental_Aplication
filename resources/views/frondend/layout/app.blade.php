@include('frondend.include.head')

<body class="bg-custom">
        @include('frondend.include.nav-home')

        @yield('content')

        <section class="footer">
        @include('frondend.include.footer')
        </section>