# Nurul Huda

Aplikasi manajemen jamaah dan presensi berbasis RFID untuk Masjid Nurul Huda, dilengkapi dengan fitur **Mentari Pagi Spinner** untuk pengundian hadiah jamaah subuh.

## Tentang Aplikasi

Nurul Huda adalah sistem internal masjid yang membantu pengurus dalam:

- **Manajemen Data Jamaah** — pencatatan jamaah lengkap dengan kartu RFID, kontak, dan alamat.
- **Presensi Sholat Berjamaah** — pencatatan kehadiran lima waktu sholat (subuh, dzuhur, ashar, maghrib, isya) melalui scan kartu RFID.
- **Mentari Pagi Spinner** — undian interaktif untuk jamaah sholat subuh dengan animasi pemilihan pemenang dan riwayat hadiah.
- **Panel Admin** — dashboard berbasis Filament untuk pengelolaan seluruh data oleh admin masjid.

## Tech Stack

- **PHP 8.4** + **Laravel 13**
- **Filament 5** — admin panel & resource management
- **Livewire 4** — komponen interaktif (spinner)
- **Tailwind CSS 4** — styling
- **Vite 8** — frontend bundling
- **Pest 4** — testing
- **SQLite** (default) — database

## Struktur Domain

| Model            | Deskripsi                                                              |
| ---------------- | ---------------------------------------------------------------------- |
| `Jamaah`         | Data jamaah masjid (RFID, nama, kontak, tanggal lahir, alamat).        |
| `Attendance`     | Catatan kehadiran sholat (waktu sholat, kode RFID, waktu scan).        |
| `WinnerHistory`  | Riwayat pemenang undian Mentari Pagi (hadiah, jamaah, waktu undian).   |
| `User`           | Akun admin pengelola panel.                                            |

## Halaman Utama

- `/admin` — Filament admin panel (resource Jamaah, Attendance, Winner History, User).
- `/admin/mentari-pagi-spinner` — halaman spinner di dalam admin panel.
- `/spinner` — halaman publik spinner (Livewire) untuk ditampilkan di layar masjid.

## Instalasi

```bash
# Clone & masuk ke direktori
git clone <repo-url> nurul-huda
cd nurul-huda

# Install dependencies & setup awal
composer setup
```

Perintah `composer setup` akan menyalin `.env`, generate key, menjalankan migrasi, dan build asset.

Buat user admin pertama:

```bash
php artisan make:filament-user
```

## Menjalankan Aplikasi

Jalankan seluruh service development sekaligus (server, queue, log, vite):

```bash
composer dev
```

Atau secara terpisah:

```bash
php artisan serve
npm run dev
```

## Testing

```bash
php artisan test --compact
```

## Code Style

Format kode mengikuti konvensi proyek menggunakan Laravel Pint:

```bash
vendor/bin/pint --dirty
```

## Struktur Direktori Penting

```
app/
├── Filament/
│   ├── Pages/MentariPagiSpinnerPage.php   # spinner di admin panel
│   └── Resources/                          # Jamaahs, Attendances, WinnerHistories, Users
├── Livewire/MentariPagiSpinner.php         # komponen spinner publik
└── Models/                                 # Jamaah, Attendance, WinnerHistory, User
database/
├── migrations/                             # skema jamaah, attendance, winner_history
├── factories/
└── seeders/
routes/web.php                              # / dan /spinner
```

## Lisensi

Proyek internal Masjid Nurul Huda. Framework Laravel berlisensi [MIT](https://opensource.org/licenses/MIT).
