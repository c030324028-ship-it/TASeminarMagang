<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Informasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F8F9FA] min-h-screen font-sans text-gray-900 flex flex-col">

    <!-- NAVBAR ADAPTASI -->
    <nav id="main-navbar" class="w-full sticky top-0 left-0 right-0 z-50 flex justify-between items-center px-8 py-4 bg-white border-b-2 border-black transition-all duration-300">
        <div class="w-17 h-16 md:h-24 overflow-hidden flex-shrink-0 ml-0 md:ml-8">
            <a href="/"><img src="assets/images/logo-bkn.png" alt="Logo Instansi" class="h-full object-cover"></a>
        </div>

        <div class="hidden md:flex items-center space-x-3">
            <a href="/" class="px-4 py-2 relative text-lg font-bold text-gray-900 transition-colors duration-300 hover:text-[#fca855]">
                Beranda
            </a>
            <a href="/#kalender" class="px-4 py-2 relative text-lg font-bold text-gray-900 transition-colors duration-300 hover:text-[#fca855]">
                Kalendar
            </a>
            <a href="/#publikasi" class="px-4 py-2 relative text-lg font-bold text-gray-900 transition-colors duration-300 hover:text-[#fca855]">
                Publikasi
            </a>
            <a href="/#kontak" class="px-4 py-2 relative text-lg font-bold text-gray-900 transition-colors duration-300 hover:text-[#fca855]">
                Kontak
            </a>

            <div class="relative group">
                <button class="px-4 py-2 relative flex items-center gap-2 text-lg font-bold text-gray-900 transition-colors duration-300 hover:text-[#fca855]">
                    Informasi
                    <svg class="w-5 h-5 font-bold transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Dropdown -->
                <div class="absolute left-0 top-full mt-2 w-full min-w-[220px] rounded-lg bg-white opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out z-50 overflow-hidden border-2 border-black">
                    <a href="/#timeline" class="block px-4 py-2.5 text-lg font-bold text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Timeline</a>
                    <a href="#" class="block px-4 py-2.5 text-lg font-bold text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">CASN</a>
                    <a href="#" class="block px-4 py-2.5 text-lg font-bold text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Non-ASN</a>
                    <a href="#" class="block px-4 py-2.5 text-lg font-bold text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Pengembangan Karir</a>
                    <a href="#" class="block px-4 py-2.5 text-lg font-bold text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Sekolah Kedinasan</a>
                </div>
            </div>
        </div>

        <a class="px-7 py-2 bg-white border-2 border-black text-black text-lg font-bold rounded-lg hover:bg-gray-100 transition-all duration-300" href="/login">Login</a>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="flex-grow w-full max-w-7xl mx-auto px-4 py-10 md:py-16">
        <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4 border-b-2 border-black pb-4">
            <div>
                <h1 class="text-3xl md:text-4xl font-black text-gray-900">Pusat Informasi Terkini</h1>
                <p class="text-gray-500 mt-2 font-medium">Temukan pengumuman, berita, dan edaran terbaru dari instansi.</p>
            </div>
            <!-- Search / Filter Sederhana -->
            <div class="flex gap-2 w-full md:w-auto">
                <input type="text" placeholder="Cari informasi..." class="px-4 py-2 w-full md:w-64 bg-white border-2 border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-black">
                <button class="px-4 py-2 bg-black text-white font-bold rounded-lg border-2 border-black hover:bg-gray-800 transition-colors">Cari</button>
            </div>
        </div>

        <!-- CONTAINER GRID -->
        <div id="infoGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
            <!-- Card di-render melalui JS -->
        </div>

        <!-- PAGINATION -->
        <div class="flex justify-center items-center gap-2" id="paginationControls">
            <!-- Kontrol Paginasi di-render melalui JS -->
        </div>
    </main>

    <x-footer />

    <script>
        // 11 Data Dummy
        const allData = Array.from({ length: 11 }, (_, i) => ({
            id: i + 1,
            kategori: i % 3 === 0 ? 'BERITA' : (i % 2 === 0 ? 'EDARAN' : 'PENGUMUMAN'),
            kategoriColor: i % 3 === 0 ? 'bg-[#C1F1D2] text-[#00512C]' : (i % 2 === 0 ? 'bg-[#FFD8B2] text-[#8A3B00]' : 'bg-[#D0E2FF] text-[#0043CE]'),
            tanggal: `${14 - (i%5)} September 2026`,
            judul: `Informasi Penting dan Terkini Bagian ke-${i + 1} Terkait Kebijakan ASN 2026`,
            deskripsi: 'Ini adalah rangkuman singkat dari pengumuman atau berita yang disampaikan untuk memberikan gambaran informasi kepada pembaca sebelum mengklik detail.',
        }));

        const itemsPerPage = 9;
        let currentPage = 1;

        function renderGrid(page) {
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const paginatedData = allData.slice(startIndex, endIndex);

            const gridContainer = document.getElementById('infoGrid');
            gridContainer.innerHTML = paginatedData.map(item => `
                <div class="bg-white border-2 border-black rounded-xl p-5 flex flex-col hover:-translate-y-1 transition-all duration-200">
                    <div class="flex justify-between items-center mb-3">
                        <span class="px-2 py-1 text-[10px] font-bold border border-black rounded ${item.kategoriColor}">
                            ${item.kategori}
                        </span>
                        <span class="text-xs font-bold text-gray-500 flex items-center gap-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            ${item.tanggal}
                        </span>
                    </div>
                    <h3 class="font-black text-lg text-gray-900 leading-snug mb-2 line-clamp-2">${item.judul}</h3>
                    <p class="text-sm text-gray-600 mb-4 line-clamp-3 flex-grow">${item.deskripsi}</p>
                    <a href="/berita/detail" class="inline-flex items-center text-sm font-bold border-2 border-black rounded-lg px-4 py-2 mt-auto w-max hover:bg-gray-100 transition-colors group">
                        Baca selengkapnya 
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            `).join('');
        }

        function renderPagination() {
            const totalPages = Math.ceil(allData.length / itemsPerPage);
            const paginationContainer = document.getElementById('paginationControls');
            let html = '';

            // Tombol Prev
            html += `<button onclick="changePage(${currentPage - 1})" class="px-3 py-2 bg-white border-2 border-black rounded-lg font-bold shadow-sm disabled:opacity-50 disabled:cursor-not-allowed hover:bg-gray-100 transition-colors" ${currentPage === 1 ? 'disabled' : ''}>&laquo; Prev</button>`;

            // Angka Halaman
            for (let i = 1; i <= totalPages; i++) {
                const isActive = i === currentPage;
                html += `<button onclick="changePage(${i})" class="w-10 py-2 border-2 border-black rounded-lg font-bold shadow-sm transition-colors ${isActive ? 'bg-black text-white' : 'bg-white text-black hover:bg-gray-100'}">${i}</button>`;
            }

            // Tombol Next
            html += `<button onclick="changePage(${currentPage + 1})" class="px-3 py-2 bg-white border-2 border-black rounded-lg font-bold shadow-sm disabled:opacity-50 disabled:cursor-not-allowed hover:bg-gray-100 transition-colors" ${currentPage === totalPages ? 'disabled' : ''}>Next &raquo;</button>`;

            paginationContainer.innerHTML = html;
        }

        window.changePage = function(newPage) {
            const totalPages = Math.ceil(allData.length / itemsPerPage);
            if (newPage < 1 || newPage > totalPages) return;
            currentPage = newPage;
            renderGrid(currentPage);
            renderPagination();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };

        // Inisialisasi awal
        renderGrid(currentPage);
        renderPagination();
    </script>
</body>
</html>