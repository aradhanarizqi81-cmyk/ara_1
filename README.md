# ZUCOMP Website — Panduan Deploy

## Struktur File
```
zucomp/
├── index.html      ← Halaman utama (semua section)
├── contact.php     ← Backend form kontak
└── logs/           ← Auto-dibuat saat form pertama kali diisi
    └── pesan.log
```

## Yang Perlu Diganti Sebelum Deploy

### index.html — Cari dan ganti:
| Placeholder | Ganti dengan |
|---|---|
| `6281234567890` | Nomor WA ZUCOMP (tanpa 0, pakai 62) |
| `0812-3456-7890` | Nomor display di website |
| `Jl. [Nama Jalan], No. [XX]` | Alamat lengkap toko |
| Google Maps `src="..."` | Embed link Maps toko ZUCOMP |

### contact.php — Baris konfigurasi:
```php
$config = [
    'email_tujuan' => 'zucomp@email.com',  // ← email kamu
    'wa_number'    => '6281234567890',      // ← nomor WA
];
```

## Cara Deploy ke Hosting PHP

1. Upload semua file ke folder `public_html/` di hosting
2. Pastikan PHP versi 7.4+
3. Folder `logs/` akan otomatis dibuat saat form pertama diisi
4. Ganti semua placeholder sesuai tabel di atas

## Cara Deploy ke Netlify/Vercel (Tanpa PHP)

Jika hosting static (tidak support PHP):
- Form akan otomatis fallback ke WhatsApp langsung
- Tidak perlu contact.php
- Upload hanya index.html

## Google Maps Embed
1. Buka maps.google.com
2. Cari lokasi toko ZUCOMP
3. Klik Share → Embed a map → Copy HTML
4. Ambil bagian `src="..."` → paste ke index.html

## Nomor WA Format
- Format benar: `6281234567890` (62 = kode negara Indonesia)
- Dari nomor: 081234567890 → hilangkan 0 depan, tambah 62
- Jadi: `6281234567890`
