<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Informasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F8F9FA] min-h-screen font-sans text-gray-900 flex flex-col pt-24">

    <!-- NAVBAR DENGAN WARNA #fca855/80 -->
    <nav id="main-navbar" class="w-full fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-8 py-2 bg-[#fca855]/80 backdrop-blur-md shadow-md transition-all duration-300">
        <div class="w-17 h-16 md:h-20 overflow-hidden flex-shrink-0 ml-0 md:ml-8">
            <a href="/"><img src="assets/images/logo-bkn.png" alt="Logo Instansi" class="h-full object-cover"></a>
        </div>

        <div class="flex items-center space-x-3">
        <a href="/" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 hover:text-white/80 after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-orange-500 after:transition-transform after:duration-300 after:origin-center hover:after:scale-x-100">
            Beranda
        </a>
        <a href="/#kalender" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 hover:text-white/80 after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-orange-500 after:transition-transform after:duration-300 after:origin-center hover:after:scale-x-100">
            Kalendar
        </a>
        <a href="/#publikasi" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 hover:text-white/80 after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-orange-500 after:transition-transform after:duration-300 after:origin-center hover:after:scale-x-100">
            Publikasi
        </a>
        <a href="/#kontak" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 hover:text-white/80 after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-orange-500 after:transition-transform after:duration-300 after:origin-center hover:after:scale-x-100">
            Kontak
        </a>

        <div class="relative group">
            <button class="px-4 py-2 relative flex items-center gap-2 text-lg font-medium text-white transition-colors duration-300 hover:text-white/80">
                Informasi
                <svg class="w-5 h-5 font-bold transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <div class="absolute left-0 top-full mt-1 w-full min-w-[220px] rounded-lg bg-white opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out z-50 overflow-hidden shadow-xl border border-gray-100">
                <a href="/#timeline" class="block px-4 py-2.5 text-lg font-medium text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Timeline</a>
                <a href="/#" class="block px-4 py-2.5 text-lg font-medium text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">CASN</a>
                <a href="/#" class="block px-4 py-2.5 text-lg font-medium text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Non-ASN</a>
                <a href="/#" class="block px-4 py-2.5 text-lg font-medium text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Pengembangan Karir</a>
                <a href="/#" class="block px-4 py-2.5 text-lg font-medium text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Sekolah Kedinasan</a>
            </div>
        </div>
    </div>

    <a class="px-7 py-2 border-2 border-white text-white text-lg font-medium rounded-lg transition-all duration-300 hover:text-[#fca855] hover:bg-white" href="/login">Login</a>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="flex-grow w-full max-w-7xl mx-auto px-4 py-8 md:py-12">
        
        <!-- Header & Pencarian Minimalis -->
        <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-6 border-b border-gray-200 pb-6">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 tracking-tight">Pusat Informasi Terkini</h1>
                <p class="text-gray-500 mt-2 text-sm md:text-base">Temukan pengumuman, berita, dan edaran terbaru dari instansi.</p>
            </div>
            
            <div class="flex gap-2 w-full md:w-auto">
                <input type="text" placeholder="Cari informasi..." class="px-4 py-2 w-full md:w-72 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#fca855] focus:border-[#fca855] transition-all text-sm">
                <button class="px-5 py-2 bg-[#0a3d91] text-white text-sm font-medium rounded-md hover:bg-blue-900 transition-colors shadow-sm">Cari</button>
            </div>
        </div>

        <!-- CONTAINER GRID -->
        <div id="infoGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Card di-render melalui JS -->
        </div>

        <!-- PAGINATION -->
        <div class="flex justify-center items-center gap-2" id="paginationControls">
            <!-- Kontrol Paginasi di-render melalui JS -->
        </div>
    </main>

    <x-footer />

    <script>
        // Data Dummy
        const allData = Array.from({ length: 11 }, (_, i) => ({
            id: i + 1,
            kategori: i % 3 === 0 ? 'Berita' : (i % 2 === 0 ? 'Edaran' : 'Pengumuman'),
            tanggal: `${14 - (i%5)}/09/2026`,
            judul: `Informasi Penting dan Terkini Bagian ke-${i + 1} Terkait Kebijakan ASN 2026`,
            deskripsi: 'Kupang – Humas BKN, Dalam arahannya memimpin Apel Kekuatan Gabungan Pemerintah Kota Kupang di Lapangan Upacara Kantor Wali...',
            gambar: 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' 
        }));

        const itemsPerPage = 9;
        let currentPage = 1;

        function renderGrid(page) {
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const paginatedData = allData.slice(startIndex, endIndex);

            const gridContainer = document.getElementById('infoGrid');
            gridContainer.innerHTML = paginatedData.map(item => `
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col">
                    <!-- Gambar Artikel -->
                    <img src="${item.gambar}" alt="Ilustrasi" class="w-full h-48 md:h-52 object-cover">
                    
                    <!-- Konten Artikel -->
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="font-semibold text-lg text-gray-900 leading-snug mb-3 line-clamp-2">${item.judul}</h3>
                        
                        <!-- Meta Data -->
                        <div class="flex items-center gap-4 text-xs font-medium text-gray-500 mb-4">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                ${item.tanggal}
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                                ${item.kategori}
                            </span>
                        </div>
                        
                        <p class="text-sm text-gray-600 mb-6 line-clamp-3">${item.deskripsi}</p>
                        
                        <!-- Tombol -->
                        <a href="/berita/detail" class="mt-auto inline-block bg-[#0a3d91] text-white text-sm font-medium px-5 py-2.5 rounded-md hover:bg-blue-900 transition-colors w-max">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            `).join('');
        }

        function renderPagination() {
            const totalPages = Math.ceil(allData.length / itemsPerPage);
            const paginationContainer = document.getElementById('paginationControls');
            let html = '';

            html += `<button onclick="changePage(${currentPage - 1})" class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm font-medium text-gray-700 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed hover:bg-gray-50 transition-colors" ${currentPage === 1 ? 'disabled' : ''}>Prev</button>`;

            for (let i = 1; i <= totalPages; i++) {
                const isActive = i === currentPage;
                html += `<button onclick="changePage(${i})" class="w-10 py-2 border ${isActive ? 'border-[#fca855] bg-[#fca855] text-white' : 'border-gray-300 bg-white text-gray-700 hover:bg-gray-50'} rounded-md text-sm font-medium shadow-sm transition-colors">${i}</button>`;
            }

            html += `<button onclick="changePage(${currentPage + 1})" class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm font-medium text-gray-700 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed hover:bg-gray-50 transition-colors" ${currentPage === totalPages ? 'disabled' : ''}>Next</button>`;

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

        renderGrid(currentPage);
        renderPagination();
    </script>
</body>
</html>