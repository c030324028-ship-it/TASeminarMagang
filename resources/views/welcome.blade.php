<x-layouts.app title="Beranda | Aplikasi Web">

    <div class="min-h-[calc(100vh-100px)] flex flex-col justify-center mb-10 pt-4">
        <header class="text-center py-6">
            <h1 class="text-4xl font-medium mb-3">Judul Laman Web</h1>
            <p class="text-xl text-gray-800">Subjudul Laman Web</p>
        </header>

        <section class="flex justify-center items-stretch gap-4 md:gap-6 flex-grow mb-6 relative">
            <button id="btnPrev" class="wire-box w-16 md:w-24 flex-shrink-0 cursor-pointer hover:bg-gray-50 z-10 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            
            <div class="wire-box flex-grow max-w-5xl text-xl relative overflow-hidden p-0">
                <div id="carouselSlider" class="flex w-full h-full transition-transform duration-500 ease-out">
                    <!-- Lembar 1 -->
                    <div class="w-full h-full flex-shrink-0 bg-gray-200 flex items-center justify-center font-medium">Gambar 1</div>
                    <!-- Lembar 2 -->
                    <div class="w-full h-full flex-shrink-0 bg-gray-400 flex items-center justify-center font-medium text-white">Gambar 2</div>
                    <!-- Lembar 3 -->
                    <div class="w-full h-full flex-shrink-0 bg-gray-600 flex items-center justify-center font-medium text-white">Gambar 3</div>
                </div>
            </div>
            
            <button id="btnNext" class="wire-box w-16 md:w-24 flex-shrink-0 cursor-pointer hover:bg-gray-50 z-10 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </section>
        
        <div class="flex justify-center gap-4 pb-4" id="carouselDots">
            <button class="dot w-7 h-7 rounded-full bg-black border-2 border-black" onclick="goToSlide(0)"></button>
            <button class="dot w-7 h-7 rounded-full bg-white border-2 border-black hover:bg-gray-200" onclick="goToSlide(1)"></button>
            <button class="dot w-7 h-7 rounded-full bg-white border-2 border-black hover:bg-gray-200" onclick="goToSlide(2)"></button>
        </div>
    </div>

    <section class="mb-24 scroll-mt-24" id="kalender">
        <div class="border-2 border-black bg-white p-3 flex justify-between items-center mb-6 shadow-sm">
            <div class="flex items-center gap-4">
                <button class="hover:text-gray-600 transition"><svg class="w-8 h-8 font-bold" fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg></button>
                <div class="bg-gray-200 px-12 py-2 font-medium">Agustus</div>
                <button class="hover:text-gray-600 transition"><svg class="w-8 h-8 font-bold" fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg></button>
            </div>
            <div class="bg-gray-200 px-32 py-2 font-medium text-center">Kalender Jadwal 2026 ver. umum</div>
            <div class="px-4">
                <button class="hover:text-gray-600 transition"><svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg></button>
            </div>
        </div>
        
        <div class="border-2 border-black bg-white p-6 shadow-sm">
            <div class="grid grid-cols-7 gap-4 text-center font-bold mb-4 pb-2 border-b-2 border-gray-300">
                <div>Min</div><div>Sen</div><div>Sel</div><div>Rab</div><div>Kam</div><div>Jum</div><div>Sab</div>
            </div>

            <div class="grid grid-cols-7 gap-4 text-center auto-rows-[80px]">
                <div class="text-gray-400 p-2">26</div><div class="text-gray-400 p-2">27</div><div class="text-gray-400 p-2">28</div><div class="text-gray-400 p-2">29</div><div class="text-gray-400 p-2">30</div><div class="text-gray-400 p-2">31</div>

                <div class="border-2 border-gray-200 bg-gray-50 flex flex-col justify-start items-center p-2 relative hover:border-black cursor-pointer transition">
                    <span class="font-medium text-lg">1</span>
                    <div class="w-2 h-2 rounded-full bg-black mt-2"></div>
                </div>

                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">2</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">3</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">4</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">5</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">6</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">7</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">8</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">9</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">10</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">11</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">12</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">13</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">14</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">15</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">16</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">17</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">18</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">19</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">20</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">21</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">22</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">23</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">24</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">25</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">26</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">27</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">28</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">29</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">30</div>
                <div class="border-2 border-transparent flex flex-col justify-start items-center p-2 hover:border-gray-300 cursor-pointer transition">31</div>

                <div class="text-gray-400 p-2">1</div><div class="text-gray-400 p-2">2</div><div class="text-gray-400 p-2">3</div><div class="text-gray-400 p-2">4</div><div class="text-gray-400 p-2">5</div>
            </div>
        </div>
    </section>

    <section class="mb-24 scroll-mt-24" id="publikasi">
        <div class="flex gap-4 mb-4">
            <button class="wire-box flex-1 py-6 font-medium hover:bg-gray-50 transition">Berita</button>
            <button class="wire-box flex-1 py-6 font-medium hover:bg-gray-50 transition">Pengumuman</button>
            <button class="wire-box flex-1 py-6 font-medium hover:bg-gray-50 transition">Section Item 3</button>
            <button class="wire-box flex-1 py-6 font-medium hover:bg-gray-50 transition">Section Item 4</button>
        </div>
        <div class="flex gap-4 mb-4">
            <div class="wire-box w-[35%] h-[550px] text-xl">Section Informasi</div>
            <div class="w-[65%] flex flex-col gap-4">
                <div class="wire-box h-[400px] text-xl">Section Gambar</div>
                <div class="wire-box flex-grow text-xl">Section Deskripsi</div>
            </div>
        </div>
    </section>

    <section class="mb-20 pt-10 scroll-mt-24" id="timeline">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-medium mb-4">Timeline</h2>
            <p class="text-xl text-gray-700">Rangkaian Alur Kegiatan CAT</p>
        </div>
        <div class="wire-box p-24 md:px-32 md:py-40 relative shadow-sm">
            <div class="absolute top-1/2 left-20 right-20 h-1.5 bg-gray-600 -translate-y-1/2 z-0"></div>
            <div class="relative z-10 w-full flex justify-between items-center">
                <!-- Node 1 -->
                <div class="relative flex flex-col items-center justify-center">
                    <div class="absolute bottom-full mb-10 bg-[#d9d9d9] px-6 py-2 rounded-full font-bold whitespace-nowrap text-lg text-black z-20 shadow-sm">Pendaftaran</div>
                    <div class="absolute bottom-1/2 w-0.5 h-14 bg-gray-600 z-10"></div>
                    <div class="w-10 h-10 rounded-full bg-[#e5e7eb] border-[3px] border-gray-600 relative z-20"></div>
                </div>
                <!-- Node 2 -->
                <div class="relative flex flex-col items-center justify-center">
                    <div class="w-10 h-10 rounded-full bg-[#e5e7eb] border-[3px] border-gray-600 relative z-20"></div>
                    <div class="absolute top-1/2 w-0.5 h-24 bg-gray-600 z-10"></div>
                    <div class="absolute top-full mt-12 bg-[#d9d9d9] px-6 py-2 rounded-full font-bold whitespace-nowrap text-lg text-black z-20 shadow-sm">Penyerahan Berkas</div>
                </div>
                <!-- Node 3 -->
                <div class="relative flex flex-col items-center justify-center">
                    <div class="absolute bottom-full mb-10 bg-[#d9d9d9] px-6 py-2 rounded-full font-bold whitespace-nowrap text-lg text-black z-20 shadow-sm">Pelaksanaan Tes Tahap 1</div>
                    <div class="absolute bottom-1/2 w-0.5 h-14 bg-gray-600 z-10"></div>
                    <div class="w-10 h-10 rounded-full bg-[#e5e7eb] border-[3px] border-gray-600 relative z-20"></div>
                </div>
                <!-- Node 4 -->
                <div class="relative flex flex-col items-center justify-center">
                    <div class="w-10 h-10 rounded-full bg-[#e5e7eb] border-[3px] border-gray-600 relative z-20"></div>
                    <div class="absolute top-1/2 w-0.5 h-24 bg-gray-600 z-10"></div>
                    <div class="absolute top-full mt-12 bg-[#d9d9d9] px-6 py-2 rounded-full font-bold whitespace-nowrap text-lg text-black z-20 shadow-sm">Pelaksanaan Tes Tahap 2</div>
                </div>
                <!-- Node 5 -->
                <div class="relative flex flex-col items-center justify-center">
                    <div class="absolute bottom-full mb-10 bg-[#d9d9d9] px-6 py-2 rounded-full font-bold whitespace-nowrap text-lg text-black z-20 shadow-sm">Pengumuman Hasil</div>
                    <div class="absolute bottom-1/2 w-0.5 h-14 bg-gray-600 z-10"></div>
                    <div class="w-10 h-10 rounded-full bg-[#e5e7eb] border-[3px] border-gray-600 relative z-20"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-10 scroll-mt-24" id="kontak">
        <div class="wire-box p-12 flex justify-center gap-10">
            <div class="wire-box w-56 h-56 text-3xl font-medium">Alamat</div>
            <div class="wire-box w-56 h-56 text-3xl font-medium">Email</div>
            <div class="wire-box w-56 h-56 text-3xl font-medium">Telepon</div>
            <div class="wire-box w-56 h-56 text-3xl font-medium">Konsultasi</div>
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