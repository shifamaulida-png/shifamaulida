<?php
/* =========================================================
   SHIFA MAULIDA — PORTFOLIO
   Semua konten ada di bagian DATA di bawah ini (disesuaikan dengan CV).
   Gambar: letakkan di assets/images/ dengan nama file yang sama persis.
========================================================= */

// ---------- DATA PRIBADI ----------
$name     = "Shifa Maulida";
$email    = "shifa.maulida@cakrawala.ac.id";
$whatsapp = "https://wa.me/6285159526604";
$location = "Jakarta, Indonesia";
$linkedin  = "https://www.linkedin.com/in/shifa-maulida03";
$instagram = "https://www.instagram.com/evaahaddad/";
$cvFile   = "CV_Shifa_Maulida_new_2026.pdf";   // taruh file CV di folder yang sama dengan index.php
$siteUrl  = "";   // isi setelah website online, mis. "https://shifa-maulida.netlify.app" (dipakai untuk preview link WhatsApp/LinkedIn)

// ---------- SKILLS ----------
$skillGroups = [
    ["title" => "Administration & Operations", "icon" => "▣",
     "items" => ["Administration", "Data Entry", "Report Preparation", "Procurement / Purchasing", "Transaction Records", "Vendor Coordination", "Document Archiving", "Team Coordination", "Customer Service"],
     "shots" => []],
    ["title" => "Excel & Spreadsheet", "icon" => "▦",
     "items" => ["Microsoft Excel", "Google Sheets", "XLOOKUP / VLOOKUP", "SUMIF", "Pivot Table", "Multi IF"],
     "shots" => [
        ["image" => "Xlookup_Excel_Skills.jpg", "title" => "XLOOKUP"],
        ["image" => "MultiIF_Excel_Skills.jpg", "title" => "Multi IF"],
        ["image" => "Worksheet_Excel_Skills.jpg", "title" => "Worksheet"],
        ["image" => "GeneralLedger_Excel_Skills.jpg", "title" => "General Ledger"],
        ["image" => "Dashboard_Excel_Skills.jpg", "title" => "Excel Dashboard"]
     ]],
    ["title" => "Data & Analytics", "icon" => "▥",
     "items" => ["Data Cleaning", "Basic Data Analysis", "Power BI (learning)"],
     "shots" => [
        ["image" => "Dashboard_PowerBI1_Skills.png", "title" => "Dashboard 1"],
        ["image" => "Dashboard_PowerBI_2_Skills.png", "title" => "Dashboard 2"]
     ]],
    ["title" => "Business Analysis", "icon" => "◈",
     "items" => ["Competitor Analysis", "Business Strategy"],
     "shots" => [
        ["image" => "Competitor_Analysis_Skills.jpg", "title" => "Competitor Analysis"],
        ["image" => "Business_strategy_Skills.jpg", "title" => "Business Strategy"]
     ]],
    ["title" => "Digital Tools", "icon" => "✧",
     "items" => ["Microsoft Office", "Google Workspace", "Canva", "CapCut", "Figma", "MySQL", "phpMyAdmin"],
     "shots" => []]
];
$softSkills = ["Attention to Detail", "Communication", "Time Management", "Problem Solving", "Teamwork", "Critical Thinking"];
$skillCount = 0;
foreach ($skillGroups as $g) { $skillCount += count($g["items"]); }

// ---------- PENGALAMAN (urut dari terbaru) ----------
$experiences = [
    ["date" => "Agu – Okt 2026", "company" => "Citiasia Inc.", "role" => "PR & Social Media Activation Intern",
     "points" => [
        "Mendukung aktivitas social media dan activation untuk proyek perusahaan.",
        "Membuat konten Niskala Kota: sekitar 11 video dan 10 campaign Instagram Story.",
        "Menyusun dan memperbarui content schedule, master sheet, serta dokumen proyek.",
        "Mendukung persiapan webinar dan event yang dihadiri 300 peserta, termasuk perwakilan Komdigi, APJATEL, dan pemerintah daerah, serta mengoordinasikan update tugas dengan tim.",
        "Menyelesaikan program magang pada Oktober 2026."
     ],
     "tags" => ["Social Media", "Content Planning", "Niskala Kota", "Webinar Support"],
     "image" => "Internship_Citiasia_Experience.jpeg"],
    ["date" => "Jan – Jun 2026", "company" => "Berkah Group", "role" => "Operational Analyst & Administration Intern",
     "points" => [
        "Memantau dan memperbarui data occupancy untuk laporan operasional.",
        "Berkoordinasi dengan tim housekeeping, maintenance, repair, dan vendor terkait permintaan operasional.",
        "Memproses permintaan approval operasional dan menindaklanjuti ke pihak terkait.",
        "Menangani procurement perlengkapan operasional bersama 3+ vendor: komunikasi, koordinasi harga, dan follow-up pembelian.",
        "Memproses tagihan operasional dan pembayaran vendor serta menjaga dokumen pendukung.",
        "Menjaga catatan operasional, dokumen transaksi, dan laporan administrasi."
     ],
     "tags" => ["Operations", "Procurement", "Vendor Coordination", "Reporting"],
     "image" => "Berkah_Group_Experince.jpg"],
    ["date" => "2024 – 2025", "company" => "Parfumart", "role" => "Admin & Customer Service",
     "points" => [
        "Menyusun laporan keuangan harian, mingguan, dan bulanan.",
        "Mencatat dan memantau transaksi harian serta kas kecil.",
        "Menangani pertanyaan pelanggan, pemrosesan order, dan konfirmasi pembayaran.",
        "Menjaga catatan transaksi dan data pelanggan sebagai acuan operasional."
     ],
     "tags" => ["Financial Reports", "Petty Cash", "Customer Service"]],
    ["date" => "2021", "company" => "Akira Skin Beauty Clinic", "role" => "Administrative Staff",
     "points" => [
        "Menangani pertanyaan pelanggan melalui pesan dan telepon.",
        "Menjadwalkan janji temu dan menjaga catatan appointment.",
        "Menyiapkan data pelanggan serta mendukung tindak lanjut treatment dan pengingat appointment."
     ],
     "tags" => ["Scheduling", "Customer Records"]],
    ["date" => "2019", "company" => "Bank BJB Syariah", "role" => "Administration Intern",
     "points" => [
        "Membantu menyusun dan merapikan laporan keuangan.",
        "Menginput dan menjaga data keuangan serta merapikan dokumen nasabah.",
        "Memilah, memindai, dan mengarsipkan dokumen serta mendukung aktivitas administrasi harian."
     ],
     "tags" => ["Financial Data", "Document Archiving"]]
];

// ---------- PROYEK ----------
$projects = [
    ["number" => "01", "images" => ["Project_WebDevelopment_Projects.png"],
     "type" => "UNIVERSITY PROJECT · INDIVIDUAL · WEB APP · 2026", "title" => "BookHive E-Commerce",
     "description" => "Aplikasi web toko buku yang saya kerjakan sendiri, dengan dua sudut pandang pengguna: Customer dan Administrator.",
     "tags" => ["CodeIgniter 4", "PHP", "MySQL", "phpMyAdmin"],
     "brief" => [
        "Kebutuhan: toko buku online tempat pelanggan melihat katalog dan berbelanja, sementara administrator mengelola data dan aktivitas toko.",
        "Tujuan: membangun aplikasi web toko buku yang berjalan dari login hingga pembayaran.",
        "Target pengguna: Customer (pembeli) dan Administrator (pengelola toko).",
        "Indikator keberhasilan: fitur utama dapat dijalankan dan lolos pengujian."
     ],
     "process" => [
        "Merancang database: tabel users, books, carts, transactions, dan transaction details.",
        "Mengembangkan aplikasi dengan CodeIgniter 4, PHP, dan MySQL (XAMPP, phpMyAdmin).",
        "Mengimplementasikan fitur login, katalog, keranjang, checkout, dan pembayaran.",
        "Menguji fitur-fitur yang telah dibuat."
     ],
     "result" => [
        "Aplikasi web toko buku yang berfungsi untuk dua peran: Customer dan Administrator.",
        "Fitur utama: login, katalog buku, keranjang, checkout, dan pembayaran.",
        "Dikerjakan sendiri, dari perancangan database hingga pengujian."
     ],
     "views" => [
        ["role" => "Customer", "icon" => "✧", "images" => ["BookHive_Customer.png", "BookHive_Customer.jpg"],
         "text" => "Melihat katalog buku dan menggunakan fitur belanja: keranjang, checkout, dan pembayaran."],
        ["role" => "Administrator", "icon" => "▣", "images" => ["BookHive_Admin.png", "BookHive_Admin.jpg"],
         "text" => "Mengelola data dan aktivitas toko sesuai fitur yang tersedia pada aplikasi."]
     ]],
    ["number" => "02", "images" => ["Webinar_CitiAsia_Projects.png"],
     "type" => "EVENT SUPPORT · CITIASIA INC. · 2026", "title" => "Citiasia Webinar Series",
     "description" => "Dukungan persiapan dan koordinasi webinar selama magang sebagai PR & Social Media Activation Intern.",
     "tags" => ["Event Support", "Master Sheet", "Social Media"],
     "brief" => [
        "Kebutuhan: persiapan dan koordinasi webinar yang berjalan sesuai jadwal yang direncanakan.",
        "Tujuan: mendukung penyelenggaraan Citiasia Webinar Series, dari dokumen acara hingga materi promosi.",
        "Audiens: peserta webinar, termasuk perwakilan Komdigi, APJATEL, dan pemerintah daerah."
     ],
     "process" => [
        "Menyusun dan memperbarui dokumen acara, jadwal, dan master sheet.",
        "Mengoordinasikan update tugas dengan anggota tim selama persiapan.",
        "Mendukung materi promosi dan konten social media untuk webinar.",
        "Membantu persiapan dan koordinasi acara sesuai jadwal yang direncanakan."
     ],
     "result" => [
        "Webinar dihadiri 300 peserta.",
        "Dihadiri perwakilan Komdigi, APJATEL, dan pemerintah daerah."
     ]],
    ["number" => "03", "images" => ["MyBusiness1.jpg", "MyBusiness2_Projects.jpg", "MyBusiness3_Projects.jpg"],
     "type" => "ENTREPRENEURSHIP · BINDER K-POP · POUCH · BIRTHDAY KIT", "title" => "My Small Business",
     "description" => "Bisnis merchandise kecil yang saya kelola secara mandiri, dari produksi, penjualan, dan operasional hingga pemasaran digital.",
     "tags" => ["Product Design", "Vendor Sourcing", "Operations", "Digital Promotion"],
     "brief" => [
        "Kebutuhan: menjalankan bisnis merchandise kecil secara mandiri dari produksi hingga penjualan.",
        "Tujuan: menghasilkan dan menjual produk K-Pop: binder, pouch, dan birthday kit.",
        "Target pelanggan: pembeli merchandise K-Pop."
     ],
     "process" => [
        "Produksi: mendesain produk dan mencari vendor yang berkualitas.",
        "Penjualan: mengelola pesanan dan kebutuhan pelanggan.",
        "Operasional: mengatur stok, modal, harga, dan laporan.",
        "Pemasaran: membuat konten dan promosi digital."
     ],
     "result" => [
        "Binder K-Pop menjadi salah satu produk dengan penjualan tertinggi.",
        "Sekitar 50 unit terjual."
     ]]
];

// ---------- SERTIFIKAT ----------
$certificates = [
    ["image" => "Excel_Certificates.jpg", "title" => "Excel Certification Bootcamp", "category" => "Data & Spreadsheet", "meta" => "DSAREA · 2026"],
    ["image" => "DQlab_Certificates.jpg", "title" => "Intro to Data Science with R", "category" => "Data Analytics", "meta" => "DQLab · 2025"],
    ["image" => "DQlab_Certificates_2.jpg", "title" => "Guide to Learn R with AI", "category" => "Data Analytics", "meta" => "DQLab · 2025"],
    ["image" => "English_Certificate.jpg", "title" => "English For Everyone (EFE)", "category" => "Language", "meta" => "EFE Indonesia · 2025"],
    ["image" => "Mekari_Certificates.jpg", "title" => "Mekari University — Participation", "category" => "Professional Skills", "meta" => "Mekari University · 2025"],
    ["image" => "Internship_BerkahGroup_Certificates.jpg", "title" => "Internship Certificate", "category" => "Work Experience", "meta" => "Berkah Group · 2026"],
    ["image" => "Internship_CitiAsia_Certificates.jpg", "title" => "Internship Certificate", "category" => "Work Experience", "meta" => "Citiasia Inc. · 2026"]
];

$coursework = ["Intro to Management & Digital Business", "Intro to Accounting", "Financial Market & Fin-Tech", "IT & Information Systems for Business", "Business & Economic Mathematics", "Intro to Data Analytics", "Business Statistics", "Risk Management", "Human Capital Management", "Customer Relationship Management"];

// ---------- FUNGSI BANTU ----------
function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}

function bunny() {
    return '<svg class="bunny" viewBox="0 0 120 130" aria-hidden="true" focusable="false">'
        . '<g class="ear ear-l"><ellipse class="fur" cx="42" cy="32" rx="12" ry="29"/><ellipse class="inner" cx="42" cy="36" rx="5.5" ry="19"/></g>'
        . '<g class="ear ear-r"><ellipse class="fur" cx="78" cy="32" rx="12" ry="29"/><ellipse class="inner" cx="78" cy="36" rx="5.5" ry="19"/></g>'
        . '<ellipse class="fur" cx="60" cy="102" rx="33" ry="24"/>'
        . '<ellipse class="fur" cx="44" cy="120" rx="12" ry="7"/><ellipse class="fur" cx="76" cy="120" rx="12" ry="7"/>'
        . '<circle class="fur" cx="60" cy="70" r="31"/>'
        . '<g class="eyes"><ellipse class="eye" cx="48" cy="68" rx="3.4" ry="4.4"/><ellipse class="eye" cx="72" cy="68" rx="3.4" ry="4.4"/></g>'
        . '<ellipse class="cheek" cx="39" cy="79" rx="6" ry="4"/><ellipse class="cheek" cx="81" cy="79" rx="6" ry="4"/>'
        . '<path class="nose" d="M55.5 74.5q4.5-3.5 9 0q-4.5 5-9 0z"/>'
        . '<path class="face-line" d="M60 79v3M60 82q-4 4-8 1M60 82q4 4 8 1"/>'
        . '</svg>';
}

function has_image($file) {
    return $file && file_exists(__DIR__ . "/assets/images/" . $file);
}

function first_image($names) {
    foreach ($names as $n) { if (has_image($n)) { return $n; } }
    return null;
}

function existing($items) {
    return array_values(array_filter($items, function ($i) { return has_image($i["image"]); }));
}

// ---------- OPTIMASI GAMBAR ----------
// Gambar besar otomatis dibuatkan versi kecilnya (disimpan di assets/images/_opt/).
// File asli tidak diubah dan tetap dipakai saat gambar diklik. Hapus folder _opt
// kalau ingin dibuat ulang. Kalau PHP GD tidak aktif, gambar asli dipakai apa adanya.
function img_info($file, $maxW) {
    $rel  = "assets/images/" . $file;
    $path = __DIR__ . "/" . $rel;
    $size = @getimagesize($path);
    if (!$size) { return ["src" => $rel, "w" => 0, "h" => 0]; }

    $w = (int)$size[0]; $h = (int)$size[1]; $type = $size[2];
    $orient = 1;
    if ($type === IMAGETYPE_JPEG && function_exists("exif_read_data")) {
        $exif = @exif_read_data($path);
        if (is_array($exif) && isset($exif["Orientation"])) { $orient = (int)$exif["Orientation"]; }
        if ($orient === 6 || $orient === 8) { $tmp = $w; $w = $h; $h = $tmp; }
    }
    $out = ["src" => $rel, "w" => $w, "h" => $h];
    if ($w <= $maxW || !function_exists("imagecreatetruecolor")) { return $out; }

    $nw = $maxW;
    $nh = max(1, (int)round($h * $nw / $w));
    $isPng = ($type === IMAGETYPE_PNG);
    $ext = $isPng ? "png" : "jpg";
    $dirRel = "assets/images/_opt";
    $cacheRel = $dirRel . "/" . pathinfo($file, PATHINFO_FILENAME) . "-" . $nw . "-" . filemtime($path) . "." . $ext;
    $cachePath = __DIR__ . "/" . $cacheRel;
    $result = ["src" => $cacheRel, "w" => $nw, "h" => $nh];
    if (file_exists($cachePath)) { return $result; }

    @ini_set("memory_limit", "512M");
    if (!is_dir(__DIR__ . "/" . $dirRel) && !@mkdir(__DIR__ . "/" . $dirRel, 0755, true)) { return $out; }

    $src = false;
    if ($type === IMAGETYPE_JPEG) { $src = @imagecreatefromjpeg($path); }
    elseif ($isPng) { $src = @imagecreatefrompng($path); }
    elseif (defined("IMAGETYPE_WEBP") && $type === IMAGETYPE_WEBP && function_exists("imagecreatefromwebp")) { $src = @imagecreatefromwebp($path); }
    if (!$src) { return $out; }

    if ($orient === 3) { $src = imagerotate($src, 180, 0); }
    elseif ($orient === 6) { $src = imagerotate($src, -90, 0); }
    elseif ($orient === 8) { $src = imagerotate($src, 90, 0); }

    $dst = imagecreatetruecolor($nw, $nh);
    if ($isPng) {
        imagealphablending($dst, false);
        imagesavealpha($dst, true);
        imagefill($dst, 0, 0, imagecolorallocatealpha($dst, 0, 0, 0, 127));
    } else {
        imagefill($dst, 0, 0, imagecolorallocate($dst, 255, 255, 255));
    }
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $nw, $nh, imagesx($src), imagesy($src));
    $ok = $isPng ? @imagepng($dst, $cachePath, 8) : @imagejpeg($dst, $cachePath, 82);
    imagedestroy($src);
    imagedestroy($dst);
    return $ok ? $result : $out;
}

function photo($file, $maxW, $alt, $class = "", $lazy = true) {
    $i = img_info($file, $maxW);
    $attr = ' src="' . e($i["src"]) . '" alt="' . e($alt) . '"';
    if ($class) { $attr .= ' class="' . e($class) . '"'; }
    if ($i["w"] && $i["h"]) { $attr .= ' width="' . $i["w"] . '" height="' . $i["h"] . '"'; }
    $attr .= $lazy ? ' loading="lazy" decoding="async"' : ' decoding="async"';
    return "<img" . $attr . ">";
}

$visibleCertificates = existing($certificates);
$cvHref = rawurlencode($cvFile);

$base   = $siteUrl ? rtrim($siteUrl, "/") . "/" : "";
$ogTitle = "Shifa Maulida — Portfolio";
$ogDesc  = "Mahasiswa Bisnis Digital dengan pengalaman administrasi, operasional, purchasing, dan pengolahan data. Terbuka untuk kesempatan magang.";

$stats = [
    ["#experience", "✦", count($experiences), "Experiences"],
    ["#skills", "▤", $skillCount, "Skills & tools"],
    ["#certificates", "♡", count($visibleCertificates), "Certificates"],
    ["#projects", "▥", count($projects), "Projects"]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= e($ogDesc) ?>">
    <meta name="theme-color" content="#4d91c7">
    <title><?= e($ogTitle) ?></title>

    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Shifa Maulida">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="<?= e($ogTitle) ?>">
    <meta property="og:description" content="<?= e($ogDesc) ?>">
    <meta property="og:image" content="<?= e($base) ?>og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Shifa Maulida — Digital Business Student">
    <?php if ($siteUrl): ?>
    <meta property="og:url" content="<?= e($base) ?>">
    <link rel="canonical" href="<?= e($base) ?>">
    <?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($ogTitle) ?>">
    <meta name="twitter:description" content="<?= e($ogDesc) ?>">
    <meta name="twitter:image" content="<?= e($base) ?>og-image.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>(function(){try{if(localStorage.getItem("theme")==="dark"){document.documentElement.setAttribute("data-theme","dark");}}catch(e){}})();</script>
    <link rel="stylesheet" href="style.css?v=20261028-clouds-en5">
</head>
<body>
    <div class="page-glow glow-one"></div>
    <div class="page-glow glow-two"></div>

    <header class="site-header">
        <nav class="navbar container" aria-label="Navigasi utama">
            <a class="brand" href="#home">shifa<span>.</span><i>✦</i></a>
            <button class="menu-toggle" id="menuToggle" aria-label="Buka navigasi" aria-expanded="false">☰</button>
            <div class="nav-links" id="navLinks">
                <a data-nav href="#about">Profile</a>
                <a data-nav href="#experience">Experience</a>
                <a data-nav href="#skills">Skills</a>
                <a data-nav href="#certificates">Certificates</a>
                <a data-nav href="#projects">Projects</a>
                <a class="nav-cta" href="#contact">Let's connect ↗</a>
                <div class="language-toggle" role="group" aria-label="Choose language"><button type="button" class="language-btn active" data-lang="en" aria-pressed="true">EN</button><button type="button" class="language-btn" data-lang="id" aria-pressed="false">ID</button></div>
                <button type="button" class="theme-toggle" id="themeToggle" aria-label="Switch to dark mode" title="Dark mode">☾</button>
            </div>
        </nav>
        <div class="scroll-track" aria-hidden="true">
            <span class="scroll-fill" id="scrollFill"></span>
            <span class="scroll-hopper" id="scrollHopper"><?= bunny() ?></span>
        </div>
    </header>

    <main>
        <!-- HERO -->
        <section class="hero container" id="home">
            <div class="hero-copy">
                <h1>Hi, I'm <span class="name-highlight"><?= e($name) ?></span><span class="wave">✦</span></h1>
                <h2>Making details <span>make sense.</span></h2>
                <p class="hero-description">Mahasiswa Bisnis Digital dengan pengalaman di administrasi, dukungan operasional, pengolahan data, penyusunan laporan, procurement, dan customer service. Terbiasa mengelola dokumen, data transaksi, serta berkoordinasi dengan tim internal dan vendor.</p>
                <ul class="hero-summary" aria-label="Ringkasan singkat">
                    <li><span>◎</span> Jakarta, ID</li>
                    <li><span>✦</span> Open for internship</li>
                    <li><span>▦</span> Excel &amp; Spreadsheet</li>
                    <li><span>▣</span> Admin · Operations · Purchasing</li>
                </ul>
                <div class="hero-actions">
                    <a class="button button-primary" href="<?= e($cvHref) ?>" download>Download CV <span>↓</span></a>
                    <a class="button button-secondary" href="#experience">See my experience <span>↓</span></a>
                </div>
                <ul class="hero-facts">
                    <li><?= e($location) ?></li>
                    <li>S1 Bisnis Digital, Cakrawala University</li>
                    <li>Excel · Google Workspace · Data</li>
                </ul>
            </div>

            <div class="hero-art" aria-label="Ilustrasi profil">
                <div class="orbit orbit-one"></div>
                <div class="orbit orbit-two"></div>
                <span class="float-star star-a">✦</span>
                <span class="float-star star-b">✧</span>
                <span class="float-cloud">☁</span>
                <div class="profile-illustration">
                    <div class="illustration-top"><span>MY LITTLE CORNER</span><span class="dots">•••</span></div>
                    <div class="monogram-wrap">
                        <?php if (has_image("profile.jpg")): ?>
                            <?= photo("profile.jpg", 800, "Foto profil Shifa Maulida", "profile-photo", false) ?>
                        <?php else: ?>
                            <div class="monogram">SM</div>
                        <?php endif; ?>
                        <span class="mini-heart">♡</span>
                    </div>
                    <div class="profile-name"><?= e($name) ?></div>
                    <div class="profile-subtitle">Digital Business Student</div>
                    <div class="profile-divider"></div>
                    <div class="profile-bottom"><span>Jakarta, ID</span></div>
                </div>
                <div class="hero-bunny" aria-hidden="true" title="Halo!"><?= bunny() ?></div>
                <div class="floating-note note-top"><span class="note-icon">✧</span><div><b>Detail-oriented</b><small>Organized with care</small></div></div>
                <div class="floating-note note-bottom"><span class="note-icon note-icon-pink">♡</span><div><b>Always learning</b><small>One skill at a time</small></div></div>
            </div>
        </section>

        <!-- STATS -->
        <section class="container stats-strip" aria-label="Ringkasan portofolio">
            <?php foreach ($stats as $st): ?>
            <a class="stat-card" href="<?= e($st[0]) ?>">
                <span class="stat-icon"><?= e($st[1]) ?></span>
                <span><b><?= e($st[2]) ?></b><small><?= e($st[3]) ?></small></span>
            </a>
            <?php endforeach; ?>
        </section>

        <!-- ABOUT -->
        <section class="section container" id="about">
            <div class="section-heading">
                <span class="section-kicker">PROFILE</span>
                <h2>A little bit <span>about me.</span></h2>
                <p>Rapi dalam detail, terbuka untuk belajar hal baru.</p>
            </div>
            <div class="about-layout">
                <div class="about-side">
                    <div class="about-sticker" aria-hidden="true">
                        <div class="sticker-cloud">☁</div>
                        <div class="sticker-big">hello<span>!</span></div>
                        <div class="sticker-caption">nice to meet you</div>
                        <span class="sticker-spark">✦</span>
                        <span class="sticker-heart">♡</span>
                    </div>
                    <div class="facts-group">
                        <div class="small-label">PERSONAL INFO</div>
                        <dl class="facts-card">
                            <div><dt>Location</dt><dd><?= e($location) ?></dd></div>
                            <div><dt>Studying</dt><dd>S1 Digital Business (2028)</dd></div>
                            <div><dt>Looking for</dt><dd>Admin · Ops · Purchasing</dd></div>
                            <div><dt>Languages</dt><dd>Indonesian (Native)<br>English (Intermediate)</dd></div>
                        </dl>
                    </div>
                </div>
                <div class="about-copy">
                    <div class="small-label">HELLO, NICE TO MEET YOU <span>♡</span></div>
                    <h3>Curiosity is where <br>good work begins.</h3>
                    <p>Saya mahasiswa S1 Bisnis Digital di Cakrawala University. Pengalaman saya mencakup administrasi, dukungan operasional, pengolahan data, penyusunan laporan, procurement, dan customer service.</p>
                    <p>Saya terbiasa mengelola catatan, data transaksi, dan dokumen, serta berkoordinasi dengan tim internal maupun vendor. Saat ini saya mencari magang di bidang Administrasi, Operasional, atau Purchasing, dan jadwal kuliah saya dapat disesuaikan ke pembelajaran online selama periode magang.</p>
                </div>
            </div>
            <div class="core-skills">
                <div class="small-label">CORE SKILLS</div>
                <div class="focus-grid">
                    <div><span class="focus-icon">▤</span><div><b>Administration</b><small>Documents, records & reports</small></div></div>
                    <div><span class="focus-icon">▥</span><div><b>Data</b><small>Cleaning, Excel & basic analysis</small></div></div>
                    <div><span class="focus-icon">↗</span><div><b>Operations & Purchasing</b><small>Vendors, approvals & follow-up</small></div></div>
                    <div><span class="focus-icon">✧</span><div><b>Customer Service</b><small>Inquiries, orders & payments</small></div></div>
                </div>
            </div>
            <div class="edu-panel">
                <div class="edu-head">
                    <span class="focus-icon">🎓</span>
                    <div>
                        <div class="small-label">EDUCATION</div>
                        <h3>Where I study</h3>
                    </div>
                    <div class="edu-bunny" aria-hidden="true"><?= bunny() ?></div>
                </div>
                <div class="edu-grid">
                    <article class="edu-item">
                        <span class="edu-date">2025 – sekarang · Lulus 2028 (rencana)</span>
                        <h4>Cakrawala University</h4>
                        <p class="edu-major">S1 Bisnis Digital</p>
                        <div class="tag-row">
                            <?php foreach ($coursework as $c): ?><span><?= e($c) ?></span><?php endforeach; ?>
                        </div>
                        <p class="edu-note">Jadwal kuliah dapat disesuaikan ke pembelajaran online selama magang.</p>
                    </article>
                    <article class="edu-item">
                        <span class="edu-date">2017 – 2020</span>
                        <h4>SMK PB Soedirman 2, Jakarta</h4>
                        <p class="edu-major">Perbankan Syariah</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- EXPERIENCE -->
        <section class="section section-tinted" id="experience">
            <div class="container">
                <div class="section-heading">
                    <span class="section-kicker">EXPERIENCE</span>
                    <h2>Where I've <span>been growing.</span></h2>
                    <p>Pengalaman magang dan kerja, dari yang terbaru.</p>
                </div>
                <div class="timeline">
                    <?php foreach ($experiences as $experience): ?>
                    <div class="tl-item">
                        <span class="tl-dot" aria-hidden="true"></span>
                        <article class="tl-card">
                            <div class="tl-top">
                                <h3><?= e($experience["company"]) ?></h3>
                                <span class="tl-date"><?= e($experience["date"]) ?></span>
                            </div>
                            <div class="tl-role"><?= e($experience["role"]) ?></div>
                            <ul class="tl-list">
                                <?php foreach ($experience["points"] as $point): ?>
                                <li><?= e($point) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="tag-row">
                                <?php foreach ($experience["tags"] as $tag): ?>
                                <span><?= e($tag) ?></span>
                                <?php endforeach; ?>
                            </div>
                            <?php if (!empty($experience["image"]) && has_image($experience["image"])): ?>
                            <figure class="experience-photo">
                                <?= photo($experience["image"], 600, "Dokumentasi " . $experience["company"]) ?>
                                <figcaption>♡ behind the scenes</figcaption>
                            </figure>
                            <?php endif; ?>
                        </article>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="section" id="skills">
            <div class="container">
                <div class="section-heading">
                    <span class="section-kicker">SKILLS & TOOLS</span>
                    <h2>Skills I bring <span>to the table.</span></h2>
                    <p>Kemampuan dan tools yang saya gunakan, lengkap dengan contoh hasil kerjanya.</p>
                </div>
                <div class="skill-groups">
                    <?php foreach ($skillGroups as $group): ?>
                    <?php $shots = existing($group["shots"]); ?>
                    <article class="skill-group<?= $shots ? " has-shots" : "" ?>">
                        <div class="skill-group-info">
                            <div class="skill-group-head"><span class="skill-icon"><?= e($group["icon"]) ?></span><h3><?= e($group["title"]) ?></h3></div>
                            <div class="chip-row">
                                <?php foreach ($group["items"] as $item): ?>
                                <span><?= e($item) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php if ($shots): ?>
                        <div class="skill-shots-grid">
                            <?php foreach ($shots as $shot): ?>
                            <figure class="skill-thumb">
                                <a href="assets/images/<?= e($shot["image"]) ?>" target="_blank" rel="noopener noreferrer"><?= photo($shot["image"], 520, $shot["title"]) ?></a>
                                <figcaption><?= e($shot["title"]) ?></figcaption>
                            </figure>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </article>
                    <?php endforeach; ?>
                </div>
                <div class="soft-skills">
                    <span>SOFT SKILLS</span>
                    <?php foreach ($softSkills as $i => $s): ?>
                        <?php if ($i > 0): ?><i></i><?php endif; ?>
                        <b><?= e($s) ?></b>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- CERTIFICATES -->
        <section class="section container certificates-section" id="certificates">
            <div class="cert-shell">
                <div class="cert-peek" id="certBunny" aria-hidden="true"><?= bunny() ?></div>
                <span class="cert-float cf-1">☁</span>
                <span class="cert-float cf-2">♡</span>
                <span class="cert-float cf-3">✦</span>
                <span class="cert-float cf-4">☁</span>

                <div class="cert-head">
                    <div class="section-heading">
                        <span class="section-kicker">CERTIFICATES</span>
                        <h2>Learning & <span>achievements.</span></h2>
                        <p>Pelatihan dan sertifikasi yang mendukung pengembangan kemampuan saya.</p>
                    </div>
                    <span class="cert-count"><b><?= count($visibleCertificates) ?></b> certificates ✦</span>
                </div>

                <div class="certificates-grid">
                    <?php foreach ($visibleCertificates as $index => $certificate): ?>
                    <article class="certificate-card">
                        <a class="cert-frame" href="assets/images/<?= e($certificate["image"]) ?>" target="_blank" rel="noopener noreferrer" aria-label="Lihat <?= e($certificate["title"]) ?>">
                            <?= photo($certificate["image"], 800, $certificate["title"]) ?>
                            <span class="cert-view">View ↗</span>
                        </a>
                        <div class="certificate-info">
                            <span class="cert-no"><?= e(str_pad($index + 1, 2, "0", STR_PAD_LEFT)) ?></span>
                            <div>
                                <span class="cert-cat"><?= e($certificate["category"]) ?></span>
                                <h3><?= e($certificate["title"]) ?></h3>
                                <span class="cert-meta"><?= e($certificate["meta"]) ?></span>
                            </div>
                        </div>
                    </article>
                    <?php endforeach; ?>
                    <?php if (!$visibleCertificates): ?>
                    <p class="cert-empty">Gambar sertifikat belum ditambahkan ke assets/images ♡</p>
                    <?php endif; ?>
                </div>

            </div>
        </section>

        <!-- PROJECTS -->
        <section class="section section-tinted" id="projects">
            <div class="container">
            <div class="section-heading">
                <span class="section-kicker">SELECTED WORK</span>
                <h2>Some things I've <span>worked on.</span></h2>
                <p data-projects-intro>Proyek pilihan dari perkuliahan, kegiatan, dan pengalaman pribadi.</p>
            </div>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                <?php $imgs = array_values(array_filter($project["images"], "has_image")); ?>
                <article class="project-card">
                    <div class="project-main">
                        <div class="project-visual<?= count($imgs) > 1 ? " multi" : "" ?>">
                            <?php foreach ($imgs as $img): ?>
                            <?= photo($img, count($imgs) > 1 ? 700 : 1100, $project["title"], "project-screenshot") ?>
                            <?php endforeach; ?>
                            <?php if (!$imgs): ?><div class="project-fallback">♡</div><?php endif; ?>
                        </div>
                        <div class="project-content">
                            <div class="project-top">
                                <span class="project-number"><?= e($project["number"]) ?></span>
                                <span class="project-type"><?= e($project["type"]) ?></span>
                            </div>
                            <h3><?= e($project["title"]) ?></h3>
                            <p class="project-intro"><?= e($project["description"]) ?></p>
                            <div class="tag-row">
                                <?php foreach ($project["tags"] as $tag): ?>
                                <span><?= e($tag) ?></span>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                    <?php if (!empty($project["views"])): ?>
                    <div class="views">
                        <div class="small-label">TWO USER PERSPECTIVES</div>
                        <div class="views-grid">
                            <?php foreach ($project["views"] as $view): ?>
                            <?php $shot = first_image($view["images"]); ?>
                            <article class="view-card">
                                <div class="view-head"><span class="focus-icon"><?= e($view["icon"]) ?></span><h4><?= e($view["role"]) ?></h4></div>
                                <?php if ($shot): ?>
                                <a class="view-shot" href="assets/images/<?= e($shot) ?>" target="_blank" rel="noopener noreferrer" aria-label="Buka screenshot <?= e($view["role"]) ?> (tab baru)"><?= photo($shot, 700, "BookHive — tampilan " . $view["role"]) ?></a>
                                <?php endif; ?>
                                <p><?= e($view["text"]) ?></p>
                            </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </article>
                <?php endforeach; ?>
            </div>
            <div class="hop-strip">
                <div class="hop-runner" aria-hidden="true"><div class="hop-flip"><?= bunny() ?></div></div>
                <p>Thanks for stopping by ♡</p>
            </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="section contact-section" id="contact">
            <div class="container">
                <div class="contact-peek" aria-hidden="true"><?= bunny() ?></div>
                <div class="contact-card">
                    <span class="contact-orbit orbit-left">✧</span>
                    <span class="contact-orbit orbit-right">✦</span>
                    <span class="section-kicker">LET'S CONNECT</span>
                    <h2>Let's make something <span>meaningful.</span></h2>
                    <p>Saya sedang mencari kesempatan magang di bidang Administrasi, Operasional, atau Purchasing. Senang berdiskusi dan berkolaborasi.</p>
                    <div class="contact-actions">
                        <a class="button button-primary" href="<?= e($whatsapp) ?>" target="_blank" rel="noopener noreferrer">Chat on WhatsApp <span>↗</span></a>
                        <a class="button button-secondary" href="<?= e($cvHref) ?>" download>Download CV <span>↓</span></a>
                    </div>
                    <div class="contact-meta">
                        <span><?= e($email) ?></span>
                        <span><?= e($location) ?></span>
                        <?php if ($linkedin): ?>
                        <a href="<?= e($linkedin) ?>" target="_blank" rel="noopener noreferrer">LinkedIn ↗</a>
                        <?php endif; ?>
                        <?php if ($instagram): ?>
                        <a href="<?= e($instagram) ?>" target="_blank" rel="noopener noreferrer">Instagram ↗</a>
                        <?php endif; ?>
                    </div>
                </div>
                <section class="recommendations" aria-labelledby="recommendations-title">
                    <div class="section-heading">
                        <span class="section-kicker">RECOMMENDATIONS</span>
                        <h2 id="recommendations-title">A few kind words.</h2>
                        <p>Feedback shared on LinkedIn by my internship mentor and project teammate.</p>
                    </div>
                    <div class="recommendation-grid">
                        <article class="recommendation-card">
                            <div class="recommendation-top"><span class="recommendation-avatar">LT</span><div><strong>Lanang Tirta Bumi</strong><small>Community Engagement and Event Activation Lead · Citiasia Inc.</small><small>Internship mentor</small></div><span class="recommendation-mark">“</span></div>
                            <blockquote>“Shifa demonstrated a positive attitude, a strong willingness to learn, and a collaborative approach to her work. She was receptive to feedback and eager to improve and contribute.”</blockquote>
                            <span class="recommendation-source">LinkedIn recommendation · October 2026</span>
                        </article>
                        <article class="recommendation-card">
                            <div class="recommendation-top"><span class="recommendation-avatar">RR</span><div><strong>Rangga Radhitya Putrawan</strong><small>E-Commerce Staff · PT. Raksasa Bisnis Indonesia</small><small>University project teammate</small></div><span class="recommendation-mark">“</span></div>
                            <blockquote>“She demonstrated strong teamwork, good communication skills, and a sense of responsibility in completing tasks. She is collaborative, detail-oriented, and willing to contribute ideas.”</blockquote>
                            <span class="recommendation-source">LinkedIn recommendation · October 2026</span>
                        </article>
                    </div>
                </section>
            </div>
        </section>

    </main>

    <footer class="footer container">
        <a class="brand" href="#home">shifa<span>.</span><i>✦</i></a>
        <p><span class="footer-bunny" aria-hidden="true"><?= bunny() ?></span>Made with curiosity and a little bit of blue <span>♡</span></p>
        <span>© <?= date("Y") ?> <?= e($name) ?></span>
    </footer>

    <!-- Mochi, maskot kelinci -->
    <div class="mascot" id="mascot">
        <div class="mascot-bubble" id="mascotBubble" role="status" aria-live="polite"></div>
        <button type="button" class="mascot-body" id="mascotBody" aria-label="Mochi si kelinci. Klik untuk menyapa">
            <?= bunny() ?>
            <svg class="nightcap" viewBox="0 0 60 40" aria-hidden="true"><path d="M5 34Q8 6 42 8Q40 22 55 34Z" fill="#4d91c7"/><rect x="3" y="31" width="54" height="7" rx="3.5" fill="#f5b9d2"/><circle cx="44" cy="8" r="5" fill="#fff"/></svg>
            <span class="mascot-zzz" aria-hidden="true"><span>z</span><span>z</span><span>z</span></span>
        </button>
        <button type="button" class="mascot-carrot" id="mascotCarrot" aria-label="Beri wortel untuk Mochi">
            <svg viewBox="0 0 24 32" aria-hidden="true"><path d="M12 6c4 0 7 3 6.5 7L13 30c-.4 1.2-1.6 1.2-2 0L5.5 13C5 9 8 6 12 6z" fill="#ff9d5c"/><path d="M12 6C10 3 8 2 6 3M12 6c0-3 1-5 3-6M12 6c2-2 5-3 7-2" stroke="#6bcf9d" stroke-width="2.2" stroke-linecap="round" fill="none"/><path d="M9 14h4M10 20h3" stroke="#f07f3c" stroke-width="1.5" stroke-linecap="round"/></svg>
            <span class="carrot-count" id="carrotCount">0</span>
        </button>
    </div>

    <button class="back-to-top" id="backToTop" aria-label="Kembali ke atas">↑</button>
    <script src="script.js?v=20261028-clouds-en5"></script>
</body>
</html>
