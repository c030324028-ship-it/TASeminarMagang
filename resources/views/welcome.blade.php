<x-layouts.app title="Beranda | Aplikasi Web">
    
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1; 
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1; 
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8; 
        }
        
        .filter-dropdown-container:hover .filter-dropdown,
        .filter-dropdown-container:focus-within .filter-dropdown {
            opacity: 1;
            visibility: visible;
        }
    </style>

    <div class="flex flex-col justify-start mb-16 pt-4 w-full">
        <header class="text-center pb-4 pt-2 max-w-[1400px] mx-auto w-full px-4">
            <h1 class="text-4xl font-medium mb-2">Portal Informasi Karir</h1>
            <p class="text-xl text-gray-800">Sistem Informasi Seleksi Terpadu</p>
        </header>

        <section class="relative w-full overflow-hidden group mb-6 min-h-[350px] md:min-h-[450px]">
            <div id="carouselSlider" class="flex w-full h-full absolute inset-0 transition-transform duration-700 ease-in-out">
                <!-- [CLONE] Slide 3 -->
                <div class="slide-item w-[70%] h-full flex-shrink-0 transition-all duration-700 opacity-50 scale-95">
                    <div class="w-full h-full border-2 border-black rounded-xl shadow-sm relative overflow-hidden bg-gray-600 flex items-center justify-center">
                        <img src="assets/images/sample-carousel3.jpg" alt="Slide 3" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40"></div>
                        <span class="relative z-10 font-medium text-white text-2xl md:text-4xl text-center p-6">Headline Berita Utama 3</span>
                    </div>
                </div>
                <!-- [REAL] Slide 1 -->
                <div class="slide-item w-[70%] h-full flex-shrink-0 transition-all duration-700 opacity-100 scale-100">
                    <div class="w-full h-full border-2 border-black rounded-xl shadow-sm relative overflow-hidden bg-gray-200 flex items-center justify-center">
                        <img src="assets/images/sample-carousel1.jpg" alt="Slide 1" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30"></div>
                        <span class="relative z-10 font-medium text-white text-2xl md:text-4xl text-center p-6">Headline Berita Utama 1</span>
                    </div>
                </div>
                <!-- [REAL] Slide 2 -->
                <div class="slide-item w-[70%] h-full flex-shrink-0 transition-all duration-700 opacity-50 scale-95">
                    <div class="w-full h-full border-2 border-black rounded-xl shadow-sm relative overflow-hidden bg-gray-400 flex items-center justify-center">
                        <img src="assets/images/sample-carousel2.jpg" alt="Slide 2" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40"></div>
                        <span class="relative z-10 font-medium text-white text-2xl md:text-4xl text-center p-6">Headline Berita Utama 2</span>
                    </div>
                </div>
                <!-- [REAL] Slide 3 -->
                <div class="slide-item w-[70%] h-full flex-shrink-0 transition-all duration-700 opacity-50 scale-95">
                    <div class="w-full h-full border-2 border-black rounded-xl shadow-sm relative overflow-hidden bg-gray-600 flex items-center justify-center">
                        <img src="assets/images/sample-carousel3.jpg" alt="Slide 3" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40"></div>
                        <span class="relative z-10 font-medium text-white text-2xl md:text-4xl text-center p-6">Headline Berita Utama 3</span>
                    </div>
                </div>
                <!-- [CLONE] Slide 1 -->
                <div class="slide-item w-[70%] h-full flex-shrink-0 transition-all duration-700 opacity-50 scale-95">
                    <div class="w-full h-full border-2 border-black rounded-xl shadow-sm relative overflow-hidden bg-gray-200 flex items-center justify-center">
                        <img src="assets/images/sample-carousel1.jpg" alt="Slide 1" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30"></div>
                        <span class="relative z-10 font-medium text-white text-2xl md:text-4xl text-center p-6">Headline Berita Utama 1</span>
                    </div>
                </div>
            </div>

            <button id="btnPrev" class="absolute left-0 top-0 bottom-0 w-[15%] bg-gradient-to-r from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white cursor-pointer z-20 outline-none border-none">
                <svg class="w-12 h-12 md:w-16 md:h-16 drop-shadow-md" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button id="btnNext" class="absolute right-0 top-0 bottom-0 w-[15%] bg-gradient-to-l from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white cursor-pointer z-20 outline-none border-none">
                <svg class="w-12 h-12 md:w-16 md:h-16 drop-shadow-md" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            </button>

            <div class="absolute bottom-6 left-0 right-0 flex justify-center gap-3 z-30" id="carouselDots">
                <button class="dot w-3.5 h-3.5 md:w-4 md:h-4 rounded-full border-2 border-white bg-black transition-all transform scale-125 shadow-md" onclick="goToSlide(1)"></button>
                <button class="dot w-3.5 h-3.5 md:w-4 md:h-4 rounded-full border-2 border-white bg-white/60 hover:bg-white transition-all shadow-md" onclick="goToSlide(2)"></button>
                <button class="dot w-3.5 h-3.5 md:w-4 md:h-4 rounded-full border-2 border-white bg-white/60 hover:bg-white transition-all shadow-md" onclick="goToSlide(3)"></button>
            </div>
        </section>
    </div>

    <section class="mb-16 w-[calc(100%-2rem)] max-w-[1400px] mx-auto scroll-mt-28" id="kalender">
        <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-black pb-2">Agenda & Jadwal Kegiatan</h2>
        <x-kalender />
    </section>

    <section class="mb-16 w-[calc(100%-2rem)] max-w-[1400px] mx-auto scroll-mt-28 bg-gray-100 border-2 border-black p-6 md:p-8 rounded-xl shadow-sm" id="publikasi">
        <h2 class="text-3xl font-medium mb-6 text-center">Pusat Informasi</h2>
        <div class="flex gap-4 mb-6 overflow-x-auto pb-2">
            <button class="wire-box flex-1 py-4 px-4 bg-white font-medium hover:bg-gray-50 transition border-2 border-black whitespace-nowrap">Berita Terkini</button>
            <button class="wire-box flex-1 py-4 px-4 bg-white font-medium hover:bg-gray-50 transition border-2 border-black whitespace-nowrap">Pengumuman Resmi</button>
            <button class="wire-box flex-1 py-4 px-4 bg-white font-medium hover:bg-gray-50 transition border-2 border-black whitespace-nowrap">Agenda Kegiatan</button>
            <button class="wire-box flex-1 py-4 px-4 bg-white font-medium hover:bg-gray-50 transition border-2 border-black whitespace-nowrap">Pusat Unduhan</button>
        </div>
        
        <div class="flex flex-col md:flex-row gap-6">
            <div class="wire-box md:w-[35%] bg-white p-6 flex flex-col gap-4 min-h-[450px] border-2 border-black">
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
                <button class="w-full py-2 border-2 border-black font-medium hover:bg-gray-100 mt-auto" onclick="window.location.assign('/news')">Lihat Semua</button>
            </div>

            <div class="md:w-[65%] flex flex-col gap-6">
                <div class="wire-box bg-gray-200 h-[250px] flex items-center justify-center text-xl text-gray-600 border-2 border-black">
                    [Placeholder Gambar Utama / Banner Pengumuman]
                </div>
                <div class="wire-box bg-white p-6 flex-grow border-2 border-black">
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

    <section class="mb-16 w-full scroll-mt-28 bg-gray-200 border-y-2 border-black py-12 md:py-16 shadow-sm" id="timeline">
        <div class="max-w-[1400px] mx-auto w-full px-4">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-4xl font-medium mb-2">Timeline Pelaksanaan</h2>
                <p class="text-lg text-gray-700">Rangkaian Alur Kegiatan Seleksi 2026</p>
            </div>
            
            <div class="wire-box bg-white p-8 py-24 md:px-32 md:py-32 relative shadow-sm border-2 border-black overflow-x-auto">
                <div class="absolute top-1/2 left-20 right-20 h-1.5 bg-gray-600 -translate-y-1/2 z-0 min-w-[800px]"></div>
                <div class="relative z-10 w-full flex justify-between items-center min-w-[800px]">
                    <div class="relative flex flex-col items-center justify-center">
                        <div class="absolute bottom-full mb-10 bg-[#d9d9d9] px-6 py-2 rounded-full font-bold whitespace-nowrap text-base text-black z-20 shadow-sm border-2 border-black">Pendaftaran</div>
                        <div class="absolute bottom-1/2 w-0.5 h-14 bg-gray-600 z-10"></div>
                        <div class="w-8 h-8 rounded-full bg-white border-[3px] border-gray-800 relative z-20"></div>
                    </div>
                    <div class="relative flex flex-col items-center justify-center">
                        <div class="w-8 h-8 rounded-full bg-[#e5e7eb] border-[3px] border-gray-400 relative z-20"></div>
                        <div class="absolute top-1/2 w-0.5 h-24 bg-gray-400 z-10"></div>
                        <div class="absolute top-full mt-12 bg-gray-100 px-6 py-2 rounded-full font-bold whitespace-nowrap text-base text-gray-500 z-20 shadow-sm border-2 border-gray-300">Penyerahan Berkas</div>
                    </div>
                    <div class="relative flex flex-col items-center justify-center">
                        <div class="absolute bottom-full mb-10 bg-gray-100 px-6 py-2 rounded-full font-bold whitespace-nowrap text-base text-gray-500 z-20 shadow-sm border-2 border-gray-300">Tes Tahap 1</div>
                        <div class="absolute bottom-1/2 w-0.5 h-14 bg-gray-400 z-10"></div>
                        <div class="w-8 h-8 rounded-full bg-[#e5e7eb] border-[3px] border-gray-400 relative z-20"></div>
                    </div>
                    <div class="relative flex flex-col items-center justify-center">
                        <div class="w-8 h-8 rounded-full bg-[#e5e7eb] border-[3px] border-gray-400 relative z-20"></div>
                        <div class="absolute top-1/2 w-0.5 h-24 bg-gray-400 z-10"></div>
                        <div class="absolute top-full mt-12 bg-gray-100 px-6 py-2 rounded-full font-bold whitespace-nowrap text-base text-gray-500 z-20 shadow-sm border-2 border-gray-300">Tes Tahap 2</div>
                    </div>
                    <div class="relative flex flex-col items-center justify-center">
                        <div class="absolute bottom-full mb-10 bg-gray-100 px-6 py-2 rounded-full font-bold whitespace-nowrap text-base text-gray-500 z-20 shadow-sm border-2 border-gray-300">Pengumuman</div>
                        <div class="absolute bottom-1/2 w-0.5 h-14 bg-gray-400 z-10"></div>
                        <div class="w-8 h-8 rounded-full bg-[#e5e7eb] border-[3px] border-gray-400 relative z-20"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-10 w-[calc(100%-2rem)] max-w-[1400px] mx-auto scroll-mt-28 bg-gray-300 border-2 border-black p-6 md:p-8 rounded-xl shadow-sm" id="kontak">
        <h2 class="text-3xl font-medium mb-8 text-center">Hubungi Kami</h2>
        <div class="flex flex-wrap justify-center gap-6">
            <div class="wire-box bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-1 transition-transform border-2 border-black">
                <svg class="w-12 h-12 mb-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path></svg>
                <h3 class="text-xl font-bold mb-2">Alamat</h3>
                <p class="text-sm text-gray-600">Jl. Hasan Basri No. 1<br>Banjarbaru, Kalimantan Selatan</p>
            </div>
            <div class="wire-box bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-1 transition-transform border-2 border-black">
                <svg class="w-12 h-12 mb-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path></svg>
                <h3 class="text-xl font-bold mb-2">Email</h3>
                <p class="text-sm text-gray-600">bantuan@instansi.go.id<br>info@instansi.go.id</p>
            </div>
            <div class="wire-box bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-1 transition-transform border-2 border-black">
                <svg class="w-12 h-12 mb-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.896-1.596-5.48-4.18-7.077-7.077l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path></svg>
                <h3 class="text-xl font-bold mb-2">Telepon</h3>
                <p class="text-sm text-gray-600">(0511) 1234-5678<br>0812-3456-7890</p>
            </div>
            <div class="wire-box bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-1 transition-transform border-2 border-black">
                <svg class="w-12 h-12 mb-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"></path></svg>
                <h3 class="text-xl font-bold mb-2">Konsultasi</h3>
                <p class="text-sm text-gray-600">Senin - Jumat<br>08:00 - 15:00 WITA</p>
            </div>
        </div>
    </section>

    <script>
        // Carousel
        document.addEventListener('DOMContentLoaded', () => {
            let currentSlide = 1;
            let isTransitioning = false;
            const totalRealSlides = 3;
            const slider = document.getElementById('carouselSlider');
            const dots = document.querySelectorAll('.dot');
            const slides = document.querySelectorAll('.slide-item');
            let autoPlayInterval;

            const disableTransitions = () => { slider.style.transitionDuration = '0ms'; slides.forEach(s => s.style.transitionDuration = '0ms'); };
            const enableTransitions = () => { slider.style.transitionDuration = ''; slides.forEach(s => s.style.transitionDuration = ''); };

            const setTransform = (index) => {
                const translateValue = 15 - (index * 70);
                slider.style.transform = `translateX(${translateValue}%)`;
            };

            const updateVisuals = (index) => {
                let dotIndex = index - 1;
                if (dotIndex < 0) dotIndex = totalRealSlides - 1;
                if (dotIndex >= totalRealSlides) dotIndex = 0;

                dots.forEach((dot, idx) => {
                    if (idx === dotIndex) { dot.classList.add('bg-black', 'scale-125'); dot.classList.remove('bg-white/60'); }
                    else { dot.classList.remove('bg-black', 'scale-125'); dot.classList.add('bg-white/60'); }
                });

                slides.forEach((slide, idx) => {
                    if (idx === index) { slide.classList.remove('opacity-50', 'scale-95'); slide.classList.add('opacity-100', 'scale-100'); }
                    else { slide.classList.add('opacity-50', 'scale-95'); slide.classList.remove('opacity-100', 'scale-100'); }
                });
            };

            const moveToIndex = (index) => {
                if (isTransitioning) return;
                isTransitioning = true;
                currentSlide = index;
                enableTransitions();
                setTransform(currentSlide);
                updateVisuals(currentSlide);
            };

            slider.addEventListener('transitionend', (e) => {
                if (e.target !== slider) return;
                isTransitioning = false;
                if (currentSlide === 0) { currentSlide = totalRealSlides; disableTransitions(); setTransform(currentSlide); updateVisuals(currentSlide); void slider.offsetWidth; } 
                else if (currentSlide === totalRealSlides + 1) { currentSlide = 1; disableTransitions(); setTransform(currentSlide); updateVisuals(currentSlide); void slider.offsetWidth; }
            });

            window.goToSlide = (realIndex) => { if (!isTransitioning) { moveToIndex(realIndex); resetInterval(); } };
            document.getElementById('btnNext').addEventListener('click', () => { if (!isTransitioning) { moveToIndex(currentSlide + 1); resetInterval(); } });
            document.getElementById('btnPrev').addEventListener('click', () => { if (!isTransitioning) { moveToIndex(currentSlide - 1); resetInterval(); } });

            const startInterval = () => { autoPlayInterval = setInterval(() => moveToIndex(currentSlide + 1), 5000); };
            const resetInterval = () => { clearInterval(autoPlayInterval); startInterval(); };

            disableTransitions();
            setTransform(currentSlide);
            updateVisuals(currentSlide);
            void slider.offsetWidth; 
            startInterval();
        });
        
    </script>
</x-layouts.app>