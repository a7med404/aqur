
@include('admin.layouts.header')
@include('admin.layouts.nav')
@include('admin.layouts.page-up')
@include('admin.layouts.massage')

@yield('page-content-header')
@yield('content')


@include('admin.layouts.page-down')
@include('admin.layouts.footer')

