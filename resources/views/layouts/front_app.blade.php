<!DOCTYPE html>
<html>
    @include('layouts.include.header')
    <body >
    <div id="wrapper">
          @include('layouts.include.leftpanel.user-left-sidebar')
        <div id="page-wrapper" class="gray-bg">
       
        @include('layouts.include.body_header')
        @include('layouts.include.breadcrumb')
        @include('layouts.include.message')
       
            @yield('content')
            @include('layouts.include.body_footer')
        </div>
    </div>
    @include('layouts.include.footer')
</body>
</html>