<header class="bg-red-600 sticky top-0 z-50">
    <div x-data="{ nav: false }" class="px-6 py-2 bg-red-600 z-10 lg:hidden block">
        <div class="flex justify-between">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white " viewBox="0 0 20 20" fill="currentColor" @click="nav = true">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
            <div class=" flex space-x-6 text-white text-sm ">
                <img src="{{ asset('assets/logo-siska-ok1.png') }}" alt="" class="h-5">
                <img src="{{asset('assets/logoprovinsi.png')}}" alt="" class="h-5">
            </div>
        </div>


        <div class="fixed w-full h-screen z-50 bg-red-600 inset-0 overflow-y-auto " x-show="nav"
        @click.outside="nav = false"
        x-cloak style="display: none !important">
            <button class="absolute px-6 py-2 focus:outline-none text-white" @click="nav = false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="white" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
            </button>

            <div class="mt-12 space-y-3">
                <div class=" px-6">
                    <a href="{{ url('/') }}"class="mb-4 px-4 inline-block text-base leading-5 text-white font-semibold uppercase">Home<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6">
                    <a href="#"class="mb-4 px-4 inline-block text-base leading-5 text-white font-semibold uppercase">Tentang<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6">
                    <a href="{{ url('/petadata') }}"class="mb-4 px-4 inline-block text-base leading-5 text-white font-semibold uppercase">Peta dan Data<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6">
                    <a href="{{ url('/statistik/dinamika') }}"class="mb-4 px-4 inline-block text-base leading-5 text-white font-semibold uppercase">Statistik<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6">
                    <a href="#"class="mb-4 px-4 inline-block text-base leading-5 text-white font-semibold uppercase">Panduan<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6">
                    <a href="#"class="mb-4 px-4 inline-block text-base leading-5 text-white font-semibold uppercase">FAQ<a>
                    <p class="border-b border-gray-300"></p>
                </div>


            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 -py-2 sm:block hidden">
        <div class="flex justify-between px-3">
            <a></a>
        </div>
    </div>
</header>
