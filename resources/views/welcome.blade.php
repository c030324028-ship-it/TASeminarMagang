<x-layouts.app title="Beranda | Aplikasi Web">

    <div class="min-h-[calc(100vh-100px)] flex flex-col justify-center mb-16 pt-4">
        <header class="text-center py-6">
            <h1 class="text-4xl font-medium mb-3">Portal Informasi Karir</h1>
            <p class="text-xl text-gray-800">Sistem Informasi Seleksi Terpadu</p>
        </header>

        <section class="flex justify-center items-stretch gap-4 md:gap-6 flex-grow mb-6 relative">
            <button id="btnPrev" class="wire-box bg-white/80 w-16 md:w-24 flex-shrink-0 cursor-pointer hover:bg-gray-100 z-10 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            
            <div class="wire-box flex-grow max-w-5xl text-xl relative overflow-hidden p-0 bg-white">
                <div id="carouselSlider" class="flex w-full h-full transition-transform duration-500 ease-out">
                    <div class="w-full h-full flex-shrink-0 bg-gray-200 flex items-center justify-center font-medium">Headline Berita Utama 1</div>
                    <div class="w-full h-full flex-shrink-0 bg-gray-400 flex items-center justify-center font-medium text-white">Headline Berita Utama 2</div>
                    <div class="w-full h-full flex-shrink-0 bg-gray-600 flex items-center justify-center font-medium text-white">Headline Berita Utama 3</div>
                </div>
            </div>
            
            <button id="btnNext" class="wire-box bg-white/80 w-16 md:w-24 flex-shrink-0 cursor-pointer hover:bg-gray-100 z-10 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </section>
        
        <div class="flex justify-center gap-4 pb-4" id="carouselDots">
            <button class="dot w-7 h-7 rounded-full bg-black border-2 border-black" onclick="goToSlide(0)"></button>
            <button class="dot w-7 h-7 rounded-full bg-white border-2 border-black hover:bg-gray-200" onclick="goToSlide(1)"></button>
            <button class="dot w-7 h-7 rounded-full bg-white border-2 border-black hover:bg-gray-200" onclick="goToSlide(2)"></button>
        </div>
    </div>

    <section class="mb-16 scroll-mt-28 bg-gray-50 border-2 border-black p-8 rounded-xl shadow-sm" id="kalender">
        <h2 class="text-3xl font-medium mb-6 text-center">Jadwal Seleksi</h2>
        <div class="border-2 border-black bg-white p-3 flex justify-between items-center mb-6">
            <div class="flex items-center gap-4">
                <button class="hover:text-gray-600 transition"><svg class="w-6 h-6 font-bold" fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg></button>
                <div class="bg-gray-200 px-8 py-1.5 font-medium">Agustus</div>
                <button class="hover:text-gray-600 transition"><svg class="w-6 h-6 font-bold" fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg></button>
            </div>
            <div class="bg-gray-200 px-16 py-1.5 font-medium text-center">Kalender Jadwal 2026 ver. umum</div>
            <div class="px-4">
                <button class="hover:text-gray-600 transition"><svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg></button>
            </div>
        </div>
        
        <div class="border-2 border-black bg-white p-4">
            <div class="grid grid-cols-7 gap-2 text-center font-bold mb-2 pb-2 border-b-2 border-gray-300 text-sm">
                <div>Min</div><div>Sen</div><div>Sel</div><div>Rab</div><div>Kam</div><div>Jum</div><div>Sab</div>
            </div>
            <div class="grid grid-cols-7 gap-2 text-center auto-rows-[60px] text-sm">

                <div class="text-gray-400 p-1 flex items-center justify-center">26</div><div class="text-gray-400 p-1 flex items-center justify-center">27</div><div class="text-gray-400 p-1 flex items-center justify-center">28</div><div class="text-gray-400 p-1 flex items-center justify-center">29</div><div class="text-gray-400 p-1 flex items-center justify-center">30</div><div class="text-gray-400 p-1 flex items-center justify-center">31</div>
                
                <div class="border-2 border-gray-200 bg-gray-100 flex flex-col justify-center items-center p-1 relative hover:border-black cursor-pointer transition">
                    <span class="font-medium text-base">1</span>
                    <div class="w-1.5 h-1.5 rounded-full bg-black mt-1"></div>
                </div>

                @for ($i = 2; $i <= 31; $i++)
                    <div class="border-2 border-transparent flex flex-col justify-center items-center p-1 hover:border-gray-300 cursor-pointer transition">{{ $i }}</div>
                @endfor
                <div class="text-gray-400 p-1 flex items-center justify-center">1</div><div class="text-gray-400 p-1 flex items-center justify-center">2</div><div class="text-gray-400 p-1 flex items-center justify-center">3</div><div class="text-gray-400 p-1 flex items-center justify-center">4</div>
            </div>
        </div>
    </section>

    <section class="mb-16 scroll-mt-28 bg-gray-100 border-2 border-black p-8 rounded-xl shadow-sm" id="publikasi">
        <h2 class="text-3xl font-medium mb-6 text-center">Pusat Informasi</h2>
        <div class="flex gap-4 mb-6">
            <button class="wire-box flex-1 py-4 bg-white font-medium hover:bg-gray-50 transition">Berita Terkini</button>
            <button class="wire-box flex-1 py-4 bg-white font-medium hover:bg-gray-50 transition">Pengumuman Resmi</button>
            <button class="wire-box flex-1 py-4 bg-white font-medium hover:bg-gray-50 transition">Agenda Kegiatan</button>
            <button class="wire-box flex-1 py-4 bg-white font-medium hover:bg-gray-50 transition">Pusat Unduhan</button>
        </div>
        
        <div class="flex flex-col md:flex-row gap-6">
            <div class="wire-box md:w-[35%] bg-white p-6 flex flex-col gap-4 min-h-[450px]">
                <h3 class="text-xl font-bold border-b-2 border-black pb-2">Pengumuman Terbaru</h3>
                <div class="flex flex-col gap-3 flex-grow">
                    <div class="border-l-4 border-gray-600 pl-3">
                        <p class="text-sm text-gray-500">12 Agustus 2026</p>
                        <a href="#" class="font-medium hover:underline">Hasil Seleksi Administrasi Tahap 1</a>
                    </div>
                    <div class="border-l-4 border-gray-600 pl-3">
                        <p class="text-sm text-gray-500">08 Agustus 2026</p>
                        <a href="#" class="font-medium hover:underline">Jadwal Pengambilan Kartu Ujian</a>
                    </div>
                    <div class="border-l-4 border-gray-600 pl-3">
                        <p class="text-sm text-gray-500">01 Agustus 2026</p>
                        <a href="#" class="font-medium hover:underline">Panduan Penggunaan Sistem CAT 2026</a>
                    </div>
                </div>
                <button class="w-full py-2 border-2 border-black font-medium hover:bg-gray-100 mt-auto">Lihat Semua</button>
            </div>

            <div class="md:w-[65%] flex flex-col gap-6">
                <div class="wire-box bg-gray-200 h-[250px] flex items-center justify-center text-xl text-gray-600">
                    [Placeholder Gambar Utama / Banner Pengumuman]
                </div>
                <div class="wire-box bg-white p-6 flex-grow">
                    <h3 class="text-2xl font-bold mb-2">Persiapan Mengikuti Seleksi Kompetensi Dasar (SKD)</h3>
                    <p class="text-sm text-gray-500 mb-4">Dipublikasikan oleh Panitia Pusat - 10 Agustus 2026</p>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Menjelang pelaksanaan Seleksi Kompetensi Dasar (SKD) tahun 2026, seluruh peserta diwajibkan untuk mempersiapkan dokumen identitas asli berupa KTP dan Kartu Peserta Ujian yang dicetak berwarna.
                    </p>
                    <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm">
                        <li>Hadir 90 menit sebelum jadwal sesi dimulai.</li>
                        <li>Mengenakan kemeja putih polos dan celana/rok kain hitam.</li>
                        <li>Dilarang membawa alat elektronik, perhiasan, maupun ikat pinggang ke dalam ruang ujian.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-16 scroll-mt-28 bg-gray-200 border-2 border-black p-8 rounded-xl shadow-sm" id="timeline">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-medium mb-2">Timeline Pelaksanaan</h2>
            <p class="text-lg text-gray-700">Rangkaian Alur Kegiatan Seleksi 2026</p>
        </div>
        <div class="wire-box bg-white p-24 md:px-32 md:py-32 relative shadow-sm">
            <div class="absolute top-1/2 left-20 right-20 h-1.5 bg-gray-600 -translate-y-1/2 z-0"></div>
            <div class="relative z-10 w-full flex justify-between items-center">
                <!-- Node 1 -->
                <div class="relative flex flex-col items-center justify-center">
                    <div class="absolute bottom-full mb-10 bg-[#d9d9d9] px-6 py-2 rounded-full font-bold whitespace-nowrap text-base text-black z-20 shadow-sm border-2 border-black">Pendaftaran</div>
                    <div class="absolute bottom-1/2 w-0.5 h-14 bg-gray-600 z-10"></div>
                    <div class="w-8 h-8 rounded-full bg-white border-[3px] border-gray-800 relative z-20"></div>
                </div>
                <!-- Node 2 -->
                <div class="relative flex flex-col items-center justify-center">
                    <div class="w-8 h-8 rounded-full bg-[#e5e7eb] border-[3px] border-gray-400 relative z-20"></div>
                    <div class="absolute top-1/2 w-0.5 h-24 bg-gray-400 z-10"></div>
                    <div class="absolute top-full mt-12 bg-gray-100 px-6 py-2 rounded-full font-bold whitespace-nowrap text-base text-gray-500 z-20 shadow-sm border-2 border-gray-300">Penyerahan Berkas</div>
                </div>
                <!-- Node 3 -->
                <div class="relative flex flex-col items-center justify-center">
                    <div class="absolute bottom-full mb-10 bg-gray-100 px-6 py-2 rounded-full font-bold whitespace-nowrap text-base text-gray-500 z-20 shadow-sm border-2 border-gray-300">Tes Tahap 1</div>
                    <div class="absolute bottom-1/2 w-0.5 h-14 bg-gray-400 z-10"></div>
                    <div class="w-8 h-8 rounded-full bg-[#e5e7eb] border-[3px] border-gray-400 relative z-20"></div>
                </div>
                <!-- Node 4 -->
                <div class="relative flex flex-col items-center justify-center">
                    <div class="w-8 h-8 rounded-full bg-[#e5e7eb] border-[3px] border-gray-400 relative z-20"></div>
                    <div class="absolute top-1/2 w-0.5 h-24 bg-gray-400 z-10"></div>
                    <div class="absolute top-full mt-12 bg-gray-100 px-6 py-2 rounded-full font-bold whitespace-nowrap text-base text-gray-500 z-20 shadow-sm border-2 border-gray-300">Tes Tahap 2</div>
                </div>
                <!-- Node 5 -->
                <div class="relative flex flex-col items-center justify-center">
                    <div class="absolute bottom-full mb-10 bg-gray-100 px-6 py-2 rounded-full font-bold whitespace-nowrap text-base text-gray-500 z-20 shadow-sm border-2 border-gray-300">Pengumuman</div>
                    <div class="absolute bottom-1/2 w-0.5 h-14 bg-gray-400 z-10"></div>
                    <div class="w-8 h-8 rounded-full bg-[#e5e7eb] border-[3px] border-gray-400 relative z-20"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-10 scroll-mt-28 bg-gray-300 border-2 border-black p-8 rounded-xl shadow-sm" id="kontak">
        <h2 class="text-3xl font-medium mb-8 text-center">Hubungi Kami</h2>
        <div class="flex flex-wrap justify-center gap-6">
            <div class="wire-box bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-1 transition-transform">
                <svg class="w-12 h-12 mb-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path></svg>
                <h3 class="text-xl font-bold mb-2">Alamat</h3>
                <p class="text-sm text-gray-600">Jl. Hasan Basri No. 1<br>Banjarbaru, Kalimantan Selatan</p>
            </div>
            
            <div class="wire-box bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-1 transition-transform">
                <svg class="w-12 h-12 mb-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path></svg>
                <h3 class="text-xl font-bold mb-2">Email</h3>
                <p class="text-sm text-gray-600">bantuan@instansi.go.id<br>info@instansi.go.id</p>
            </div>

            <div class="wire-box bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-1 transition-transform">
                <svg class="w-12 h-12 mb-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.896-1.596-5.48-4.18-7.077-7.077l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path></svg>
                <h3 class="text-xl font-bold mb-2">Telepon</h3>
                <p class="text-sm text-gray-600">(0511) 1234-5678<br>0812-3456-7890</p>
            </div>

            <div class="wire-box bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-1 transition-transform">
                <svg class="w-12 h-12 mb-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"></path></svg>
                <h3 class="text-xl font-bold mb-2">Konsultasi</h3>
                <p class="text-sm text-gray-600">Senin - Jumat<br>08:00 - 15:00 WITA</p>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let currentSlide = 0;
            const totalSlides = 3;
            const slider = document.getElementById('carouselSlider');
            const dots = document.querySelectorAll('.dot');

            const updateCarousel = () => {
                slider.style.transform = `translateX(-${currentSlide * 100}%)`;
                dots.forEach((dot, index) => {
                    if (index === currentSlide) {
                        dot.classList.replace('bg-white', 'bg-black');
                    } else {
                        dot.classList.replace('bg-black', 'bg-white');
                    }
                });
            };

            window.goToSlide = (index) => {
                currentSlide = index;
                updateCarousel();
            };

            document.getElementById('btnNext').addEventListener('click', () => {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            });

            document.getElementById('btnPrev').addEventListener('click', () => {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateCarousel();
            });
        });
    </script>

</x-layouts.app>