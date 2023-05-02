@include('admin.layouts.top')
<div class="container-scroller">
    @include('admin.layouts.nav')
    <div class="container-fluid page-body-wrapper">
        @include('admin.layouts.sidebar')
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('main-content')
          </div>
          @include('admin.layouts.footer')
        </div>
    </div>
</div>
@include('admin.layouts.scripts')
