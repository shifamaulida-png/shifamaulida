document.addEventListener("DOMContentLoaded", function () {
    // Language switch: translations are applied to visible text nodes, including project details.
    const languageButtons = document.querySelectorAll("[data-lang]");
    const translations = {
      // Complete portfolio copy translations for English mode
      "Rapi dalam detail, terbuka untuk belajar hal baru.": "Detail-oriented and open to learning new things.",
      "Jadwal kuliah dapat disesuaikan ke pembelajaran online selama magang.": "My university schedule can be adjusted to online learning during the internship.",
      "Pengalaman magang dan kerja, dari yang terbaru.": "Internship and work experience, from most recent to earliest.",
      "Proyek pilihan dari perkuliahan, kegiatan, dan pengalaman pribadi.": "Selected projects from university, event support, and personal initiatives.",
      "Kemampuan dan tools yang saya gunakan, lengkap dengan contoh hasil kerjanya.": "Skills and tools I use, with examples of my work.",
      "Pelatihan dan sertifikasi yang mendukung pengembangan kemampuan saya.": "Training and certifications that support my professional development.",
      "Aplikasi web toko buku yang saya kerjakan sendiri, dengan dua sudut pandang pengguna: Customer dan Administrator.": "A bookstore web application I built independently, with two user perspectives: Customer and Administrator.",
      "Tujuan: membangun aplikasi web toko buku yang berjalan dari login hingga pembayaran.": "Goal: build a bookstore web application with a complete flow from login to payment.",
      "Target pengguna: Customer (pembeli) dan Administrator (pengelola toko).": "Target users: Customers (shoppers) and Administrators (store managers).",
      "Indikator keberhasilan: fitur utama dapat dijalankan dan lolos pengujian.": "Success criteria: core features work as intended and pass testing.",
      "Merancang database: tabel users, books, carts, transactions, dan transaction details.": "Designed the database with users, books, carts, transactions, and transaction details tables.",
      "Mengembangkan aplikasi dengan CodeIgniter 4, PHP, dan MySQL (XAMPP, phpMyAdmin).": "Developed the application with CodeIgniter 4, PHP, and MySQL (XAMPP, phpMyAdmin).",
      "Mengimplementasikan fitur login, katalog, keranjang, checkout, dan pembayaran.": "Implemented login, catalog, cart, checkout, and payment features.",
      "Menguji fitur-fitur yang telah dibuat.": "Tested the implemented features.",
      "Aplikasi web toko buku yang berfungsi untuk dua peran: Customer dan Administrator.": "A functional bookstore web app for two roles: Customer and Administrator.",
      "Fitur utama: login, katalog buku, keranjang, checkout, dan pembayaran.": "Core features: login, book catalog, cart, checkout, and payment.",
      "Melihat katalog buku dan menggunakan fitur belanja: keranjang, checkout, dan pembayaran.": "Browse the book catalog and use shopping features: cart, checkout, and payment.",
      "Mengelola data dan aktivitas toko sesuai fitur yang tersedia pada aplikasi.": "Manage store data and activities using the application's available features.",
      "Tujuan: mendukung penyelenggaraan Citiasia Webinar Series, dari dokumen acara hingga materi promosi.": "Goal: support the Citiasia Webinar Series, from event documentation to promotional materials.",
      "Mengoordinasikan update tugas dengan anggota tim selama persiapan.": "Coordinated task updates with team members during preparation.",
      "Membantu persiapan dan koordinasi acara sesuai jadwal yang direncanakan.": "Helped prepare and coordinate event activities according to the planned schedule.",
      "Binder K-Pop menjadi salah satu produk dengan penjualan tertinggi.": "K-pop binders became one of the best-selling products.",
      "Mendukung aktivitas social media dan activation untuk proyek perusahaan.": "Supported social media and activation activities for company projects.",
      "Membuat konten Niskala Kota: sekitar 11 video dan 10 campaign Instagram Story.": "Created Niskala Kota content, including approximately 11 videos and 10 Instagram Story campaigns.",
      "Menyusun dan memperbarui content schedule, master sheet, serta dokumen proyek.": "Prepared and updated content schedules, master sheets, and project documentation.",
      "Mendukung persiapan webinar dan event yang dihadiri 300 peserta, termasuk perwakilan Komdigi, APJATEL, dan pemerintah daerah, serta mengoordinasikan update tugas dengan tim.": "Supported a webinar and event attended by 300 participants, including representatives from Komdigi, APJATEL, and local governments, and coordinated task updates with the team.",
      "Menyelesaikan program magang pada Oktober 2026.": "Completed the internship program in October 2026.",
      "Memantau dan memperbarui data occupancy untuk laporan operasional.": "Monitored and updated occupancy data for operational reports.",
      "Berkoordinasi dengan tim housekeeping, maintenance, repair, dan vendor terkait permintaan operasional.": "Coordinated with housekeeping, maintenance, repair teams, and vendors on operational requests.",
      "Memproses permintaan approval operasional dan menindaklanjuti ke pihak terkait.": "Processed operational approval requests and followed up with the relevant stakeholders.",
      "Menangani procurement perlengkapan operasional bersama 3+ vendor: komunikasi, koordinasi harga, dan follow-up pembelian.": "Managed procurement of operational supplies with 3+ vendors, including communication, price coordination, and purchase follow-ups.",
      "Memproses tagihan operasional dan pembayaran vendor serta menjaga dokumen pendukung.": "Processed operational invoices and vendor payments while maintaining supporting documents.",
      "Menjaga catatan operasional, dokumen transaksi, dan laporan administrasi.": "Maintained operational records, transaction documents, and administrative reports.",
      "Menyusun laporan keuangan harian, mingguan, dan bulanan.": "Prepared daily, weekly, and monthly financial reports.",
      "Mencatat dan memantau transaksi harian serta kas kecil.": "Recorded and monitored daily transactions and petty cash.",
      "Menangani pertanyaan pelanggan, pemrosesan order, dan konfirmasi pembayaran.": "Handled customer inquiries, order processing, and payment confirmations.",
      "Menjaga catatan transaksi dan data pelanggan sebagai acuan operasional.": "Maintained transaction records and customer data for operational reference.",
      "Menangani pertanyaan pelanggan melalui pesan dan telepon.": "Handled customer inquiries through messages and phone calls.",
      "Menjadwalkan janji temu dan menjaga catatan appointment.": "Scheduled appointments and maintained appointment records.",
      "Menyiapkan data pelanggan serta mendukung tindak lanjut treatment dan pengingat appointment.": "Prepared customer data and supported treatment follow-ups and appointment reminders.",
      "Membantu menyusun dan merapikan laporan keuangan.": "Helped prepare and organize financial reports.",
      "Menginput dan menjaga data keuangan serta merapikan dokumen nasabah.": "Entered and maintained financial data and organized customer documents.",
      "Memilah, memindai, dan mengarsipkan dokumen serta mendukung aktivitas administrasi harian.": "Sorted, scanned, and archived documents and supported daily administrative activities.",
      "Mahasiswa Bisnis Digital": "Digital Business Student",
      "Tempat saya belajar": "Where I study",
      "Sedikit cerita": "A little bit",
      "tentang saya.": "about me.",
      "PENDIDIKAN": "EDUCATION",
      "PENGALAMAN": "EXPERIENCE",
      "KETERAMPILAN UTAMA": "CORE SKILLS",
      "INFORMASI PRIBADI": "PERSONAL INFORMATION",
      "Sertifikat dan pelatihan": "Certificates and training",
      "Pendidikan": "Education",
      "Pengalaman": "Experience",
      "Keterampilan": "Skills",
      "Proyek": "Projects",
      "Lihat proyek": "View projects",
      "Buka navigasi": "Open navigation",
      "Tutup navigasi": "Close navigation",
      "Kembali ke atas": "Back to top",
      "Beri wortel untuk Mochi": "Give Mochi a carrot",
      "Mochi si kelinci. Klik untuk menyapa": "Mochi the bunny. Click to say hello",
      "Gambar sertifikat belum ditambahkan ke assets/images ♡": "Certificate images have not been added to assets/images yet ♡",
      "Kebutuhan:": "Need:", "Tujuan:": "Goal:", "Target pengguna:": "Target users:",
      "Indikator keberhasilan:": "Success criteria:", "Audiens:": "Audience:", "Target pelanggan:": "Target audience:",
      "Produksi:": "Production:", "Penjualan:": "Sales:", "Operasional:": "Operations:", "Pemasaran:": "Marketing:",
      "Webinar dihadiri 300 peserta.": "The webinar was attended by 300 participants.",
      "Dihadiri perwakilan Komdigi, APJATEL, dan pemerintah daerah.": "Attended by representatives from Komdigi, APJATEL, and local governments.",
      "Terima kasih sudah mampir ♡": "Thanks for stopping by ♡",
      "Saya sedang mencari kesempatan magang di bidang Administrasi, Operasional, atau Purchasing. Senang berdiskusi dan berkolaborasi.": "I am seeking internship opportunities in Administration, Operations, or Purchasing. I welcome conversations and collaboration.",
      "Ganti ke mode malam": "Switch to dark mode", "Ganti ke mode siang": "Switch to light mode",
      "Mode malam": "Dark mode", "Mode siang": "Light mode",
      "Mahasiswa Bisnis Digital dengan pengalaman di administrasi, dukungan operasional, pengolahan data, penyusunan laporan, procurement, dan customer service. Terbiasa mengelola dokumen, data transaksi, serta berkoordinasi dengan tim internal dan vendor.": "Digital Business student with experience in administration, operational support, data processing, reporting, procurement, and customer service. Skilled in managing documents and transaction records and coordinating with internal teams and vendors.",
      "S1 Bisnis Digital, Cakrawala University": "B.B.A. in Digital Business, Cakrawala University",
      "Saya mahasiswa S1 Bisnis Digital di Cakrawala University. Pengalaman saya mencakup administrasi, dukungan operasional, pengolahan data, penyusunan laporan, procurement, dan customer service.": "I am a Digital Business undergraduate at Cakrawala University. My experience includes administration, operational support, data processing, reporting, procurement, and customer service.",
      "Saya terbiasa mengelola catatan, data transaksi, dan dokumen, serta berkoordinasi dengan tim internal maupun vendor. Saat ini saya mencari magang di bidang Administrasi, Operasional, atau Purchasing, dan jadwal kuliah saya dapat disesuaikan ke pembelajaran online selama periode magang.": "I am comfortable managing records, transaction data, and documents, as well as coordinating with internal teams and vendors. I am currently seeking an internship in Administration, Operations, or Purchasing, and my university schedule can be adjusted to online learning during the internship.",
      "Pelatihan dan sertifikasi yang mendukung pengembangan kemampuan saya.": "Training and certifications that support my professional development.",
      
      "Aplikasi web toko buku yang saya kerjakan sendiri, dengan dua sudut pandang pengguna: Customer dan Administrator.": "A bookstore web application I built independently, with two user perspectives: Customer and Administrator.",
      "Kebutuhan: toko buku online tempat pelanggan melihat katalog dan berbelanja, sementara administrator mengelola data dan aktivitas toko.": "Need: an online bookstore where customers can browse and shop while administrators manage store data and activities.",
      "Tujuan: membangun aplikasi web toko buku yang berjalan dari login hingga pembayaran.": "Goal: build a bookstore web application with a complete flow from login to payment.",
      "Target pengguna: Customer (pembeli) dan Administrator (pengelola toko).": "Target users: Customers (shoppers) and Administrators (store managers).",
      "Indikator keberhasilan: fitur utama dapat dijalankan dan lolos pengujian.": "Success criteria: core features work as intended and pass testing.",
      "Merancang database: tabel users, books, carts, transactions, dan transaction details.": "Designed the database with users, books, carts, transactions, and transaction details tables.",
      "Mengembangkan aplikasi dengan CodeIgniter 4, PHP, dan MySQL (XAMPP, phpMyAdmin).": "Developed the application with CodeIgniter 4, PHP, and MySQL (XAMPP, phpMyAdmin).",
      "Mengimplementasikan fitur login, katalog, keranjang, checkout, dan pembayaran.": "Implemented login, catalog, cart, checkout, and payment features.",
      "Menguji fitur-fitur yang telah dibuat.": "Tested the implemented features.",
      "Aplikasi web toko buku yang berfungsi untuk dua peran: Customer dan Administrator.": "A functional bookstore web app for two roles: Customer and Administrator.",
      "Fitur utama: login, katalog buku, keranjang, checkout, dan pembayaran.": "Core features: login, book catalog, cart, checkout, and payment.",
      "Dikerjakan sendiri, dari perancangan database hingga pengujian.": "Built independently, from database design through testing.",
      "Melihat katalog buku dan menggunakan fitur belanja: keranjang, checkout, dan pembayaran.": "Browse the book catalog and use shopping features: cart, checkout, and payment.",
      "Mengelola data dan aktivitas toko sesuai fitur yang tersedia pada aplikasi.": "Manage store data and activities using the application's available features.",
      "Dukungan persiapan dan koordinasi webinar selama magang sebagai PR & Social Media Activation Intern.": "Supported webinar preparation and coordination during my PR & Social Media Activation internship.",
      "Kebutuhan: persiapan dan koordinasi webinar yang berjalan sesuai jadwal yang direncanakan.": "Need: prepare and coordinate a webinar to keep activities on schedule.",
      "Tujuan: mendukung penyelenggaraan Citiasia Webinar Series, dari dokumen acara hingga materi promosi.": "Goal: support the Citiasia Webinar Series, from event documentation to promotional materials.",
      "Audiens: peserta webinar, termasuk perwakilan Komdigi, APJATEL, dan pemerintah daerah.": "Audience: webinar participants, including representatives from Komdigi, APJATEL, and local governments.",
      "Menyusun dan memperbarui dokumen acara, jadwal, dan master sheet.": "Prepared and updated event documents, schedules, and the master sheet.",
      "Mengoordinasikan update tugas dengan anggota tim selama persiapan.": "Coordinated task updates with team members during preparation.",
      "Mendukung materi promosi dan konten social media untuk webinar.": "Supported promotional materials and social media content for the webinar.",
      "Membantu persiapan dan koordinasi acara sesuai jadwal yang direncanakan.": "Helped prepare and coordinate event activities according to the planned schedule.",
      "Webinar dihadiri 300 peserta.": "The webinar was attended by 300 participants.",
      "Dihadiri perwakilan Komdigi, APJATEL, dan pemerintah daerah.": "Attended by representatives from Komdigi, APJATEL, and local governments.",
      "Bisnis merchandise kecil yang saya kelola secara mandiri, dari produksi, penjualan, dan operasional hingga pemasaran digital.": "A small merchandise business I independently managed, covering production, sales, operations, and digital marketing.",
      "Kebutuhan: menjalankan bisnis merchandise kecil secara mandiri dari produksi hingga penjualan.": "Need: independently manage a small merchandise business from production to sales.",
      "Tujuan: menghasilkan dan menjual produk K-Pop: binder, pouch, dan birthday kit.": "Goal: create and sell K-pop products, including binders, pouches, and birthday kits.",
      "Target pelanggan: pembeli merchandise K-Pop.": "Target audience: K-pop merchandise buyers.",
      "Produksi: mendesain produk dan mencari vendor yang berkualitas.": "Production: design products and source reliable vendors.",
      "Penjualan: mengelola pesanan dan kebutuhan pelanggan.": "Sales: manage orders and customer needs.",
      "Operasional: mengatur stok, modal, harga, dan laporan.": "Operations: manage inventory, capital, pricing, and reports.",
      "Pemasaran: membuat konten dan promosi digital.": "Marketing: create digital content and promotions.",
      "Saya sedang mencari kesempatan magang di bidang Administrasi, Operasional, atau Purchasing. Senang berdiskusi dan berkolaborasi.": "I am seeking internship opportunities in Administration, Operations, or Purchasing. I welcome conversations and collaboration.",
      "Terima kasih sudah mampir ♡": "Thanks for stopping by ♡",
      "Makasih udah mampir ♡": "Thanks for visiting ♡",
      "Gambar sertifikat belum ditambahkan ke assets/images ♡": "Certificate images have not been added to assets/images yet ♡",
      "Buka navigasi": "Open navigation", "Tutup navigasi": "Close navigation",
      "Ganti ke mode malam": "Switch to dark mode", "Ganti ke mode siang": "Switch to light mode",
      "Mode malam": "Dark mode", "Mode siang": "Light mode",
      "Kebutuhan: menjalankan bisnis merchandise kecil secara mandiri dari produksi hingga penjualan.": "Need: independently manage a small merchandise business from production to sales.",
      "Tujuan: menghasilkan dan menjual produk K-Pop: binder, pouch, dan birthday kit.": "Goal: create and sell K-pop products, including binders, pouches, and birthday kits.",
      "Target pelanggan: pembeli merchandise K-Pop.": "Target audience: K-pop merchandise buyers.",
      "Produksi: mendesain produk dan mencari vendor yang berkualitas.": "Production: design products and source reliable vendors.",
      "Penjualan: mengelola pesanan dan kebutuhan pelanggan.": "Sales: manage orders and customer needs.",
      "Operasional: mengatur stok, modal, harga, dan laporan.": "Operations: manage inventory, capital, pricing, and reports.",
      "Pemasaran: membuat konten dan promosi digital.": "Marketing: create digital content and promotions.",
      "Binder K-Pop menjadi salah satu produk dengan penjualan tertinggi.": "K-pop binders became one of the best-selling products.",
      "Sekitar 50 unit terjual.": "Approximately 50 units sold.",
      "Rapi dalam detail, terbuka untuk belajar hal baru.": "Detail-oriented and open to learning new things.",
      "S1 Digital Business (2028)": "B.B.A. in Digital Business (expected 2028)",
      "Saya mahasiswa S1 Bisnis Digital di Cakrawala University.": "I am an undergraduate Digital Business student at Cakrawala University.",
      
      "Mahasiswa Bisnis Digital": "Digital Business Student",
      "PERSONAL INFO": "PERSONAL INFORMATION",
      "CORE SKILLS": "CORE SKILLS",
      "PENGALAMAN": "EXPERIENCE",
      "Pendidikan": "Education",
      "Mencari kesempatan magang": "Seeking internship opportunities"
    };
    const reverseTranslations = Object.fromEntries(Object.entries(translations).map(([idText, enText]) => [enText, idText]));
    const idLabels = {
      "PROFILE": "PROFIL", "A little bit": "Sedikit cerita", "about me.": "tentang saya.",
      "PERSONAL INFO": "INFORMASI PRIBADI", "CORE SKILLS": "KETERAMPILAN UTAMA", "EDUCATION": "PENDIDIKAN",
      "Where I study": "Tempat saya belajar", "RECOMMENDATIONS": "REKOMENDASI", "A few kind words.": "Beberapa kata baik.",
      "Feedback shared on LinkedIn by my internship mentor and project teammate.": "Ulasan di LinkedIn dari mentor magang dan rekan proyek saya.",
      "Selected projects from university, event support, and personal initiatives.": "Proyek pilihan dari perkuliahan, kegiatan, dan pengalaman pribadi.",
      "Need": "Kebutuhan", "Goal": "Tujuan", "Target audience": "Target pelanggan", "Production": "Produksi",
      "Sales": "Penjualan", "Operations": "Operasional", "Marketing": "Pemasaran", "Brief": "Ringkasan",
      "Process": "Proses", "Result": "Hasil", "My Small Business": "Bisnis Kecil Saya",
      "A small merchandise business I independently managed, covering production, sales, operations, and digital marketing.": "Bisnis merchandise kecil yang saya kelola secara mandiri, dari produksi, penjualan, operasional hingga pemasaran digital.",
      "Product Design": "Desain Produk", "Vendor Sourcing": "Pencarian Vendor", "Digital Promotion": "Promosi Digital",
      "Let's make something": "Mari buat sesuatu yang", "meaningful.": "bermakna.", "Chat on WhatsApp": "Chat via WhatsApp", "Download CV": "Unduh CV",
      "Administration": "Administrasi", "Documents, records & reports": "Dokumen, catatan & laporan", "Data": "Data",
      "Cleaning, Excel & basic analysis": "Pembersihan data, Excel & analisis dasar", "Operations & Purchasing": "Operasional & Purchasing",
      "Vendors, approvals & follow-up": "Vendor, persetujuan & tindak lanjut", "Customer Service": "Layanan Pelanggan",
      "Inquiries, orders & payments": "Pertanyaan, pesanan & pembayaran", "Digital Business Student": "Mahasiswa Bisnis Digital"
    };
    const originalTexts = new Map();
    const walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT);
    let textNode;
    while ((textNode = walker.nextNode())) {
      const value = textNode.nodeValue.trim();
      if (value) originalTexts.set(textNode, textNode.nodeValue);
    }
    function setLanguage(lang) {
      originalTexts.forEach((original, node) => {
        const trimmed = original.trim().replace(/\s+/g, " ");
        let translated = lang === "en" ? (translations[trimmed] || trimmed) : (reverseTranslations[trimmed] || idLabels[trimmed] || trimmed);
        // Translate phrases within a text node too, so labels mixed with dynamic PHP text are covered.
        const phraseMap = lang === "en" ? translations : { ...reverseTranslations, ...idLabels };
        if (translated === trimmed) {
          translated = trimmed;
          Object.entries(phraseMap).sort((a,b) => b[0].length-a[0].length).forEach(([from,to]) => {
            if (from && translated.includes(from)) translated = translated.split(from).join(to);
          });
        }
        const leading = original.match(/^\s*/)[0], trailing = original.match(/\s*$/)[0];
        node.nodeValue = leading + translated + trailing;
      });
      languageButtons.forEach(btn => {
        const active = btn.dataset.lang === lang;
        btn.classList.toggle("active", active);
        btn.setAttribute("aria-pressed", String(active));
      });
      document.documentElement.lang = lang;
      try { localStorage.setItem("portfolio-language", lang); } catch (e) {}
    }
    languageButtons.forEach(btn => btn.addEventListener("click", () => setLanguage(btn.dataset.lang)));
    let initialLanguage = "en";
    try { initialLanguage = localStorage.getItem("portfolio-language") || "en"; } catch (e) {}
    setLanguage(initialLanguage);

    const menuToggle = document.querySelector("#menuToggle");
    const navLinks = document.querySelector("#navLinks");
    const backToTop = document.querySelector("#backToTop");

    // Navigasi mobile
    function closeMenu() {
        navLinks.classList.remove("open");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Buka navigasi");
        menuToggle.textContent = "☰";
    }

    if (menuToggle && navLinks) {
        menuToggle.addEventListener("click", function () {
            const isOpen = navLinks.classList.toggle("open");
            menuToggle.setAttribute("aria-expanded", String(isOpen));
            menuToggle.setAttribute("aria-label", isOpen ? "Tutup navigasi" : "Buka navigasi");
            menuToggle.textContent = isOpen ? "✕" : "☰";
        });
        navLinks.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", closeMenu);
        });
    }

    // Animasi muncul saat di-scroll
    const revealItems = document.querySelectorAll(
        ".section-heading, .about-side, .about-copy, .core-skills, .tl-card, .skill-group, .project-card, .certificate-card, .education-card, .contact-card, .soft-skills"
    );

    if (!("IntersectionObserver" in window)) {
        revealItems.forEach(function (item) { item.classList.add("in-view"); });
    } else {
        const revealObserver = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in-view");
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        revealItems.forEach(function (item) {
            item.classList.add("reveal");
            revealObserver.observe(item);
        });
    }

    // Menu aktif sesuai section yang sedang dilihat
    const navAnchors = document.querySelectorAll(".nav-links a[data-nav]");
    if ("IntersectionObserver" in window && navAnchors.length) {
        const sections = [];
        navAnchors.forEach(function (a) {
            const target = document.querySelector(a.getAttribute("href"));
            if (target) { sections.push({ el: target, link: a }); }
        });
        const navObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    navAnchors.forEach(function (a) { a.classList.remove("active"); });
                    const hit = sections.find(function (s) { return s.el === entry.target; });
                    if (hit) { hit.link.classList.add("active"); }
                }
            });
        }, { rootMargin: "-45% 0px -50% 0px" });
        sections.forEach(function (s) { navObserver.observe(s.el); });
    }

    // Tombol kembali ke atas
    function updateBackToTop() {
        if (backToTop) {
            backToTop.classList.toggle("visible", window.scrollY > 450);
        }
    }
    window.addEventListener("scroll", updateBackToTop, { passive: true });
    updateBackToTop();

    if (backToTop) {
        backToTop.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    // Kelinci melompat saat diklik
    document.querySelectorAll(".cert-peek, .contact-peek, .hero-bunny").forEach(function (b) {
        b.addEventListener("click", function () {
            b.classList.remove("jump");
            void b.offsetWidth;
            b.classList.add("jump");
        });
    });

    // =====================================================
    // MOCHI SI KELINCI
    // =====================================================
    const MASCOT_NAME = "Mochi";   // ganti namanya di sini kalau mau
    const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    const mascot = document.querySelector("#mascot");
    const mascotBody = document.querySelector("#mascotBody");
    const bubble = document.querySelector("#mascotBubble");
    const carrotBtn = document.querySelector("#mascotCarrot");
    const carrotCount = document.querySelector("#carrotCount");
    let bubbleTimer, carrots = 0, clicks = 0, lastMsg = -1, lastActivity = Date.now();

    function say(text, ms) {
        if (!bubble) { return; }
        bubble.textContent = text;
        bubble.classList.add("show");
        clearTimeout(bubbleTimer);
        bubbleTimer = setTimeout(function () { bubble.classList.remove("show"); }, ms || 3800);
    }

    function pick(list) {
        let i;
        do { i = Math.floor(Math.random() * list.length); } while (list.length > 1 && i === lastMsg);
        lastMsg = i;
        return list[i];
    }

    // hati dan bintang kecil yang melayang naik
    function burst(x, y, symbols, count) {
        if (reduceMotion) { return; }
        const colors = ["#f5b9d2", "#a9d7f7", "#4d91c7", "#f08fb4"];
        for (let i = 0; i < count; i++) {
            const el = document.createElement("span");
            el.className = "fx";
            el.textContent = symbols[Math.floor(Math.random() * symbols.length)];
            el.style.left = x + "px";
            el.style.top = y + "px";
            el.style.color = colors[Math.floor(Math.random() * colors.length)];
            el.style.fontSize = (12 + Math.random() * 14) + "px";
            el.style.animationDelay = (i * 55) + "ms";
            el.style.setProperty("--dx", (Math.random() * 90 - 45) + "px");
            el.style.setProperty("--rot", (Math.random() * 50 - 25) + "deg");
            el.addEventListener("animationend", function () { el.remove(); });
            document.body.appendChild(el);
        }
    }

    function centerOf(el) {
        const r = el.getBoundingClientRect();
        return { x: r.left + r.width / 2, y: r.top + r.height * 0.35 };
    }

    function hop() {
        if (!mascotBody) { return; }
        mascotBody.classList.remove("hop");
        void mascotBody.offsetWidth;
        mascotBody.classList.add("hop");
    }

    if (mascot && mascotBody) {
        const chatter = [
            "Halo! Aku " + MASCOT_NAME + ", kelinci kecilnya Shifa ♡",
            "Psst... Shifa lagi cari magang lho ✦",
            "Jangan lupa minum air putih ya!",
            "Kamu keren banget udah sampai sini ♡",
            "Boleh minta wortel? Nyam~",
            "Excel-nya Shifa rapi banget, cek deh!",
            "Hop hop hop! Semangat ya!",
            "Klik di mana aja, nanti ada hati ♡"
        ];

        mascotBody.addEventListener("click", function () {
            clicks += 1;
            hop();
            const p = centerOf(mascotBody);
            burst(p.x, p.y, ["♡", "✦"], 5);
            say(clicks % 7 === 0 ? "Hihi, geli ih! ♡" : pick(chatter));
        });

        if (carrotBtn) {
            carrotBtn.addEventListener("click", function () {
                carrots += 1;
                if (carrotCount) { carrotCount.textContent = String(carrots); }
                mascot.classList.remove("eating");
                void mascot.offsetWidth;
                mascot.classList.add("eating");
                hop();
                const p = centerOf(mascotBody);
                const special = {
                    1: "Nyam! Enak banget~",
                    3: "Wortelnya manis ♡",
                    5: "Perutku mulai bulat nih hihi",
                    8: "Kenyang... tapi mau satu lagi!",
                    10: "Kamu teman terbaik! Makasih ya ♡"
                };
                burst(p.x, p.y, ["♡"], carrots === 10 ? 16 : 4);
                say(special[carrots] || pick(["Nyam nyam~", "Satu lagi dong ♡", "Hehe, makasih!", "Enak banget!"]));
            });
        }

        // sapaan pertama sesuai jam
        setTimeout(function () {
            const h = new Date().getHours();
            const salam = h < 11 ? "Selamat pagi" : h < 15 ? "Selamat siang" : h < 18 ? "Selamat sore" : "Selamat malam";
            say(salam + "! Aku " + MASCOT_NAME + ". Selamat datang di portofolio Shifa ♡", 4800);
        }, 1800);

        // komentar tiap section (sekali saja)
        const notes = {
            about: "Ini Shifa! Mahasiswa Bisnis Digital~",
            experience: "Pengalaman Shifa lumayan banyak lho ✦",
            skills: "Klik gambarnya buat lihat lebih besar!",
            certificates: "Sertifikatnya bisa diklik juga ♡",
            projects: "Ada BookHive, webinar, sampai bisnis kecil!",
            contact: "Mau ngobrol? Klik WhatsApp ya ♡"
        };
        if ("IntersectionObserver" in window) {
            const seen = {};
            const noteObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    const id = entry.target.id;
                    if (entry.isIntersecting && !seen[id] && !mascot.classList.contains("asleep")) {
                        seen[id] = true;
                        say(notes[id], 3600);
                    }
                });
            }, { threshold: 0.35 });
            Object.keys(notes).forEach(function (id) {
                const el = document.getElementById(id);
                if (el) { noteObserver.observe(el); }
            });
        }

        // ngantuk kalau lama didiamkan
        function wake() {
            lastActivity = Date.now();
            if (mascot.classList.contains("asleep")) {
                mascot.classList.remove("asleep");
                say("Eh? Aku ketiduran ya... hehe", 3000);
            }
        }
        ["pointermove", "scroll", "keydown", "touchstart", "click"].forEach(function (ev) {
            window.addEventListener(ev, wake, { passive: true });
        });
        setInterval(function () {
            if (Date.now() - lastActivity > 25000 && !mascot.classList.contains("asleep")) {
                mascot.classList.add("asleep");
                say("Zzz... zzz...", 2600);
            }
        }, 1000);
    }

    // mata semua kelinci mengikuti kursor
    const eyeGroups = document.querySelectorAll(".bunny .eyes");
    let mouseX = 0, mouseY = 0, looking = false;
    function lookAround() {
        looking = false;
        eyeGroups.forEach(function (g) {
            const r = g.ownerSVGElement.getBoundingClientRect();
            if (r.bottom < 0 || r.top > window.innerHeight) { return; }
            const dx = mouseX - (r.left + r.width / 2);
            const dy = mouseY - (r.top + r.height * 0.55);
            const d = Math.hypot(dx, dy) || 1;
            const k = Math.min(1, d / 160) * 2.4;
            g.style.transform = "translate(" + (dx / d * k).toFixed(2) + "px," + (dy / d * k).toFixed(2) + "px)";
        });
    }
    if (!reduceMotion) {
        window.addEventListener("pointermove", function (e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
            if (!looking) { looking = true; requestAnimationFrame(lookAround); }
        }, { passive: true });
    }

    // klik di mana saja: hati kecil
    document.addEventListener("click", function (e) {
        if (e.detail === 0 || e.target.closest("#mascot")) { return; }
        burst(e.clientX, e.clientY, ["♡", "✦"], 3);
    });

    // kelinci di halaman (hero / sertifikat / contact) juga mengeluarkan hati
    document.querySelectorAll(".cert-peek, .contact-peek, .hero-bunny").forEach(function (b) {
        b.addEventListener("click", function () {
            const p = centerOf(b);
            burst(p.x, p.y, ["♡"], 4);
        });
    });

    // kelinci berlari di bar atas sesuai posisi scroll
    const scrollFill = document.querySelector("#scrollFill");
    const scrollHopper = document.querySelector("#scrollHopper");
    let lastY = window.scrollY, hopTimer, reachedEnd = false;
    function updateProgress(animate) {
        if (!scrollFill || !scrollHopper) { return; }
        const max = document.documentElement.scrollHeight - window.innerHeight;
        const p = max > 0 ? Math.min(1, Math.max(0, window.scrollY / max)) : 0;
        scrollFill.style.width = (p * 100) + "%";
        scrollHopper.style.left = "calc(" + (p * 100) + "% - " + (p * 26) + "px)";
        if (animate) {
            scrollHopper.classList.toggle("back", window.scrollY < lastY);
            scrollHopper.classList.add("moving");
            clearTimeout(hopTimer);
            hopTimer = setTimeout(function () { scrollHopper.classList.remove("moving"); }, 160);
        }
        lastY = window.scrollY;
        if (p > 0.995 && !reachedEnd && mascot) {
            reachedEnd = true;
            say("Yeay, kamu sampai bawah! Makasih udah mampir ♡", 4500);
            burst(window.innerWidth / 2, window.innerHeight * 0.7, ["♡", "✦"], 12);
        } else if (p < 0.9) {
            reachedEnd = false;
        }
    }
    window.addEventListener("scroll", function () { updateProgress(true); }, { passive: true });
    window.addEventListener("resize", function () { updateProgress(false); });
    updateProgress(false);

    // =====================================================
    // MODE MALAM
    // =====================================================
    const themeBtn = document.querySelector("#themeToggle");
    function applyTheme(mode) {
        document.documentElement.setAttribute("data-theme", mode);
        if (themeBtn) {
            themeBtn.textContent = mode === "dark" ? "☀" : "☾";
            themeBtn.setAttribute("aria-label", mode === "dark" ? "Switch to light mode" : "Switch to dark mode");
            themeBtn.setAttribute("title", mode === "dark" ? "Light mode" : "Dark mode");
        }
    }
    applyTheme(document.documentElement.getAttribute("data-theme") === "dark" ? "dark" : "light");
    if (themeBtn) {
        themeBtn.addEventListener("click", function () {
            const next = document.documentElement.getAttribute("data-theme") === "dark" ? "light" : "dark";
            applyTheme(next);
            try { localStorage.setItem("theme", next); } catch (e) { /* abaikan */ }
            if (mascot) {
                mascot.classList.remove("asleep");
                say(next === "dark" ? "Good evening~ " + MASCOT_NAME + " is putting on a sleepy cap ♡" : "A fresh new day! You’ve got this ♡", 3800);
            }
        });
    }
});
