@extends('layouts.indexLayout')

@section('content')
@include('partials.navMobile')
<div class="max-w-7xl mx-auto px-4">
    @include('partials.nav')

<div class="flex w-full justify-between">
    <div class=" w-10/12 bg-white  px-6 pr-12" style="height: 65vh">
        <iframe width="100%" height="100%" class="border border-gray-200" src="https://datastudio.google.com/embed/reporting/aa6ed6eb-a9e0-4da1-aad4-0467abcad1c0/page/ToA0C" frameborder="0"  allowfullscreen></iframe>
    </div>
    <div class=" w-2/12  overflow" >
        @include('partials.sidebarstatistik')
    </div>
</div>
</div>
@include('partials.footer')


@endsection
