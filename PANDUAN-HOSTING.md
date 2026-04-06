#  Panduan Hosting Website Ramadhan Berkah

##  File Siap Deploy

File zip sudah dibuat: **ramadhan-website-deploy.zip**

Lokasi file: `/Users/ridonmartunus/ramadhan-website-deploy.zip`

---

##  CARA DEPLOY - 3 Opsi

### **Opsi 1: Shared Hosting (cPanel) - TERMUDAH**

#### Langkah 1: Beli Hosting & Domain
**Rekomendasi Provider:**
- **Niagahoster** - Mulai Rp 15.000/bulan
- **Hostinger** - Mulai Rp 29.000/bulan  
- **IDCloudHost** - Mulai Rp 20.000/bulan
- **Rumahweb** - Mulai Rp 12.000/bulan

**Domain:** `.com` atau `.id` (Rp 100.000-200.000/tahun)

#### Langkah 2: Upload ke cPanel
1. Login ke **cPanel** hosting Anda
2. Buka **File Manager**
3. Masuk ke folder **`public_html/`**
4. Upload file **`ramadhan-website-deploy.zip`**
5. Extract file zip di folder `public_html/`

#### Langkah 3: Pindahkan File Public
**PENTING!** Pindahkan **ISI** folder `public/` ke **ROOT** (`public_html/`)

```bash
# Struktur awal:
public_html/
├── app/
├── public/
│   ├── css/
│   ├── js/
│   ├── images/
│   └── index.php    ← INI YANG PENTING
└── vendor/

# Struktur yang benar:
public_html/
├── app/
├── css/
├── js/
├── images/
├── index.php        ← PINDAHKAN KE ROOT
└── vendor/
```

**Caranya:**
1. Buka folder `public_html/agus-website/public/`
2. Select semua file di dalam folder `public/`
3. Move/Cut ke folder `public_html/` (root)
4. Hapus folder `public/` yang sudah kosong

#### Langkah 4: Edit File index.php
Edit file **`public_html/index.php`**:

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

#### Langkah 5: Buat Database
1. Di cPanel, buka **MySQL Databases**
2. Buat database baru: `ramadhan_db`
3. Buat user: `ramadhan_user` dengan password
4. Assign user ke database dengan **ALL PRIVILEGES**

#### Langkah 6: Konfigurasi .env
Rename file `.env.example` menjadi `.env` di root folder, lalu edit:

```env
APP_NAME="Ramadhan Berkah"
APP_ENV=production
APP_KEY=base64:GENERATE_KEY_DISINI  # Generate dengan php artisan key:generate
APP_DEBUG=false
APP_URL=https://domainanda.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_DATABASE=ramadhan_db
DB_USERNAME=ramadhan_user
DB_PASSWORD=password_anda

FILESYSTEM_DISK=local
```

#### Langkah 7: Generate App Key
Buka **Terminal** di cPanel atau via SSH:
```bash
php artisan key:generate
```

#### Langkah 8: Set Permission
```bash
chmod -R 755 storage bootstrap/cache
chmod -R 777 storage
```

#### Langkah 9: Install SSL (HTTPS)
1. Di cPanel, buka **SSL/TLS Status**
2. Pilih domain Anda
3. Klik **Run AutoSSL**
4. Tunggu beberapa menit

#### Langkah 10: Test Website
Buka browser dan kunjungi: **https://domainanda.com**

---

### **Opsi 2: VPS (DigitalOcean/Vultr) - LEBIH FLEKSIBEL**

#### Langkah 1: Buat VPS
- **DigitalOcean**: $6/bulan
- **Vultr**: $6/bulan
- **AWS EC2**: Free tier 1 tahun

#### Langkah 2: Connect via SSH
```bash
ssh root@IP_SERVER_ANDA
```

#### Langkah 3: Install Dependencies
```bash
# Update sistem
apt update && apt upgrade -y

# Install PHP 8.2 + extensions
apt install php8.2 php8.2-cli php8.2-fpm php8.2-mysql \
php8.2-xml php8.2-mbstring php8.2-curl php8.2-zip unzip -y

# Install Composer
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

# Install Nginx
apt install nginx -y

# Install MySQL
apt install mysql-server -y
```

#### Langkah 4: Upload Project
```bash
# Upload zip file via SCP
scp ramadhan-website-deploy.zip root@IP_SERVER:/var/www/

# Extract
cd /var/www
unzip ramadhan-website-deploy.zip
mv agus-website ramadhan-berkah
cd ramadhan-berkah
```

#### Langkah 5: Setup Project
```bash
# Copy .env
cp .env.example .env

# Edit .env
nano .env

# Install dependencies
composer install --no-dev --optimize-autoloader

# Generate key
php artisan key:generate

# Set permission
chown -R www-data:www-data /var/www/ramadhan-berkah
chmod -R 755 storage bootstrap/cache
```

#### Langkah 6: Setup Nginx
```bash
nano /etc/nginx/sites-available/ramadhan-berkah
```

**Paste konfigurasi:**
```nginx
server {
    listen 80;
    server_name domainanda.com www.domainanda.com;
    root /var/www/ramadhan-berkah/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

**Aktifkan site:**
```bash
ln -s /etc/nginx/sites-available/ramadhan-berkah /etc/nginx/sites-enabled/
nginx -t
systemctl restart nginx
```

#### Langkah 7: Setup SSL Gratis
```bash
apt install certbot python3-certbot-nginx -y
certbot --nginx -d domainanda.com -d www.domainanda.com
```

---

### **Opsi 3: Hosting Gratis (Testing)**

#### Railway.app (Paling Mudah)
1. Daftar: https://railway.app
2. Connect GitHub repository
3. Deploy otomatis!

#### Render.com
1. Daftar: https://render.com
2. Buat new Web Service
3. Connect GitHub
4. Deploy!

---

##  CHECKLIST DEPLOYMENT

### Pre-Deployment
- [ ] Semua file sudah commit ke Git
- [ ] Jalankan `composer install --no-dev --optimize-autoloader`
- [ ] Jalankan `php artisan config:clear`
- [ ] Jalankan `php artisan route:clear`
- [ ] Jalankan `php artisan view:clear`
- [ ] Test semua halaman di lokal:
  - [ ] Beranda (/)
  - [ ] Jadwal Sholat (/jadwal-sholat)
  - [ ] Jadwal Ramadhan (/jadwal-ramadhan)
  - [ ] Amalan (/amalan)
  - [ ] Profile (/profile)
  - [ ] Lebaran (/lebaran)

### Hosting Setup
- [ ] Beli hosting & domain
- [ ] Upload file ke cPanel via File Manager
- [ ] Extract file zip
- [ ] Pindahkan isi folder `public/` ke root (`public_html/`)
- [ ] Edit `index.php` (ubah path vendor dan bootstrap)
- [ ] Upload folder `vendor/`
- [ ] Buat database di MySQL Databases
- [ ] Konfigurasi `.env`
- [ ] Generate app key: `php artisan key:generate`
- [ ] Set permission: `chmod -R 755 storage bootstrap/cache`
- [ ] Install SSL (Let's Encrypt) di cPanel

### Post-Deployment
- [ ] Test semua halaman di production
- [ ] Check error log: `tail -f storage/logs/laravel.log`
- [ ] Setup monitoring (uptime robot)
- [ ] Setup backup otomatis database

---

##  TROUBLESHOOTING

### Error: "500 Internal Server Error"
```bash
# Check log
tail -f storage/logs/laravel.log

# Check permission
chmod -R 755 storage bootstrap/cache

# Regenerate autoload
composer dump-autoload
```

### Error: "403 Forbidden"
- Check permission folder `public/` harus 755
- Check ownership harus www-data (untuk Nginx)

### Error: "Database connection failed"
- Check `.env` database credentials
- Pastikan database sudah dibuat
- Check user database privileges

### CSS/JS tidak muncul
- Pastikan file di `public/` bisa diakses
- Check path di blade templates
- Clear browser cache (Ctrl+Shift+R)

### Error: "Class not found"
```bash
composer dump-autoload
php artisan optimize:clear
```

---

##  QUICK COMMANDS

```bash
# Clear all cache
php artisan config:clear && php artisan route:clear && php artisan view:clear && php artisan cache:clear

# Generate app key
php artisan key:generate

# Check routes
php artisan route:list

# View logs
tail -f storage/logs/laravel.log

# Fix permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

---

##  REKOMENDASI HOSTING

| Provider | Harga | Spesifikasi | Cocok Untuk |
|----------|-------|-------------|-------------|
| **Niagahoster** | Rp 15.000/bln | Shared Hosting | Pemula |
| **Hostinger** | Rp 29.000/bln | Shared Hosting | Pemula |
| **DigitalOcean** | $6/bln (~Rp 90.000) | VPS | Intermediate |
| **Vultr** | $6/bln (~Rp 90.000) | VPS | Intermediate |

---

**Semoga deployment berjalan lancar! 🚀**

Jika ada pertanyaan, check file **DEPLOYMENT.md** di root project.
