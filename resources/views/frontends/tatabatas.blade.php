@extends('layouts.indexLayout')

@section('content')
@include('partials.navMobile')
<div class="max-w-7xl mx-auto px-4">
    @include('partials.nav')

<div class="flex w-full justify-between" >
    <div class=" w-10/12 bg-white  px-6 pr-12 " style="height: 65vh">
        <iframe width="100%" height="100%" class="border border-gray-200" src="https://datastudio.google.com/embed/reporting/9dac940b-1f04-42a9-bdfd-8ebb9064f4ee/page/y08zC" frameborder="0"  allowfullscreen></iframe>
    </div>
    <div class=" w-2/12  overflow" >
        @include('partials.sidebarstatistik')

    </div>
</div>
</div>
<footer class="w-full fixed bottom-0 z-20 py-5 mt-6">
    <div class="mx-auto max-w-7xl flex flex-col justify-center items-center text-center px-4 py-4">
        <img src="{{ asset('assets/img/stranas-partner.png') }}" alt="partner stranaspk" class="h-12 ">
    </div>
    <div class="flex items-center justify-between space-x-4">
        <div class="bg-red-600 h-1 w-5/12"></div>
        <div class="2/12 ">
            <h4 class="text-xss text-center">COPYRIGHT © 2022 STRANAS PK. ALL RIGHTS RESERVED</h4>
        </div>
        <div class="bg-red-600 h-1 w-5/12"></div>
    </div>
</footer>


@endsection
