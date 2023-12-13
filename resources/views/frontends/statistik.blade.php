@extends('layouts.indexLayout')

@section('content')
@include('partials.navMobile')
<div class="max-w-7xl mx-auto px-4">
    @include('partials.nav')

<div class="flex sm:flex-row flex-col w-full justify-between py-4">
    <div class="sm:mt-0 mt-6 sm:w-10/12 w-full bg-white  sm:px-6 sm:pr-12" style="height: 65vh">
        <iframe src='https://flo.uri.sh/visualisation/10899477/embed' title='Interactive or visual content' class='flourish-embed-iframe' frameborder='0' scrolling='no' style='width:100%;height:100%;' sandbox='allow-same-origin allow-forms allow-scripts allow-downloads allow-popups allow-popups-to-escape-sandbox allow-top-navigation-by-user-activation'></iframe>
    </div>
    <div class="sm:order-none order-first sm:w-2/12 w-full overflow " >
        @include('partials.sidebarstatistik')
    </div>
</div>
</div>

@include('partials.footer')
@endsection
