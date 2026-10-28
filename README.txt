SHIFA MAULIDA — PORTFOLIO WEBSITE

Teknologi: PHP native, HTML, CSS, JavaScript (XAMPP Apache). Tanpa database.

CARA MENJALANKAN
1. Salin folder ke C:\xampp\htdocs\shifa_portfolio_Update\
2. Isi folder:
   index.php, style.css, script.js
   favicon.svg, favicon-32.png, apple-touch-icon.png, og-image.jpg
   cursor/carrot.svg, cursor/carrot-pointer.svg
   CV_Shifa_Maulida_new_2026.pdf
   assets/images/   (semua gambar kamu)
3. Start Apache di XAMPP, buka http://localhost/shifa_portfolio_Update/
4. Kalau tampilan belum berubah, tekan Ctrl + F5.

CATATAN
- Semua teks ada di bagian DATA di atas index.php (pengalaman, proyek, skills, sertifikat).
- Tombol Download CV hanya ada dua: di hero dan di Contact (tidak ada preview CV). Pastikan file PDF CV ada di folder yang sama dengan index.php.
- Kursor wortel memakai file di folder cursor/ (hanya aktif di perangkat dengan mouse).
- BookHive: untuk menampilkan perspektif Customer dan Administrator, simpan screenshot di assets/images/ dengan nama
  BookHive_Customer.png dan BookHive_Admin.png (boleh .jpg). Kalau belum ada, bagian itu tampil tanpa gambar.
- Gambar besar otomatis dikecilkan. Versi kecilnya disimpan di assets/images/_opt/
  (dibuat sendiri saat halaman pertama kali dibuka; butuh PHP GD, aktif bawaan di XAMPP).
  Gambar asli tidak diubah dan tetap dipakai saat gambar diklik. Hapus folder _opt kalau mau dibuat ulang.
- Preview link (WhatsApp/LinkedIn): setelah website online, isi $siteUrl di index.php
  dengan alamat websitenya, mis. "https://nama-kamu.netlify.app".
- Jika sebuah gambar belum ada, bagian itu otomatis disembunyikan / diganti ilustrasi.

MOCHI SI KELINCI (fitur interaktif)
- Maskot kecil di pojok kiri bawah. Klik Mochi untuk menyapa; klik tombol wortel untuk memberi makan (ada hitungan wortel).
- Mochi berkomentar saat kamu masuk ke tiap bagian, menyapa sesuai jam (pagi/siang/sore/malam), dan tertidur kalau didiamkan 25 detik.
- Mata semua kelinci mengikuti kursor. Klik di mana saja akan memunculkan hati kecil.
- Kelinci kecil berlari di bar atas mengikuti scroll; di akhir halaman Mochi mengucapkan terima kasih.
- Ganti nama atau kalimatnya di script.js (cari MASCOT_NAME dan daftar "chatter").
- Untuk mematikan Mochi: hapus blok <div class="mascot"> di index.php.
- Animasi otomatis berhenti di perangkat yang memakai pengaturan "reduce motion".

MODE MALAM & RINGKASAN HERO
- Tombol bulan/matahari di menu atas mengganti tema. Pilihan disimpan di browser. Di mode malam ada bintang berkelip dan Mochi memakai topi tidur.
- Ringkasan singkat di bawah deskripsi hero (Jakarta, Open for internship, Excel, Admin/Ops/Purchasing): ubah di index.php, cari class "hero-summary".
- Tombol bahasa ID/EN belum ada (teksnya banyak, perlu dikerjakan tersendiri).

DAFTAR GAMBAR (assets/images/, nama harus sama persis)
Profil     : profile.jpg
Experience : Internship_Citiasia_Experience.jpeg, Berkah_Group_Experince.jpg
Projects   : Project_WebDevelopment_Projects.png, BookHive_Customer.png, BookHive_Admin.png,
             Webinar_CitiAsia_Projects.png,
             MyBusiness1.jpg, MyBusiness2_Projects.jpg, MyBusiness3_Projects.jpg
Skills     : Xlookup_Excel_Skills.jpg, MultiIF_Excel_Skills.jpg, Worksheet_Excel_Skills.jpg,
             GeneralLedger_Excel_Skills.jpg, Dashboard_Excel_Skills.jpg,
             Dashboard_PowerBI1_Skills.png, Dashboard_PowerBI_2_Skills.png,
             Competitor_Analysis_Skills.jpg, Business_strategy_Skills.jpg
Sertifikat : Excel_Certificates.jpg, DQlab_Certificates.jpg, DQlab_Certificates_2.jpg,
             English_Certificate.jpg, Mekari_Certificates.jpg,
             Internship_BerkahGroup_Certificates.jpg, Internship_CitiAsia_Certificates.jpg
