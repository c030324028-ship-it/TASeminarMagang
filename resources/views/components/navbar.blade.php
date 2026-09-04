<nav class="w-full bg-orange-400/60 backdrop-blur-md flex justify-between items-center px-8 py-4 sticky top-0 z-50 shadow-sm transition-all">
    <div class="w-17 h-24 overflow-hidden flex-shrink-0 ml-8">
        <a href="/"><img src="assets/images/logo-bkn.png" alt="Logo Instansi" class="w-full h-full object-cover"></a>
    </div>

    <div class="flex items-center space-x-3">
        <a href="/" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-orange-500 after:transition-transform after:duration-300 after:origin-center hover:text-gray-700 hover:after:scale-x-100">
            Beranda
        </a>
        <a href="#kalender" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-orange-500 after:transition-transform after:duration-300 after:origin-center hover:text-gray-700 hover:after:scale-x-100">
            Kalendar
        </a>
        <a href="#publikasi" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-orange-500 after:transition-transform after:duration-300 after:origin-center hover:text-gray-700 hover:after:scale-x-100">
            Publikasi
        </a>
        <a href="#kontak" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:scale-x-0 after:bg-orange-500 after:transition-transform after:duration-300 after:origin-center hover:text-gray-700 hover:after:scale-x-100">
            Kontak
        </a>

        <!-- Dropdown Grup (Transparan 70% & Fade In-Out Halus) -->
        <div class="relative group">
            <button class="px-4 py-2 relative flex items-center gap-2 text-lg font-medium text-white transition-colors duration-300 hover:text-gray-700">
                Informasi
                <svg class="w-5 h-5 font-bold transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <!-- Container Menu Dropdown -->
            <div class="absolute left-0 top-full mt-1 w-full min-w-[220px] rounded-lg bg-black/70 backdrop-blur-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out z-50 overflow-hidden shadow-xl border border-white/10">
                <a href="#timeline" class="block px-4 py-2.5 text-lg font-medium text-white transition-colors duration-300 hover:bg-white/10 hover:text-orange-500">Timeline</a>
                <a href="#" class="block px-4 py-2.5 text-lg font-medium text-white transition-colors duration-300 hover:bg-white/10 hover:text-orange-500">CASN</a>
                <a href="#" class="block px-4 py-2.5 text-lg font-medium text-white transition-colors duration-300 hover:bg-white/10 hover:text-orange-500">Non-ASN</a>
                <a href="#" class="block px-4 py-2.5 text-lg font-medium text-white transition-colors duration-300 hover:bg-white/10 hover:text-orange-500">Pengembangan Karir</a>
                <a href="#" class="block px-4 py-2.5 text-lg font-medium text-white transition-colors duration-300 hover:bg-white/10 hover:text-orange-500">Sekolah Kedinasan</a>
            </div>
        </div>
    </div>

    <a class="px-7 py-2 border-2 border-white text-white text-lg font-medium rounded-lg transition-all duration-300 hover:border-orange-500 hover:text-orange-500 hover:bg-white/80" href="/login">Login</a>
</nav>