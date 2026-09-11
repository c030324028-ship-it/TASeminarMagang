<nav id="main-navbar" class="w-full fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-8 py-4 transition-all duration-300 bg-transparent">
    <div class="w-17 h-24 overflow-hidden flex-shrink-0 ml-8">
        <a href="/"><img src="assets/images/logo-bkn.png" alt="Logo Instansi" class="w-full h-full object-cover"></a>
    </div>

    <div class="flex items-center space-x-3">
        <a href="/" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 hover:text-white/80">
            Beranda
        </a>
        <a href="#kalender" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 hover:text-white/80">
            Kalendar
        </a>
        <a href="#publikasi" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 hover:text-white/80">
            Publikasi
        </a>
        <a href="#kontak" class="px-4 py-2 relative text-lg font-medium text-white transition-colors duration-300 hover:text-white/80">
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
                <a href="#timeline" class="block px-4 py-2.5 text-lg font-medium text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Timeline</a>
                <a href="#" class="block px-4 py-2.5 text-lg font-medium text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">CASN</a>
                <a href="#" class="block px-4 py-2.5 text-lg font-medium text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Non-ASN</a>
                <a href="#" class="block px-4 py-2.5 text-lg font-medium text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Pengembangan Karir</a>
                <a href="#" class="block px-4 py-2.5 text-lg font-medium text-gray-700 transition-colors duration-300 hover:bg-orange-50 hover:text-[#fca855]">Sekolah Kedinasan</a>
            </div>
        </div>
    </div>

    <a class="px-7 py-2 border-2 border-white text-white text-lg font-medium rounded-lg transition-all duration-300 hover:text-[#fca855] hover:bg-white" href="/login">Login</a>
</nav>