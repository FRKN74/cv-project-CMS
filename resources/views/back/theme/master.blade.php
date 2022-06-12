@include('back.theme.head')

    @include('back.theme.header')
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            @include('back.theme.sidebar')
    @yield('content')
    
@include('back.theme.footer')