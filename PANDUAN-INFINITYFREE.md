#  Panduan Deploy ke InfinityFree (GRATIS)

##  Tentang InfinityFree

**InfinityFree** adalah hosting gratis dengan fitur:
- ✅ Unlimited Bandwidth
- ✅ 5 GB Disk Space
- ✅ Free Subdomain (infinityfreeapp.com)
- ✅ MySQL Database
- ✅ PHP 8.x
- ✅ No Ads
- ✅ SSL Support

---

##  Persiapan

### 1. Daftar di InfinityFree
1. Buka: **https://www.infinityfree.com**
2. Klik **"Register"**
3. Isi email & password
4. Verify email Anda

### 2. Buat Akun Hosting
1. Login ke InfinityFree
2. Klik **"Create Account"**
3. Pilih **Subdomain** (gratis):
   - Contoh: `ramadhan-berkah.infinityfreeapp.com`
4. Tunggu beberapa menit sampai akun aktif

---

##  Upload File ke InfinityFree

###  Cara 1: Via File Manager (TERMUDAH)

#### Langkah 1: Login ke Control Panel
1. Buka: **https://app.infinityfree.com**
2. Pilih akun hosting Anda
3. Klik **"Control Panel"**
4. Buka **"File Manager"** (atau "Online File Manager")

#### Langkah 2: Upload File
1. Masuk ke folder **`htdocs`**
2. **Hapus semua file default** di `htdocs/`
3. Buat struktur folder seperti ini:

```
htdocs/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/          ← Isi ini dipindah ke ROOT
│   ├── css/
│   ├── js/
│   ├── images/
│   └── index.php
├── resources/
├── routes/
├── vendor/
├── storage/
├── .env
└── artisan
```

#### Langkah 3: Pindahkan File Public
**PENTING!** Pindahkan **SEMUA ISI** folder `public/` ke **ROOT** (`htdocs/`)

```bash
# Struktur yang benar:
htdocs/
├── app/
├── bootstrap/
├── config/
├── database/
├── resources/
├── routes/
├── storage/
├── vendor/
├── css/              ← Dari public/
├── js/               ← Dari public/
├── images/           ← Dari public/
├── .htaccess         ← Dari public/
├── index.php         ← Dari public/ (EDIT NANTI)
├── favicon.ico       ← Dari public/
├── .env
└── artisan
```

---

###  Cara 2: Via FTP (FileZilla)

#### Langkah 1: Install FileZilla
1. Download: **https://filezilla-project.org**
2. Install dan buka FileZilla

#### Langkah 2: Connect ke InfinityFree
Dapatkan info FTP dari Control Panel:
- **Host**: `ftpupload.net` atau `files.000webhost.com`
- **Username**: `your-username`
- **Password**: `your-ftp-password`
- **Port**: `21`

#### Langkah 3: Upload
1. Connect ke server
2. Masuk ke folder `htdocs/`
3. Upload semua file dari komputer Anda

---

##  Edit File index.php

Setelah file ter-upload, edit file **`htdocs/index.php`**:

**Baris ~22:**
```php
// SEBELUM:
require __DIR__.'/../vendor/autoload.php';

// SESUDAH:
require __DIR__.'/vendor/autoload.php';
```

**Baris ~37:**
```php
// SEBELUM:
$app = require_once __DIR__.'/../bootstrap/app.php';

// SESUDAH:
$app = require_once __DIR__.'/bootstrap/app.php';
```

---

##  Setup Database

###  Langkah 1: Buat Database
1. Buka **Control Panel** → **MySQL Databases**
2. Buat database baru
3. Catat informasi berikut:
   ```
   Database Host: sql200.infinityfree.com
   Database Name: if0_XXXXXXX_database_name
   Username: if0_XXXXXXX
   Password: (yang Anda set)
   ```

###  Langkah 2: Import Database (Jika Ada)
Jika ada file `.sql` untuk diimport:
1. Buka **phpMyAdmin** dari Control Panel
2. Login dengan database credentials
3. Klik **Import**
4. Upload file `.sql`

**Untuk project ini:** Tidak perlu import database (tidak pakai database).

---

##  Konfigurasi File .env

Buat atau edit file **`.env`** di root folder (`htdocs/`):

```env
APP_NAME="Ramadhan Berkah"
APP_ENV=production
APP_KEY=base64:GENERATE_KEY_NANTI
APP_DEBUG=false
APP_URL=http://ramadhan-berkah.infinityfreeapp.com

APP_LOCALE=id
APP_FALLBACK_LOCALE=id

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

# Database InfinityFree
DB_CONNECTION=mysql
DB_HOST=sql200.infinityfree.com
DB_PORT=3306
DB_DATABASE=if0_XXXXXXX_database_name
DB_USERNAME=if0_XXXXXXX
DB_PASSWORD=your_password

# Session & Cache (File-based untuk InfinityFree)
SESSION_DRIVER=file
SESSION_LIFETIME=120

FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
CACHE_STORE=file

# Mail (Opsional)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@ramadhanberkah.com"
MAIL_FROM_NAME="${APP_NAME}"
```

**GANTI yang bertanda:**
- `DB_DATABASE` → Database name dari InfinityFree
- `DB_USERNAME` → Username dari InfinityFree
- `DB_PASSWORD` → Password database Anda
- `APP_URL` → URL website Anda

---

##  Generate App Key

Karena tidak bisa akses terminal di InfinityFree, generate key secara lokal:

### Di Komputer Lokal:
```bash
cd /Users/ridonmartunus/agus-website

# Generate key
php artisan key:generate

# Copy key yang dihasilkan
# Contoh: base64:abc123xyz...
```

### Upload Key ke InfinityFree:
1. Edit file `.env` di InfinityFree
2. Paste key ke `APP_KEY=`
3. Save

**ATAU** cara manual:

Buat file `generate-key.php` di root folder:
```php
<?php
echo 'APP_KEY=base64:' . base64_encode(random_bytes(32));
?>
```

1. Buka: `http://ramadhan-berkah.infinityfreeapp.com/generate-key.php`
2. Copy key yang ditampilkan
3. Paste ke `.env` di `APP_KEY=`
4. **Hapus file `generate-key.php`** setelah selesai!

---

##  Set Permissions

InfinityFree biasanya sudah set permission dengan benar. Tapi jika ada error:

1. Klik kanan folder di File Manager
2. **Permissions** atau **CHMOD**
3. Set:
   - `storage/` → **755** atau **777**
   - `bootstrap/cache/` → **755**

---

##  Test Website

Buka browser dan kunjungi:
```
http://ramadhan-berkah.infinityfreeapp.com
```

**Jika muncul error:**
1. Check `storage/logs/laravel.log`
2. Pastikan `.env` sudah benar
3. Pastikan `index.php` sudah diedit
4. Clear cache browser (Ctrl+Shift+R)

---

##  Checklist Deployment

### Pre-Upload:
- [ ] Generate APP_KEY lokal
- [ ] Edit `index.php` (ubah 2 baris path)
- [ ] Siapkan file `.env` dengan konfigurasi benar

### Upload:
- [ ] Upload semua file ke `htdocs/`
- [ ] Pindahkan isi folder `public/` ke root
- [ ] Edit `index.php` di server
- [ ] Upload/edit `.env` di server

### Database:
- [ ] Buat database di InfinityFree
- [ ] Catat credentials database
- [ ] Update `.env` dengan database credentials

### Post-Upload:
- [ ] Set APP_KEY di `.env`
- [ ] Set APP_URL di `.env`
- [ ] Set permissions folder storage (755/777)
- [ ] Test website
- [ ] Check error log jika ada masalah

---

##  Troubleshooting

###  Error: "500 Internal Server Error"
```
1. Check file: storage/logs/laravel.log
2. Pastikan APP_KEY sudah di-set
3. Pastikan index.php sudah diedit
4. Check permissions folder storage/
```

###  Error: "Class not found"
```
1. Pastikan folder vendor/ sudah ter-upload
2. Upload ulang folder vendor/
```

###  Error: "Database connection failed"
```
1. Check credentials database di .env
2. Pastikan database sudah dibuat
3. Check DB_HOST: sql200.infinityfree.com
```

###  Error: "403 Forbidden"
```
1. Check file index.php ada di root
2. Check permissions (harus 644 untuk file)
3. Check .htaccess ada di root
```

###  CSS/JS Tidak Muncul
```
1. Check path di .htaccess
2. Clear browser cache (Ctrl+Shift+R)
3. Pastikan file css/js ada di root
```

---

##  Custom Domain (Opsional)

Jika punya domain sendiri:
1. Beli domain (.com/.id)
2. Point DNS ke InfinityFree:
   ```
   NS1: ns1.infinityfree.com
   NS2: ns2.infinityfree.com
   ```
3. Tambah domain di Control Panel
4. Tunggu propagate (24-48 jam)

---

##  Limitasi InfinityFree

-  ❌ Tidak ada SSH/Terminal access
-  ❌ Tidak bisa install Composer packages di server
-  ❌ Tidak ada Artisan CLI
-  ❌ 5 GB storage limit
-  ⚠️ Harus aktifkan akun setiap 30 hari
-  ⚠️ Tidak support Laravel Horizon/Queue workers

**Solusi:**
- Install Composer di lokal, upload folder `vendor/`
- Generate key di lokal, paste ke server
- Gunakan file-based session & cache

---

##  Tips

✅ **Selalu backup** file `.env` dan database
✅ **Jangan commit** `.env` ke GitHub (kecuali `.env.example`)
✅ **Test di lokal** dulu sebelum upload
✅ **Gunakan FileZilla** untuk upload file besar
✅ **Check error log** jika ada masalah

---

##  Links Penting

- InfinityFree: https://www.infinityfree.com
- Control Panel: https://app.infinityfree.com
- Support Forum: https://forum.infinityfree.com
- Knowledge Base: https://infinityfree.net/support

---

**Semoga berhasil! 🚀**
