# Product Requirements Document (PRD)
## Sistem Presensi Jamaah Berbasis RFID — Masjid Nurul Huda
**Versi:** 1.0 | **Tanggal:** 30 April 2026 | **Status:** Draft

### 1. Pendahuluan
#### 1.1 Latar Belakang
Manajemen kehadiran jamaah secara tradisional manual rentan terhadap human error. Penerapan RFID memungkinkan otomatisasi pencatatan dengan akurasi tinggi.

#### 1.3 Ruang Lingkup Produk
SIPRES-NH adalah aplikasi web untuk:
- Manajemen data jamaah (CRUD)
- Monitoring presensi sholat 5 waktu
- Monitoring kegiatan Mentari Pagi
- Undian hadiah (spin wheel) untuk Mentari Pagi
- Pelaporan dan visualisasi data

### 5. Functional Requirements
- **FR-01: Autentikasi** (Login, Role-based)
- **FR-02: Manajemen Jamaah** (CRUD, Bulk import, Filtering)
- **FR-03: Presensi Sholat** (RFID input, classification by prayer time, real-time dashboard)
- **FR-04: Mentari Pagi** (Event detection, manual fallback)
- **FR-05: Undian/Spin Wheel** (Visual spin wheel, fair randomization, winner history)
- **FR-06: Dashboard & Pelaporan** (Visualizations, Export PDF/CSV)
- **FR-07: Integrasi Spreadsheet** (Backend storage)

### 10. Prioritasi Fitur (MoSCoW)
- **Must Have:** Auth, CRUD Jamaah, Presensi 5 waktu, Mentari Pagi, Spreadsheet Integration.
- **Should Have:** Spin Wheel, Dashboard & Export.
- **Could Have:** Advanced filtering, WA notifications, Leaderboard.
