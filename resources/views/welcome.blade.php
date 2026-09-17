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

    <!-- SECTION CAROUSEL FULL WIDTH (NAVBAR TRANSPARAN DI ATASNYA) -->
    <section id="hero-section" class="relative w-full overflow-hidden group mb-16 h-[480px] md:h-[620px] bg-black">
        <div id="carouselSlider" class="flex w-full h-full absolute inset-0 transition-transform duration-700 ease-in-out">
            
            <!-- [CLONE] Slide 3 -->
            <div class="slide-item w-full h-full flex-shrink-0 relative overflow-hidden bg-gray-800">
                <img src="assets/images/sample-carousel3.jpg" alt="Slide 3" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-black/20"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-6 z-10 pt-20">
                    <h2 class="font-bold text-white text-3xl md:text-5xl drop-shadow-lg">Headline Berita Utama 3</h2>
                </div>
            </div>

            <!-- [REAL] Slide 1: HERO UTAMA (Judul Laman) -->
            <div class="slide-item w-full h-full flex-shrink-0 relative overflow-hidden bg-gray-900">
                <img src="assets/images/sample-carousel1.jpg" alt="Slide 1" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/30"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-6 z-10 pt-20">
                    <h1 class="text-4xl md:text-6xl font-black text-white mb-3 tracking-tight drop-shadow-md">Portal Informasi Karir</h1>
                    <p class="text-lg md:text-2xl text-gray-200 font-medium max-w-2xl drop-shadow">Sistem Informasi Seleksi Terpadu</p>
                </div>
            </div>

            <!-- [REAL] Slide 2 -->
            <div class="slide-item w-full h-full flex-shrink-0 relative overflow-hidden bg-gray-800">
                <img src="assets/images/sample-carousel2.jpg" alt="Slide 2" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-black/20"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-6 z-10 pt-20">
                    <h2 class="font-bold text-white text-3xl md:text-5xl drop-shadow-lg">Headline Utama 2</h2>
                </div>
            </div>

            <!-- [REAL] Slide 3 -->
            <div class="slide-item w-full h-full flex-shrink-0 relative overflow-hidden bg-gray-800">
                <img src="assets/images/sample-carousel3.jpg" alt="Slide 3" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-black/20"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-6 z-10 pt-20">
                    <h2 class="font-bold text-white text-3xl md:text-5xl drop-shadow-lg">Headline Utama 3</h2>
                </div>
            </div>

            <!-- [CLONE] Slide 1 -->
            <div class="slide-item w-full h-full flex-shrink-0 relative overflow-hidden bg-gray-900">
                <img src="assets/images/sample-carousel1.jpg" alt="Slide 1" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/30"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-6 z-10 pt-20">
                    <h1 class="text-4xl md:text-6xl font-black text-white mb-3 tracking-tight drop-shadow-md">Portal Informasi Karir</h1>
                    <p class="text-lg md:text-2xl text-gray-200 font-medium max-w-2xl drop-shadow">Sistem Informasi Seleksi Terpadu</p>
                </div>
            </div>

        </div>

        <!-- Tombol Navigasi Carousel -->
        <button id="btnPrev" class="absolute left-0 top-0 bottom-0 w-[10%] bg-gradient-to-r from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white cursor-pointer z-20 outline-none border-none">
            <svg class="w-10 h-10 md:w-14 md:h-14 drop-shadow-md" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
        </button>
        <button id="btnNext" class="absolute right-0 top-0 bottom-0 w-[10%] bg-gradient-to-l from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white cursor-pointer z-20 outline-none border-none">
            <svg class="w-10 h-10 md:w-14 md:h-14 drop-shadow-md" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
        </button>

        <!-- Indicator Dots Slide -->
        <div class="absolute bottom-6 left-0 right-0 flex justify-center gap-3 z-30" id="carouselDots">
            <button class="dot w-3.5 h-3.5 md:w-4 md:h-4 rounded-full border-2 border-white bg-white transition-all transform scale-125 shadow-md" onclick="goToSlide(1)"></button>
            <button class="dot w-3.5 h-3.5 md:w-4 md:h-4 rounded-full border-2 border-white bg-white/50 hover:bg-white transition-all shadow-md" onclick="goToSlide(2)"></button>
            <button class="dot w-3.5 h-3.5 md:w-4 md:h-4 rounded-full border-2 border-white bg-white/50 hover:bg-white transition-all shadow-md" onclick="goToSlide(3)"></button>
        </div>
    </section>

    <!-- SECTION AGENDA & KALENDER -->
    <section class="mb-16 w-[calc(100%-2rem)] max-w-[1400px] mx-auto scroll-mt-28" id="kalender">
        <h2 class="text-3xl font-bold text-gray-900 mb-6 pb-2 text-center">Kalender Umum</h2>
        <x-kalender />
    </section>

    <!-- SECTION PUSAT INFORMASI -->
    <section class="mb-16 w-[calc(100%-2rem)] max-w-[1400px] mx-auto scroll-mt-28" id="publikasi">
        <h2 class="text-3xl font-bold text-gray-900 mb-6 pb-2 text-center">Pusat Informasi</h2>
        <x-publikasi />
    </section>

    <!-- SECTION TIMELINE -->
    <section class="mb-16 w-[calc(100%-2rem)] max-w-[1400px] mx-auto scroll-mt-28" id="timeline">
        <div class="max-w-[1400px] mx-auto w-full">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-3 tracking-tight">Alur Pelaksanaan</h2>
                <p class="text-lg text-gray-600">Rangkaian Kegiatan Seleksi Terpadu</p>
            </div>
            
            <!-- Container Timeline - Backdrop Diperluas -->
            <div class="bg-white rounded-3xl p-12 py-28 md:px-24 md:py-40 relative shadow-2xl border border-gray-100 overflow-x-auto custom-scrollbar">
                
                <!-- Garis Utama Gradien -->
                <div class="absolute top-1/2 left-12 right-12 h-2 bg-gradient-to-r from-orange-400 via-yellow-400 to-blue-500 rounded-full -translate-y-1/2 z-0 min-w-[800px]"></div>
                
                <div class="relative z-10 w-full flex justify-between items-center min-w-[800px] px-4 md:px-8">
                    
                    <!-- Tahap 1: Pendaftaran (Atas) -->
                    <div class="relative flex flex-col items-center justify-center group cursor-pointer w-48">
                        <div class="absolute bottom-full mb-6 flex flex-col items-center transition-transform duration-300 group-hover:-translate-y-2">
                            <div class="bg-orange-500 text-white px-6 py-4 rounded-2xl shadow-lg shadow-orange-500/30 text-center border-2 border-orange-400">
                                <span class="font-bold whitespace-nowrap text-base block">Pendaftaran</span>
                            </div>
                            <div class="w-1 h-6 bg-orange-400 mt-2"></div>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-white border-4 border-orange-500 shadow-md flex items-center justify-center relative z-20 group-hover:scale-125 transition-transform duration-300">
                            <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </div>
                    </div>

                    <!-- Tahap 2: Penyerahan Berkas (Bawah) -->
                    <div class="relative flex flex-col items-center justify-center group cursor-pointer w-48">
                        <div class="w-12 h-12 rounded-full bg-white border-4 border-yellow-500 shadow-md flex items-center justify-center relative z-20 group-hover:scale-125 transition-transform duration-300">
                            <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <div class="absolute top-full mt-6 flex flex-col items-center transition-transform duration-300 group-hover:translate-y-2">
                            <div class="w-1 h-6 bg-yellow-400 mb-2"></div>
                            <div class="bg-white text-gray-800 px-6 py-4 rounded-2xl shadow-lg border-2 border-yellow-400 text-center">
                                <span class="font-bold whitespace-nowrap text-base block">Pemberkasan</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tahap 3: Tes Tahap 1 (Atas) -->
                    <div class="relative flex flex-col items-center justify-center group cursor-pointer w-48">
                        <div class="absolute bottom-full mb-6 flex flex-col items-center transition-transform duration-300 group-hover:-translate-y-2">
                            <div class="bg-white text-gray-800 px-6 py-4 rounded-2xl shadow-lg border-2 border-blue-300 text-center">
                                <span class="font-bold whitespace-nowrap text-base block">Tes Tahap 1</span>
                            </div>
                            <div class="w-1 h-6 bg-blue-300 mt-2"></div>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-white border-4 border-blue-400 shadow-md flex items-center justify-center relative z-20 group-hover:scale-125 transition-transform duration-300">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                        </div>
                    </div>

                    <!-- Tahap 4: Tes Tahap 2 (Bawah) -->
                    <div class="relative flex flex-col items-center justify-center group cursor-pointer w-48">
                        <div class="w-12 h-12 rounded-full bg-white border-4 border-blue-500 shadow-md flex items-center justify-center relative z-20 group-hover:scale-125 transition-transform duration-300">
                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                        </div>
                        <div class="absolute top-full mt-6 flex flex-col items-center transition-transform duration-300 group-hover:translate-y-2">
                            <div class="w-1 h-6 bg-blue-400 mb-2"></div>
                            <div class="bg-white text-gray-800 px-6 py-4 rounded-2xl shadow-lg border-2 border-blue-500 text-center">
                                <span class="font-bold whitespace-nowrap text-base block">Tes Tahap 2</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tahap 5: Pengumuman (Atas) -->
                    <div class="relative flex flex-col items-center justify-center group cursor-pointer w-48">
                        <div class="absolute bottom-full mb-6 flex flex-col items-center transition-transform duration-300 group-hover:-translate-y-2">
                            <div class="bg-blue-600 text-white px-6 py-4 rounded-2xl shadow-lg shadow-blue-600/30 text-center border-2 border-blue-500">
                                <span class="font-bold whitespace-nowrap text-base block">Pengumuman</span>
                            </div>
                            <div class="w-1 h-6 bg-blue-500 mt-2"></div>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-white border-4 border-blue-600 shadow-md flex items-center justify-center relative z-20 group-hover:scale-125 transition-transform duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SECTION KONTAK -->
    <section class="mb-16 w-[calc(100%-2rem)] max-w-[1400px] mx-auto scroll-mt-28" id="kontak">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 pb-2 text-center">Hubungi Kami</h2>
        
        <!-- Desain Kontak Disesuaikan dengan Timeline -->
        <div class="flex flex-wrap justify-center gap-6">
            
            <div class="bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-2 transition-all duration-300 rounded-3xl shadow-xl border border-gray-100">
                <svg class="w-12 h-12 mb-4 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path></svg>
                <h3 class="text-xl font-bold mb-2">Alamat</h3>
                <p class="text-sm text-gray-600">Jl. Hasan Basri No. 1<br>Banjarbaru, Kalimantan Selatan</p>
            </div>
            
            <div class="bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-2 transition-all duration-300 rounded-3xl shadow-xl border border-gray-100">
                <svg class="w-12 h-12 mb-4 text-yellow-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path></svg>
                <h3 class="text-xl font-bold mb-2">Email</h3>
                <p class="text-sm text-gray-600">bantuan@instansi.go.id<br>info@instansi.go.id</p>
            </div>
            
            <div class="bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-2 transition-all duration-300 rounded-3xl shadow-xl border border-gray-100">
                <svg class="w-12 h-12 mb-4 text-blue-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.896-1.596-5.48-4.18-7.077-7.077l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path></svg>
                <h3 class="text-xl font-bold mb-2">Telepon</h3>
                <p class="text-sm text-gray-600">(0511) 1234-5678<br>0812-3456-7890</p>
            </div>
            
            <div class="bg-white flex-1 min-w-[200px] h-56 flex flex-col items-center justify-center text-center p-6 hover:-translate-y-2 transition-all duration-300 rounded-3xl shadow-xl border border-gray-100">
                <svg class="w-12 h-12 mb-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"></path></svg>
                <h3 class="text-xl font-bold mb-2">Konsultasi</h3>
                <p class="text-sm text-gray-600">Senin - Jumat<br>08:00 - 15:00 WITA</p>
            </div>
            
        </div>
    </section>

    <!-- SCRIPT CAROUSEL & SCROLL NAVBAR -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // TRANSISI NAVBAR TRANSPARAN KE SOLID
            const navbar = document.getElementById('main-navbar');
            const heroSection = document.getElementById('hero-section');

            if (navbar && heroSection) {
                window.addEventListener('scroll', () => {
                    const heroHeight = heroSection.offsetHeight - 80;

                    if (window.scrollY > heroHeight) {
                        navbar.classList.remove('bg-transparent', 'py-4');
                        navbar.classList.add('bg-[#fca855]/80', 'shadow-md', 'py-2');
                    } else {
                        navbar.classList.add('bg-transparent', 'py-4');
                        navbar.classList.remove('bg-[#fca855]/80', 'shadow-md', 'py-2');
                    }
                });
            }

            // CAROUSEL
            let currentSlide = 1;
            let isTransitioning = false;
            const totalRealSlides = 3;
            const slider = document.getElementById('carouselSlider');
            const dots = document.querySelectorAll('.dot');
            let autoPlayInterval;

            const disableTransitions = () => { slider.style.transitionDuration = '0ms'; };
            const enableTransitions = () => { slider.style.transitionDuration = ''; };

            const setTransform = (index) => {
                slider.style.transform = `translateX(-${index * 100}%)`;
            };

            const updateVisuals = (index) => {
                let dotIndex = index - 1;
                if (dotIndex < 0) dotIndex = totalRealSlides - 1;
                if (dotIndex >= totalRealSlides) dotIndex = 0;

                dots.forEach((dot, idx) => {
                    if (idx === dotIndex) { 
                        dot.classList.add('bg-white', 'scale-125'); 
                        dot.classList.remove('bg-white/50'); 
                    } else { 
                        dot.classList.remove('bg-white', 'scale-125'); 
                        dot.classList.add('bg-white/50'); 
                    }
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
                if (currentSlide === 0) { 
                    currentSlide = totalRealSlides; 
                    disableTransitions(); 
                    setTransform(currentSlide); 
                    updateVisuals(currentSlide); 
                    void slider.offsetWidth; 
                } else if (currentSlide === totalRealSlides + 1) { 
                    currentSlide = 1; 
                    disableTransitions(); 
                    setTransform(currentSlide); 
                    updateVisuals(currentSlide); 
                    void slider.offsetWidth; 
                }
            });

            window.goToSlide = (realIndex) => { if (!isTransitioning) { moveToIndex(realIndex); resetInterval(); } };
            document.getElementById('btnNext').addEventListener('click', () => { if (!isTransitioning) { moveToIndex(currentSlide + 1); resetInterval(); } });
            document.getElementById('btnPrev').addEventListener('click', () => { if (!isTransitioning) { moveToIndex(currentSlide - 1); resetInterval(); } });

            const startInterval = () => { autoPlayInterval = setInterval(() => moveToIndex(currentSlide + 1), 6000); };
            const resetInterval = () => { clearInterval(autoPlayInterval); startInterval(); };

            disableTransitions();
            setTransform(currentSlide);
            updateVisuals(currentSlide);
            void slider.offsetWidth; 
            startInterval();
        });
    </script>
</x-layouts.app>