# Kartu Profil Personal Modern

## 📋 Deskripsi Proyek

Sebuah website personal yang sederhana namun elegan, menampilkan profil diri dalam format "kartu" yang ringkas. Desain ini menggunakan gradasi warna yang lembut sebagai latar belakang untuk menciptakan tampilan yang hangat dan modern. Proyek ini dibuat dengan fokus pada tipografi yang mudah dibaca dan navigasi yang intuitif, menjadikannya pilihan ideal untuk menampilkan informasi dasar dan tautan media sosial secara profesional.

## ✨ Fitur Utama

- **Tampilan kartu profil yang bersih**: Memberikan kesan minimalis dan terorganisir
- **Gradasi warna latar belakang**: Latar belakang dinamis yang menambah sentuhan modern pada desain
- **Tautan ikon ke media sosial**: Memudahkan pengunjung untuk terhubung ke platform media sosial Anda
- **Tombol email yang bisa diklik**: Memungkinkan komunikasi langsung dengan satu klik
- **Responsive design**: Tampil optimal di desktop, tablet, dan mobile
- **Animasi smooth**: Hover effects dan transitions yang halus

## 🛠️ Teknologi yang Digunakan

- **HTML5**: Struktur dasar halaman web
- **CSS3**: Styling dan desain, termasuk gradasi warna dan penataan layout
- **Laravel Blade**: Template engine untuk rendering halaman
- **Font Awesome**: Library ikon untuk media sosial
- **Google Fonts**: Typography yang modern dan elegan

## 🚀 Demo

Kunjungi website live: [Kartu Profil Personal](https://github.com/XxMeguminxX)

## 📱 Preview

![Preview Website](https://via.placeholder.com/800x600/667eea/ffffff?text=Preview+Coming+Soon)

## 📁 Struktur Project

```
aboutme/
├── public/
│   ├── css/
│   │   └── style.css          # Styling dan desain utama
│   ├── images/
│   │   └── ig.jpg            # Foto profil
│   └── index.php             # Entry point
├── resources/
│   └── views/
│       └── aboutme.blade.php # Template utama
└── README.md                 # Dokumentasi project
```

## 🎨 Kustomisasi

### Mengubah Informasi Profil

Edit file `resources/views/aboutme.blade.php`:

```html
<!-- Ganti dengan informasi Anda -->
<h1>Nama Lengkap Anda</h1>
<p class="bio">"Deskripsi singkat tentang diri Anda"</p>

<!-- Update link sosial media -->
<a href="https://wa.me/628xxxxxxxxx">WhatsApp</a>
<a href="https://github.com/username">GitHub</a>
```

### Mengubah Warna Gradasi

Edit file `public/css/style.css`:

```css
/* OPSI 1: Ultra Smooth Gradient (Current) */
background:
    radial-gradient(circle at 20% 50%, rgba(R, G, B, 0.25) 0%, ...),
    linear-gradient(135deg, #warna1 0%, #warna2 100%);
```

### Mengubah Foto Profil

Ganti file `public/images/ig.jpg` dengan foto Anda sendiri.

## 🏃‍♂️ Cara Menjalankan

### Prerequisites

- PHP 8.0 atau lebih tinggi
- Composer
- Web server (Apache/Nginx) atau Laravel development server

### Instalasi

1. **Clone repository:**
   ```bash
   git clone https://github.com/XxMeguminxX/aboutme.git
   cd aboutme
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Setup environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Jalankan server:**
   ```bash
   php artisan serve
   ```

5. **Akses website:**
   Kunjungi `http://localhost:8000`

## 📝 Cara Menggunakan

1. **Kloning repositori ini:**
   ```bash
   git clone https://github.com/XxMeguminxX/aboutme.git
   cd aboutme
   ```

2. **Modifikasi file:**
   - `resources/views/aboutme.blade.php` - Ubah informasi profil
   - `public/css/style.css` - Kustomisasi tampilan
   - `public/images/ig.jpg` - Ganti foto profil

3. **Deploy ke hosting Anda**

## 🎯 Fitur Tambahan

- **10+ Opsi Gradasi Warna**: Pilih dari berbagai tema warna yang sudah disiapkan
- **Fully Responsive**: Tampil optimal di semua device
- **SEO Friendly**: Struktur HTML yang optimal untuk search engine
- **Fast Loading**: Optimized untuk performa maksimal
- **Cross-browser Compatible**: Mendukung semua browser modern

## 🤝 Kontribusi

Kontribusi sangat diterima! Silakan:

1. Fork project ini
2. Buat branch fitur baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📄 Lisensi

Project ini menggunakan lisensi MIT. Lihat file `LICENSE` untuk detail lebih lanjut.

## 📞 Kontak

**Erik Wahyu Saputra**
- Email: saputraerik042@gmail.com
- WhatsApp: +62 857-3918-8906
- GitHub: [@XxMeguminxX](https://github.com/XxMeguminxX)
- Instagram: [@erikwahyusaputraa](https://www.instagram.com/erikwahyusaputraa/)
- Facebook: [Erik Wahyu Saputra](https://www.facebook.com/erikwahyu.saputra.547)

## 🙏 Acknowledgments

- [Font Awesome](https://fontawesome.com/) - Library ikon yang digunakan
- [Google Fonts](https://fonts.google.com/) - Typography yang elegan
- [Laravel](https://laravel.com/) - Framework PHP yang powerful
- [Unsplash](https://unsplash.com/) - Inspirasi desain

---

⭐ **Jika Anda menyukai project ini, jangan lupa untuk memberikan star!**

![GitHub stars](https://img.shields.io/github/stars/XxMeguminxX/aboutme?style=social)
![GitHub forks](https://img.shields.io/github/forks/XxMeguminxX/aboutme?style=social)