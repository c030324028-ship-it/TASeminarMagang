<!-- KOTAK KALENDER UTAMA -->
<div class="border-2 border-black bg-white p-4 md:p-6 relative shadow-sm">
    
    <div class="flex flex-wrap items-center justify-between gap-4 pb-4 border-b-2 border-black relative">
        <div class="flex items-center space-x-2">
            <button type="button" onclick="navigateMonth(-1)" class="border-2 border-black p-1 hover:bg-gray-100 font-bold px-2.5 text-xs select-none cursor-pointer" title="Bulan Sebelumnya">&lt;</button>
            <div id="calMonthYearLabel" class="border-2 border-black px-4 py-1 font-semibold text-xs sm:text-sm min-w-[140px] text-center select-none">
                Memuat...
            </div>
            <button type="button" onclick="navigateMonth(1)" class="border-2 border-black p-1 hover:bg-gray-100 font-bold px-2.5 text-xs select-none cursor-pointer" title="Bulan Berikutnya">&gt;</button>
        </div>

        <div class="bg-gray-200 border-2 border-black px-6 py-1 font-bold text-xs sm:text-sm text-center grow max-w-sm hidden sm:block">
            Kalender Jadwal BKN
        </div>

        <!-- Tombol Filter -->
        <button id="filterCalendarBtn" class="border-2 border-black p-1.5 bg-gray-300 hover:bg-gray-400 text-gray-900 transition cursor-pointer" title="Filter Kalender">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
            </svg>
        </button>

        <!-- Popup Filter -->
        <div id="filterCalendarModal" class="hidden absolute right-0 top-full mt-2 w-80 bg-white border-2 border-black p-4 shadow-2xl z-30">
            <div class="flex items-center justify-between pb-3 border-b-2 border-black">
                <button type="button" onclick="resetCalendarFilter()" class="border-2 border-black bg-gray-300 hover:bg-gray-400 px-3 py-0.5 text-xs font-semibold text-gray-900 cursor-pointer">
                    Reset
                </button>
                <h4 class="font-bold text-sm text-gray-900">Filter Kategori</h4>
            </div>
            <div class="mt-4 border-2 border-black p-3 space-y-3 bg-white">
                <label class="flex items-center space-x-3 text-xs sm:text-sm font-semibold cursor-pointer">
                    <input type="checkbox" data-filter="pengembangan-karir" checked class="cal-filter-checkbox w-4 h-4 accent-black rounded border-2 border-black">
                    <span>Pengembangan Karir</span>
                </label>
                <label class="flex items-center space-x-3 text-xs sm:text-sm font-semibold cursor-pointer">
                    <input type="checkbox" data-filter="tes-cat" checked class="cal-filter-checkbox w-4 h-4 accent-black rounded border-2 border-black">
                    <span>Tes CAT</span>
                </label>
                <label class="flex items-center space-x-3 text-xs sm:text-sm font-semibold cursor-pointer">
                    <input type="checkbox" data-filter="tes-casn" checked class="cal-filter-checkbox w-4 h-4 accent-black rounded border-2 border-black">
                    <span>Tes CASN</span>
                </label>
                <label class="flex items-center space-x-3 text-xs sm:text-sm font-semibold cursor-pointer">
                    <input type="checkbox" data-filter="tes-non-asn" checked class="cal-filter-checkbox w-4 h-4 accent-black rounded border-2 border-black">
                    <span>Tes Non-ASN</span>
                </label>
            </div>
        </div>
    </div>

    <!-- TABEL GRID KALENDER DINAMIS -->
    <div class="mt-4 border-2 border-black overflow-x-auto">
        <table class="w-full border-collapse border-black min-w-[750px] table-fixed">
            <thead>
                <tr class="border-b-2 border-black bg-white text-center font-bold text-sm">
                    <th class="border-r-2 border-black py-2 w-[14.28%]">Minggu</th>
                    <th class="border-r-2 border-black py-2 w-[14.28%]">Senin</th>
                    <th class="border-r-2 border-black py-2 w-[14.28%]">Selasa</th>
                    <th class="border-r-2 border-black py-2 w-[14.28%]">Rabu</th>
                    <th class="border-r-2 border-black py-2 w-[14.28%]">Kamis</th>
                    <th class="border-r-2 border-black py-2 w-[14.28%]">Jumat</th>
                    <th class="py-2 w-[14.28%]">Sabtu</th>
                </tr>
            </thead>
            <tbody id="calGridBody" class="text-sm font-semibold">
                <!-- Dirender Dinamis -->
            </tbody>
        </table>
    </div>
</div>

<!-- MODAL 1: DAFTAR KEGIATAN HARI TERPILIH -->
<div id="dayEventsModal" class="hidden fixed inset-0 z-40 flex items-center justify-center p-4 bg-black/50 backdrop-blur-xs">
    <div class="relative w-full max-w-2xl bg-white border-2 border-black p-5 shadow-2xl">
        <button type="button" onclick="closeDayEventsModal()" class="absolute top-2 right-2 p-1 text-red-600 hover:text-red-800 transition cursor-pointer">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <h3 id="dayModalTitle" class="text-base sm:text-lg font-bold text-gray-900 pr-8 pb-3 border-b-2 border-black">
            Daftar Kegiatan
        </h3>
        <div id="dayModalListContainer" class="mt-4 border-2 border-black bg-[#d1d5db] p-4 max-h-[380px] overflow-y-auto space-y-3">
            <!-- Diisi dinamis -->
        </div>
    </div>
</div>

<!-- MODAL 2: RINCIAN DETAIL KEGIATAN LENGKAP -->
<div id="eventDetailModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-xs">
    <div class="relative w-full max-w-xl bg-white border-2 border-black p-5 shadow-2xl">
        <button type="button" onclick="closeEventDetailModal()" class="absolute top-2 right-2 p-1 text-red-600 hover:text-red-800 transition cursor-pointer">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <h3 id="dtJudulModal" class="text-base sm:text-lg font-bold text-gray-900 pr-8 pb-3 border-b-2 border-black">
            Detail Kegiatan
        </h3>
        <div class="mt-4 border-2 border-black bg-[#d1d5db] p-5 space-y-2.5 text-xs sm:text-sm text-gray-900">
            <p><span class="font-semibold">Nama Kegiatan :</span> <span id="dtNamaKeg">-</span></p>
            <p><span class="font-semibold">Koordinator :</span> <span id="dtKoordinator">-</span></p>
            <p><span class="font-semibold">Jenis Kegiatan :</span> <span id="dtJenis">-</span></p>
            <p><span class="font-semibold">Tanggal pelaksanaan :</span> <span id="dtTanggalPelaksanaan">-</span></p>
            <p><span class="font-semibold">Titik Lokasi :</span> <span id="dtTitikLokasi">-</span></p>
            <p><span class="font-semibold">Jumlah peserta :</span> <span id="dtJumlahPeserta">-</span> Orang</p>
            <p><span class="font-semibold">Status :</span> <span id="dtStatusKegiatan">-</span></p>
            <p>
                <span class="font-semibold">Lampiran :</span> 
                <a id="dtLampiranUrl" href="#" target="_blank" class="text-blue-700 underline font-medium break-all">-</a>
            </p>
        </div>
    </div>
</div>

<!-- SCRIPT LOGIKA KALENDER: BULAN DEFAULT BERJALAN & NON-OVERLAPPING LANE SLOTTING -->
<script>
    const dbEvents = [
        {
            id: 1,
            nama: "Hasil SKD CPNS Pemprov Kalsel",
            lokasi: "Gedung Idham Chalid",
            alamat: "Jl. Trikora, Banjarbaru, Kalimantan Selatan",
            koordinator: "Budi Santoso",
            jenis: "Seleksi CASN",
            peserta: "1.500",
            status: "Selesai",
            lampiran: "https://example.com/hasil-pengumuman-casn.pdf",
            kategori: "tes-casn",
            startDate: "2026-09-07",
            endDate: "2026-09-07",
            tanggalLengkap: "Senin, 07 September 2026"
        },
        {
            id: 2,
            nama: "Hasil Ujian Dinas Tingkat I & II",
            lokasi: "Kantor BKN Regional VIII",
            alamat: "Jl. Bhayangkara No.1, Banjarbaru",
            koordinator: "Siti Aminah",
            jenis: "Ujian Dinas Berbasis CAT",
            peserta: "120",
            status: "Selesai",
            lampiran: "https://example.com/hasil-pengumuman-cat.pdf",
            kategori: "tes-cat",
            startDate: "2026-09-09",
            endDate: "2026-09-09",
            tanggalLengkap: "Selasa, 08 September 2026"
        },
        {
            id: 3,
            nama: "Hasil Seleksi PPPK Tenaga Kesehatan",
            lokasi: "Poltekkes Kemenkes",
            alamat: "Jl. Mistar Cokrokusumo, Banjarbaru",
            koordinator: "Rina Mulyani",
            jenis: "Seleksi Non-ASN",
            peserta: "450",
            status: "Selesai",
            lampiran: "https://example.com/hasil-pengumuman-pppktk.pdf",
            kategori: "tes-non-asn",
            startDate: "2026-09-14",
            endDate: "2026-09-14",
            tanggalLengkap: "Senin, 14 September 2026"
        },
        {
            id: 3,
            nama: "Seminar Umum Kepegawaian",
            lokasi: "BPSDM Provinsi Kalsel",
            alamat: "Jl. Panglima Batur, Banjarbaru",
            koordinator: "Andi Wijaya",
            jenis: "Pengembangan Karir",
            peserta: "100",
            status: "Belum Mulai",
            lampiran: "https://example.com/jadwal-seminar-umum-kepegawaian.pdf",
            kategori: "pengembangan-karir",
            startDate: "2026-09-14",
            endDate: "2026-09-16",
            tanggalLengkap: "Senin, 14 September 2026 ~ Rabu, 16 September 2026"
        }
    ];

    const monthNames = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];

    // INSIALISASI: DEFAULT KE BULAN DAN TAHUN YANG SEDANG BERJALAN SAAT INI
    const todayReal = new Date();
    let calYear = todayReal.getFullYear();
    let calMonth = todayReal.getMonth(); // 0-indexed (Jan = 0, Sep = 8, dst.)

    const monthYearLabel = document.getElementById('calMonthYearLabel');
    const calGridBody = document.getElementById('calGridBody');

    function renderCalendar() {
        monthYearLabel.innerText = `${monthNames[calMonth]} ${calYear}`;
        calGridBody.innerHTML = '';

        const firstDayOfWeek = new Date(calYear, calMonth, 1).getDay();
        const daysInMonth = new Date(calYear, calMonth + 1, 0).getDate();
        const daysInPrevMonth = new Date(calYear, calMonth, 0).getDate();

        let dayCounter = 1;
        let nextCounter = 1;

        for (let row = 0; row < 6; row++) {
            const tr = document.createElement('tr');
            tr.className = 'border-b-2 border-black min-h-[112px] h-28 relative';
            if (row === 5) tr.classList.remove('border-b-2');

            const weekDaysInfo = [];
            for (let col = 0; col < 7; col++) {
                if (row === 0 && col < firstDayOfWeek) {
                    weekDaysInfo.push({ isCurrentMonth: false, day: daysInPrevMonth - (firstDayOfWeek - col - 1), dateStr: null });
                } else if (dayCounter <= daysInMonth) {
                    const dateStr = `${calYear}-${String(calMonth + 1).padStart(2, '0')}-${String(dayCounter).padStart(2, '0')}`;
                    weekDaysInfo.push({ isCurrentMonth: true, day: dayCounter, dateStr: dateStr });
                    dayCounter++;
                } else {
                    weekDaysInfo.push({ isCurrentMonth: false, day: nextCounter, dateStr: null });
                    nextCounter++;
                }
            }

            const weekTracks = [];
            const eventsToRenderThisWeek = [];

            dbEvents.forEach(ev => {
                let startCol = -1;
                let endCol = -1;

                for (let c = 0; c < 7; c++) {
                    const info = weekDaysInfo[c];
                    if (info.isCurrentMonth && info.dateStr) {
                        if (info.dateStr >= ev.startDate && info.dateStr <= ev.endDate) {
                            if (startCol === -1) startCol = c;
                            endCol = c;
                        }
                    }
                }

                if (startCol !== -1) {
                    let assignedLane = 0;
                    while (true) {
                        if (!weekTracks[assignedLane]) {
                            weekTracks[assignedLane] = [false, false, false, false, false, false, false];
                        }
                        let isCollision = false;
                        for (let c = startCol; c <= endCol; c++) {
                            if (weekTracks[assignedLane][c]) {
                                isCollision = true;
                                break;
                            }
                        }
                        if (!isCollision) break;
                        assignedLane++;
                    }

                    for (let c = startCol; c <= endCol; c++) {
                        weekTracks[assignedLane][c] = true;
                    }

                    eventsToRenderThisWeek.push({
                        event: ev,
                        startCol: startCol,
                        endCol: endCol,
                        lane: assignedLane
                    });
                }
            });

            const tdElements = [];
            for (let col = 0; col < 7; col++) {
                const info = weekDaysInfo[col];
                const td = document.createElement('td');
                td.className = 'p-2 align-top transition select-none ' + (col < 6 ? 'border-r-2 border-black ' : '');

                if (!info.isCurrentMonth) {
                    td.classList.add('text-gray-400', 'bg-gray-50/50');
                    td.innerHTML = `<span>${info.day}</span>`;
                } else {
                    td.classList.add('bg-white', 'relative', 'hover:bg-gray-50', 'cursor-pointer');
                    td.setAttribute('data-day', info.day);
                    td.setAttribute('data-date', info.dateStr);

                    // Highlight penanda jika tanggal ini adalah hari ini (today)
                    const isRealToday = (
                        info.day === todayReal.getDate() && 
                        calMonth === todayReal.getMonth() && 
                        calYear === todayReal.getFullYear()
                    );

                    if (isRealToday) {
                        td.innerHTML = `<span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-black text-white font-bold text-xs">${info.day}</span>`;
                    } else {
                        td.innerHTML = `<span class="font-bold text-gray-900">${info.day}</span>`;
                    }

                    const matchingEventsToday = dbEvents.filter(ev => info.dateStr >= ev.startDate && info.dateStr <= ev.endDate);
                    td.addEventListener('click', function(e) {
                        if (e.target.closest('.cal-event')) return;
                        if (matchingEventsToday.length > 0) {
                            openDayEventsModal(info.day, matchingEventsToday);
                        }
                    });
                }

                tr.appendChild(td);
                tdElements.push(td);
            }

            eventsToRenderThisWeek.forEach(item => {
                const ev = item.event;
                const startCol = item.startCol;
                const spanCols = item.endCol - item.startCol + 1;
                const targetTd = tdElements[startCol];

                let bgStyle = 'bg-gray-300 text-gray-900';
                if (ev.kategori === 'pengembangan-karir') bgStyle = 'bg-sky-600 text-white';
                else if (ev.kategori === 'tes-cat') bgStyle = 'bg-emerald-600 text-white';
                else if (ev.kategori === 'tes-casn') bgStyle = 'bg-gray-300 text-gray-900';
                else if (ev.kategori === 'tes-non-asn') bgStyle = 'bg-gray-800 text-white';

                const topOffset = 32 + (item.lane * 30);
                const zIndex = 25 - item.lane;
                const widthPercent = (spanCols * 100) - 10;

                const badge = document.createElement('div');
                badge.className = `cal-event absolute left-2 h-6 ${bgStyle} border-2 border-black rounded-full flex items-center justify-center shadow-xs cursor-pointer hover:opacity-90 transition`;
                badge.style.top = `${topOffset}px`;
                badge.style.width = `${widthPercent}%`;
                badge.style.zIndex = zIndex;
                badge.setAttribute('data-category', ev.kategori);
                badge.setAttribute('title', `${ev.nama} (${ev.startDate} s/d ${ev.endDate})`);
                badge.innerHTML = `<span class="text-xs font-bold tracking-wide truncate px-3">${ev.nama}</span>`;

                badge.addEventListener('click', (e) => handleDirectEventClick(e, ev.id));
                targetTd.appendChild(badge);
            });

            calGridBody.appendChild(tr);
            if (dayCounter > daysInMonth && row >= 4) break;
        }

        applyCalendarFilter();
    }

    function navigateMonth(direction) {
        calMonth += direction;
        if (calMonth < 0) {
            calMonth = 11;
            calYear--;
        } else if (calMonth > 11) {
            calMonth = 0;
            calYear++;
        }
        renderCalendar();
    }

    const dayModal = document.getElementById('dayEventsModal');
    const detailModal = document.getElementById('eventDetailModal');

    function openDayEventsModal(dayNum, events) {
        document.getElementById('dayModalTitle').innerText = `Daftar Kegiatan (${dayNum} ${monthNames[calMonth]} ${calYear})`;
        const container = document.getElementById('dayModalListContainer');
        container.innerHTML = '';

        events.forEach(item => {
            const card = document.createElement('div');
            card.className = 'border-2 border-black bg-white p-3 flex flex-col sm:flex-row sm:items-center justify-between gap-3';
            card.innerHTML = `
                <div>
                    <h4 class="font-bold text-gray-900 text-base">${item.nama}</h4>
                    <div class="flex flex-wrap items-center gap-x-6 gap-y-1 text-xs sm:text-sm text-gray-700 mt-1">
                        <span>${item.lokasi}</span>
                        <span>${item.tanggalLengkap}</span>
                    </div>
                </div>
                <button type="button" 
                        onclick="handleDirectEventClick(null, ${item.id})" 
                        class="self-end sm:self-center border-2 border-black bg-gray-500 hover:bg-gray-600 text-white font-semibold px-4 py-1 text-sm transition cursor-pointer">
                    Detail
                </button>
            `;
            container.appendChild(card);
        });

        dayModal.classList.remove('hidden');
    }

    function closeDayEventsModal() {
        dayModal.classList.add('hidden');
    }

    function handleDirectEventClick(e, eventId) {
        if (e) e.stopPropagation();
        const item = dbEvents.find(x => x.id === eventId);
        if (!item) return;

        document.getElementById('dtJudulModal').innerText = `Detail ${item.nama}`;
        document.getElementById('dtNamaKeg').innerText = item.nama;
        document.getElementById('dtKoordinator').innerText = item.koordinator;
        document.getElementById('dtJenis').innerText = item.jenis;
        document.getElementById('dtTanggalPelaksanaan').innerText = item.tanggalLengkap;
        document.getElementById('dtTitikLokasi').innerText = `${item.lokasi} (${item.alamat})`;
        document.getElementById('dtJumlahPeserta').innerText = item.peserta;
        document.getElementById('dtStatusKegiatan').innerText = item.status;
        
        const lampiranElem = document.getElementById('dtLampiranUrl');
        lampiranElem.innerText = item.lampiran;
        lampiranElem.href = (item.lampiran && item.lampiran !== '-') ? item.lampiran : '#';

        detailModal.classList.remove('hidden');
    }

    function closeEventDetailModal() {
        detailModal.classList.add('hidden');
    }

    const calBtn = document.getElementById('filterCalendarBtn');
    const calModal = document.getElementById('filterCalendarModal');
    const calCheckboxes = document.querySelectorAll('.cal-filter-checkbox');

    calBtn.addEventListener('click', (e) => { 
        e.stopPropagation(); 
        calModal.classList.toggle('hidden'); 
    });

    document.addEventListener('click', (e) => {
        if (!calModal.contains(e.target) && e.target !== calBtn) calModal.classList.add('hidden');
        if (e.target === dayModal) closeDayEventsModal();
        if (e.target === detailModal) closeEventDetailModal();
    });

    function applyCalendarFilter() {
        const activeCats = Array.from(calCheckboxes).filter(cb => cb.checked).map(cb => cb.getAttribute('data-filter'));
        const events = document.querySelectorAll('.cal-event');
        events.forEach(ev => {
            const cat = ev.getAttribute('data-category');
            ev.style.display = activeCats.includes(cat) ? 'flex' : 'none';
        });
    }

    calCheckboxes.forEach(cb => cb.addEventListener('change', applyCalendarFilter));

    function resetCalendarFilter() {
        calCheckboxes.forEach(cb => cb.checked = true);
        applyCalendarFilter();
    }

    document.addEventListener('DOMContentLoaded', () => {
        renderCalendar();
    });
</script>