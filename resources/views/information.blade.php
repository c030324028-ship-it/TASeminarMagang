<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Informasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F8F9FA] min-h-screen font-sans text-gray-900 flex flex-col">

    <!-- NAVBAR ADAPTASI -->
    <nav id="main-navbar" class="w-full sticky top-0 left-0 right-0 z-50 flex justify-between items-center px-8 py-4 bg-white border-b-2 border-black transition-all duration-300">
        <div class="w-17 h-16 md:h-24 overflow-hidden flex-shrink-0 ml-0 md:ml-8">
            <a href="/"><img src="../assets/images/logo-bkn.png" alt="Logo Instansi" class="h-full object-cover"></a>
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

        <a class="px-7 py-2 bg-white border-2 border-black text-black text-lg font-bold rounded-lg hover:bg-gray-100 hover:translate-y-px transition-all duration-300" href="/login">Login</a>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="flex-grow w-full max-w-5xl mx-auto px-4 py-10 md:py-16">
        <!-- Tombol Kembali -->
        <div class="mb-6">
            <button onclick="history.back()" class="flex items-center gap-2 px-4 py-2 bg-white border-2 border-black rounded-lg font-bold hover:bg-gray-100 hover:translate-y-px transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali
            </button>
        </div>

        <div class="bg-white border-2 border-black overflow-hidden">
            <!-- Header Judul -->
            <div class="p-6 md:p-10 border-b-2 border-black text-center bg-gray-50">
                <div class="inline-block px-3 py-1 mb-4 text-xs font-bold bg-[#D0E2FF] text-[#0043CE] border border-black rounded-full shadow-sm">
                    PENGUMUMAN
                </div>
                <h1 class="text-2xl md:text-4xl font-black text-gray-900 leading-tight">
                    Pengumuman Hasil Seleksi Administrasi CPNS Tahun 2026
                </h1>
                <div class="mt-4 flex items-center justify-center gap-4 text-sm font-medium text-gray-500">
                    <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg> 14 September 2026</span>
                    <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> BKD Kalsel</span>
                </div>
            </div>

            <!-- Area Konten Utama -->
            <div class="p-6 md:p-10 text-gray-800 leading-relaxed">
                
                <!-- Gambar Utama Artikel -->
                <div class="mb-8 relative rounded-xl border-2 border-black overflow-hidden group">
                    <img src="" alt="Ilustrasi Pengumuman" class="w-full h-56 md:h-[400px] object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out">
                </div>

                <!-- Dinding Teks Terformat -->
                <div class="space-y-6">
                    <p class="font-semibold text-lg">Banjarbaru — Berdasarkan hasil verifikasi dokumen persyaratan pendaftaran Calon Pegawai Negeri Sipil (CPNS) di lingkungan Pemerintah Provinsi Kalimantan Selatan Tahun Anggaran 2026, berikut disampaikan beberapa hal penting:</p>
                    
                    <p>1. Pelamar yang nomor registrasi dan namanya tercantum dalam Lampiran I pengumuman ini dinyatakan <strong>LULUS</strong> Seleksi Administrasi.</p>
                    
                    <p>2. Pelamar yang nomor registrasi dan namanya <strong>tidak tercantum</strong> dalam Lampiran I dinyatakan <strong>TIDAK LULUS</strong> Seleksi Administrasi. Keterangan lebih lanjut mengenai alasan ketidaklulusan dapat dilihat melalui akun masing-masing pada portal SSCASN BKN.</p>
                    
                    <p>3. Peserta yang dinyatakan Tidak Lulus berhak melakukan sanggahan terhadap hasil Seleksi Administrasi selama 3 (tiga) hari mulai tanggal 15 s.d 17 September 2026. Sanggahan dilakukan secara online melalui portal resmi.</p>
                    
                    <!-- Kotak Perhatian -->
                    <div class="bg-yellow-50 border-2 border-black rounded-lg p-5 mt-6 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-2 h-full bg-yellow-400 border-r-2 border-black"></div>
                        <div class="pl-4">
                            <p class="font-black text-black flex items-center gap-2">
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                PERHATIAN:
                            </p>
                            <p class="text-sm text-gray-800 mt-2 font-medium">Panitia seleksi instansi dapat menerima atau menolak alasan sanggahan yang diajukan oleh pelamar. Apabila sanggahan diterima, panitia akan mengumumkan ulang hasil seleksi administrasi.</p>
                        </div>
                    </div>

                    <!-- Bagian Unduhan -->
                    <div class="mt-10 p-5 bg-gray-50 border-2 border-black rounded-xl border-dashed">
                        <p class="font-bold text-gray-900 mb-3">Dokumen Unduhan Terlampir:</p>
                        <a href="#" class="inline-flex items-center gap-3 px-4 py-3 bg-white border-2 border-black rounded-lg hover:bg-gray-100 shadow-[2px_2px_0_0_rgba(0,0,0,1)] transition-all group">
                            <svg class="w-6 h-6 text-red-600 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9h2v9h-2z"></path></svg>
                            <span class="text-sm font-bold">Lampiran_I_Hasil_Seleksi.pdf</span>
                            <span class="text-xs font-medium text-gray-500 border-l-2 border-gray-300 pl-3 ml-1">2.4 MB</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />
</body>
</html>