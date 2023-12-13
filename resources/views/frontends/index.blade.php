@extends('layouts.indexLayout')

@section('content')
    @include('partials.navMobile')
    <section class="max-w-7xl mx-auto px-4 flex sm:flex-row flex-col sm:space-x-6 space-x-0" x-data="{open:''}" @click.away="open=''">
        <div class="sm:w-6/12 w-full sm:mt-0 mt-6">
            @include('partials.nav')
            <div class="flex flex-col  sm:space-y-14 space-y-6 px-4">
                <div>
                    <div class="flex flex-col ">
                        <a class="uppercase sm:text-5xl text-xl font-bold ">SISTEM MONITORING</a>
                        <a class="uppercase sm:text-5xl text-xl font-bold ">PERCEPATAN IMPLEMENTASI</a>
                        <a class="uppercase sm:text-5xl text-xl font-bold ">ONE MAP POLICY</a>
                    </div>
                    <div class="flex space-x-2 items-center">
                        <a class="font-light sm:text-2xl text-base" >FOKUS</a>
                        <div class="h-1 w-1 bg-black rounded-full"></div>
                        <a class="font-light sm:text-2xl text-base" >TERUKUR</a>
                        <div class="h-1 w-1 bg-black rounded-full"></div>
                        <a class="font-light sm:text-2xl text-base" >BERDAMPAK</a>
                    </div>
                </div>
                <div class="sm:w-11/12 w-full">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe src="https://www.youtube.com/embed/3hhmY48okyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
        <div class="sm:w-6/12 w-full mt-14">
            <div :class="(open) ? 'flex flex-col space-y-1' : 'flex flex-col sm:space-y-5 space-y-2'  ">
                <div :class="(open === 'open1') ? 'h-homepage1 bg-red-600 z-10 transform duration-300' : (open === 'open2' || open === 'open3' || open === 'open4' || open === 'open5') ? 'py-1 bg-red-600 px-4 select-none text-white text-base font-bold ': 'sm:py-10 py-4 bg-red-600 px-4 select-none cursor-pointer text-white sm:text-3xl text-base font-bold'"  @click="open='open1'" >
                    <a href="#" :class="(open === 'open1' ? 'hidden' : 'block')">PENGUKUHAN KAWASAN HUTAN</a>
                    <div class="z-20 h-full flex flex-col justify-end px-4 py-6" x-show="open==='open1'" >
                        <div class="flex flex-col space-y-4 ">
                            <div class="sm:w-6/12 w-full">
                                <h1 class="text-3xl text-white font-bold">PENGUKUHAN KAWASAN HUTAN</h1>
                            </div>
                            <div class="sm:w-10/12 w-full">
                                <p class="text-white">Ditetapkannya kawasan hutan 100% - di 5 Provinsi piloting Kebijakan Satu Peta (KLHK)</p>
                            </div>
                            <div class="border-b border-white"></div>
                            <a href="{{ url('/statistik/dinamika') }}" class=" px-4 py-2 border border-white text-center text-white sm:w-4/12 w-full ">SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
                <div :class="(open === 'open1' || open === 'open3' || open === 'open4' || open === 'open5') ? 'py-1 bg-red-600 px-4 select-none text-white text-base font-bold ' : (open === 'open2') ? 'h-homepage2 transform duration-300 bg-red-600' : 'sm:py-10 py-4 bg-red-600 px-4 select-none cursor-pointer text-white sm:text-3xl text-base font-bold'" @click="open='open2'">
                    <a href="#" :class="(open === 'open2' ? 'hidden' : 'block')">INTEGRASI RDTR DENGAN OSS</a>
                    <div class="z-20 h-full flex flex-col justify-end px-4 py-6" x-show="open==='open2'">
                        <div class="flex flex-col space-y-4 ">
                            <div class="sm:w-6/12 w-full">
                                <h1 class="text-3xl text-white font-bold">INTEGRASI RDTR DENGAN OSS</h1>
                            </div>
                            <div class="sm:w-10/12 w-full">
                                <p class="text-white">Tersedianya peta digital Rencana Detail Tata Ruang yang terintegrasi dengan OSS  di 5 provinsi  kebijakan satu peta (Kementerian ATR, 42 Kab/Kota)</p>
                            </div>
                            <div class="border-b border-white"></div>
                            <a href="{{ url('/statistik/dinamika') }}" class="sm:w-4/12 w-full px-4 py-2 border border-white text-center text-white">SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
                <div :class="(open === 'open1' || open === 'open2' || open === 'open4' || open === 'open5') ? 'py-1 bg-red-600 px-4 select-none text-white text-base font-bold ' : (open === 'open3') ? 'h-homepage3 transform duration-300 bg-red-600' : 'sm:py-10 py-4 bg-red-600 px-4 select-none cursor-pointer text-white sm:text-3xl text-base font-bold'" @click="open='open3'">
                    <a href="#" :class="(open === 'open3' ? 'hidden' : 'block')">KOMPILASI DAN INTEGRASI IZIN SAWIT</a>
                    <div class="z-20 h-full flex flex-col justify-end px-4 py-6" x-show="open==='open3'">
                        <div class="flex flex-col space-y-4 ">
                            <div class="sm:w-6/12 w-full">
                                <h1 class="text-3xl text-white font-bold">KOMPILASI DAN INTEGRASI IZIN SAWIT</h1>
                            </div>
                            <div class="sm:w-10/12 w-full">
                                <p class="text-white">Terselesaikannya kompilasi dan integrasi Informasi Geospasial Tematik di 4 provinsi piloting: Pemprov Riau, Pemprov Kalimantan Timur, Pemprov Sulawesi Barat, dan Pemprov Papua (BIG, Kementan, 4 Provinsi, 28 Kab/Kota)                                </p>
                            </div>
                            <div class="border-b border-white"></div>
                            <a href="{{ url('/statistik/dinamika') }}" class="sm:w-4/12 w-full px-4 py-2 border border-white text-center text-white">SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
                <div :class="(open === 'open1' || open === 'open2' || open === 'open3' || open === 'open5') ? 'py-1 bg-red-600 px-4 select-none text-white text-base font-bold ' : (open === 'open4') ? 'h-homepage4 transform duration-300 bg-red-600' : 'sm:py-10 py-4 bg-red-600 px-4 select-none cursor-pointer text-white sm:text-3xl text-base font-bold'" @click="open='open4'">
                    <a href="#" :class="(open === 'open4' ? 'hidden' : 'block')">PENYELESAIAN PITTI KALTENG</a>
                    <div class="z-20 h-full flex flex-col justify-end px-4 py-6" x-show="open==='open4'">
                        <div class="flex flex-col space-y-4 ">
                            <div class="sm:w-6/12 w-full">
                                <h1 class="text-3xl text-white font-bold">PENYELESAIAN PITTI KALTENG</h1>
                            </div>
                            <div class="sm:w-10/12 w-full">
                                <p class="text-white">Terlaksananya rekomendasi penyelesaian tumpang tindih di Pemprov Kalimantan Tengah (KLHK, ATR/BPN, Kementan, KESDM, Provinsi Kalteng, 14 Kab/Kota)</p>
                            </div>
                            <div class="border-b border-white"></div>
                            <a href="{{ url('/statistik/dinamika') }}" class="sm:w-4/12 w-full px-4 py-2 border border-white text-center text-white">SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
                <div :class="(open === 'open1' || open === 'open2' || open === 'open3' || open === 'open4') ? 'py-1 bg-red-600 px-4 select-none text-white text-base font-bold ' :(open === 'open5') ? 'h-homepage5 transform duration-300 bg-red-600' : 'sm:py-10 py-4 bg-red-600 px-4 select-none cursor-pointer text-white sm:text-3xl text-base font-bold'" @click="open='open5'">
                    <a href="#" :class="(open === 'open5' ? 'hidden' : 'block')">INTEGRASI RZWP3K DAN RTRW</a>
                    <div class="z-20 h-full flex flex-col justify-end px-4 py-6" x-show="open==='open5'">
                        <div class="flex flex-col space-y-4 ">
                            <div class="sm:w-6/12 w-full">
                                <h1 class="text-3xl text-white font-bold">INTEGRASI RZWP3K DAN RTRW</h1>
                            </div>
                            <div class="sm:w-10/12 w-full">
                                <p class="text-white">Terintegrasinya Rencana Zonasi Wilayah Pesisir dan Pulau-Pulau Kecil (RZWP3K) - Rencana Tata Ruang Wilayah di 5 provinsi kebijakan satu peta (KKP, ATR/BPN, 5 Provinsi)</p>
                            </div>
                            <div class="border-b border-white"></div>
                            <a href="{{ url('/statistik/dinamika') }}" class="sm:w-4/12 w-full px-4 py-2 border border-white text-center text-white">SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection
