<nav class="sm:flex hidden  space-x-8 py-6 items-center">
    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo-stranas.png') }}" alt="stranaspk" class="h-24"></a>
        <div class="@if($navbar == 'tentang') border-b border-red-600 @endif">
            <a href="#" class="font-semibold">Tentang</a>
        </div>
        <div class="@if($navbar == 'petadata') border-b border-red-600 @endif">
            <a href="{{ url('/petadata') }}" class="font-semibold">Peta dan Data</a>
        </div>
        <div class="@if($navbar == 'statistik') border-b border-red-600 @endif">
            <a href="{{ url('/statistik/dinamika') }}" class="font-semibold">Statistik</a>
        </div>
        <div class="@if($navbar == 'panduan') border-b border-red-600 @endif">
            <a href="#" class="font-semibold">Panduan</a>
        </div>
        <div class="@if($navbar == 'faq') border-b border-red-600 @endif">
            <a href="#" class="font-semibold">FAQ</a>
        </div>
</nav>
