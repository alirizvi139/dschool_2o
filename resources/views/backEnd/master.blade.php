
@include('backEnd.partials.header')

<div style="padding:30px">
@yield('mainContent')
</div>

@include('backEnd.partials.footer')
@stack('css')