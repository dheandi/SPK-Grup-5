# SPK-Grup-5

Proyek ini merupakan implementasi Sistem Pendukung Keputusan (SPK) Pemilihan HP Gaming Terbaik Masa Kini menggunakan metode Weighted Product. Dibuat untuk memenuhi tugas kelompok dalam mata kuliah Sistem Pendukung Keputusan.

## 📂 Clone Project

Untuk menyalin repository ini ke komputer lokal, jalankan perintah berikut di terminal:

```bash
git clone https://github.com/dheandi/SPK-Grup-5.git
cd SPK-Grup-5
```

## ⚙️ Instalasi & Setup (Laravel)

Jika ini merupakan project Laravel, ikuti langkah-langkah berikut:

### 1. Install Dependency
```bash
composer install
```

### 2. Salin File Environment
```bash
cp .env.example .env
```

### 3. Generate Key Aplikasi
```bash
php artisan key:generate
```

### 4. Setup Database
- Buat database baru di MySQL.
- Edit konfigurasi database di file `.env` sesuai dengan setting MySQL kamu:
  ```env
  DB_DATABASE=nama_database
  DB_USERNAME=root
  DB_PASSWORD=
  ```

### 5. Jalankan Migrasi
```bash
php artisan migrate
```

### 6. Jalankan Server Lokal
```bash
php artisan serve
```

Akses melalui browser: [http://localhost:8000](http://localhost:8000)

## ✅ Fitur Utama
- Penilaian dengan metode SMART
- Input data alternatif dan kriteria
- Perhitungan nilai akhir dan rekomendasi

## 👥 Kontributor
- Dheandi
- [Tambahkan nama anggota lainnya jika ada]

---

Jika kamu mengalami kendala saat menjalankan project, silakan buka Issue atau hubungi salah satu kontributor.
