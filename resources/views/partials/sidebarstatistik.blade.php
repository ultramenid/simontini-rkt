<h1 class="font-bold">Kawasan Hutan</h1>
<div class="overflow-x-auto">
    <div class="flex sm:flex-col flex-row sm:space-y-2 space-y-0 sm:space-x-0 space-x-6">
        <div class="@if($nav == 'dinamika') h-filter  @else  select-none  @endif border-red-600 border px-4 py-1 w-full"  >
            <div class="flex w-full justify-between items-center py-1">
                <a href="{{ url('/statistik/dinamika') }}" class="font font-semibold text-xs">Dinamika </a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
            </div>
            <div class="@if($nav == 'dinamika') block @else hidden @endif">
                <p class="text-xs">Menyajikan informasi pemutakhiran Kawasan Hutan, mencakup perubahan peruntukan dari kawasan hutan menjadi bukan kawasan hutan, serta perubahan sebagian/seluruh fungsi hutan dalam satu atau beberapa kelompok hutan menjadi fungsi kawasan hutan yang lain setelah penunjukan Kawasan Hutan. </p>
                {{-- <p class="text-xs text-black font-semibold mt-2">Sumber Data:</p> --}}
            </div>
        </div>
        <div class="@if($nav == 'tatabatas') h-filter  @else  select-none  @endif border-red-600 border px-4 py-1">
            <div class="flex w-full justify-between items-center py-1">
                <a href="{{ url('/statistik/tatabatas') }}" class="font font-semibold text-xs">Pelepasan </a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
            </div>
            <div class="@if($nav == 'tatabatas') block @else hidden @endif">
                <p class="text-xs">Perubahan peruntukan Kawasan Hutan Produksi Konversi dan/atau Hutan Produksi Tetap menjadi bukan Kawasan Hutan. Pelepasan kawasan hutan dilakukan secara parsial berdasarkan permohonan menteri atau pimpinan lembaga; gubernur, bupati/walikota; pimpinan badan hukum, atau perseorangan; kelompok orang, dan/atau masyarakat. </p>
                {{-- <p class="text-xs text-black font-semibold mt-2">Sumber Data:</p> --}}
            </div>
        </div>
        <div class="@if($nav == 'penetapan') h-filter  @else  select-none  @endif border-red-600 border px-4 py-1">
            <div class="flex w-full justify-between items-center py-1">
                <a href="{{ url('/statistik/penetapan') }}" class="font font-semibold text-xs">Penetapan </a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
            </div>
            <div class="@if($nav == 'penetapan') block @else hidden @endif">
                <p class="text-xs">Penegasan kepastian hukum dan status, luas suatu kawasan hutan menjadi kawasan hutan tetap. Menteri menetapkan kawasan hutan didasarkan atas berita acara tata batas kawasan hutan dan peta tata batas kawasan hutan yang telah temu gelang. </p>
                {{-- <p class="text-xs text-black font-semibold mt-2">Sumber Data:</p> --}}
            </div>
        </div>
        <div class="@if($nav == 'sertifikat') h-filter  @else  select-none  @endif border-red-600 border px-4 py-1">
            <div class="flex w-full justify-between items-center py-1">
                <a href="{{ url('/statistik/sertifikat') }}" class="font font-semibold text-xs">Sertifikat Hak atas Tanah  </a>

                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
            </div>
            <div class="@if($nav == 'sertifikat') block @else hidden @endif">
                <p class="text-xs">Bidang tanah berdasarkan Sertifikat Hak atas Tanah (SHAT), dalam hal ini merupakan bukti kepemilikan seseorang atas suatu tanah beserta bangunannya yang berada dalam kawasan hutan berupa Hak Pakai, Hak Milik, Hak Pengelolaan Lahan, Hak Wakaf, Hak Guna Usaha, dan Hak Guna Bangunan. </p>
                {{-- <p class="text-xs text-black font-semibold mt-2">Sumber Data:</p> --}}
            </div>
        </div>
        <div class="@if($nav == 'kegiatanusaha') h-filter  @else  select-none  @endif border-red-600 border px-4 py-1">
            <div class="flex w-full justify-between items-center py-1">
                <a href="{{ url('/statistik/kegiatanusaha') }}" class="font font-semibold text-xs"> Kegiatan Usaha Terbangun  </a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
            </div>
            <div class="@if($nav == 'kegiatanusaha') block @else hidden @endif">
                <p class="text-xs">Kegiatan usaha yang telah terbangun dan memiliki izin di dalam Kawasan Hutan sebelum berlakunya Undang-Undang Nomor 1 1 Tahun 2020  tentang Cipta Kerja.                </p>
                {{-- <p class="text-xs text-black font-semibold mt-2">Sumber Data:</p> --}}
            </div>
        </div>
    </div>
</div>

