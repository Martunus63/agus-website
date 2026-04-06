#  Checklist Deployment - Ramadhan Berkah

## ✅ PRE-DEPLOYMENT (Lokal)

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
- [ ] Pastikan tidak ada error di console browser
- [ ] Buat file zip project (kecuali vendor, node_modules, .git)

## ✅ HOSTING SETUP

### Shared Hosting (cPanel)

- [ ] Beli hosting & domain
- [ ] Upload file ke cPanel via File Manager
- [ ] Extract file zip
- [ ] Pindahkan isi folder `public/` ke root (`public_html/`)
- [ ] Edit `index.php` (ubah path vendor dan bootstrap)
- [ ] Upload folder `vendor/`
- [ ] Buat database di MySQL Databases
- [ ] Konfigurasi `.env`:
  - [ ] APP_ENV=production
  - [ ] APP_DEBUG=false
  - [ ] APP_URL=https://domainanda.com
  - [ ] Database connection (host, database, username, password)
- [ ] Generate app key: `php artisan key:generate`
- [ ] Set permission: `chmod -R 755 storage bootstrap/cache`
- [ ] Install SSL (Let's Encrypt) di cPanel

### VPS (DigitalOcean/Vultr)

- [ ] Buat VPS (Ubuntu 22.04)
- [ ] Setup SSH key
- [ ] Install PHP 8.2 + extensions
- [ ] Install Composer
- [ ] Install Nginx
- [ ] Install MySQL
- [ ] Clone repository
- [ ] Install dependencies: `composer install --no-dev --optimize-autoloader`
- [ ] Setup `.env`
- [ ] Generate app key
- [ ] Set permission folder
- [ ] Konfigurasi Nginx virtual host
- [ ] Restart Nginx
- [ ] Setup SSL dengan Certbot
- [ ] Setup firewall (ufw)
- [ ] Setup database backup otomatis

## ✅ POST-DEPLOYMENT

- [ ] Test semua halaman di production
- [ ] Check error log: `tail -f storage/logs/laravel.log`
- [ ] Setup monitoring (uptime robot)
- [ ] Setup backup otomatis database
- [ ] Setup CDN (Cloudflare) - optional
- [ ] Submit sitemap ke Google Search Console
- [ ] Setup analytics (Google Analytics) - optional

## 🔒 KEAMANAN

- [ ] APP_DEBUG=false di production
- [ ] Hapus file `phpinfo()` jika ada
- [ ] Block akses ke folder sensitive (.env, .git, vendor, dll)
- [ ] Setup HTTPS/SSL
- [ ] Update PHP version terbaru
- [ ] Backup database secara berkala
- [ ] Monitor error logs

## 📞 TROUBLESHOOTING

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

## 🎯 QUICK COMMANDS

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

# Install dependencies (production)
composer install --no-dev --optimize-autoloader
```

---

## 📞 KONTAK SUPPORT

Jika mengalami kendala:
1. Check log error: `storage/logs/laravel.log`
2. Enable debug mode sementara: `APP_DEBUG=true` di `.env`
3. Posting error di forum Laravel Indonesia

---

**Semoga deployment berjalan lancar! 🚀**
