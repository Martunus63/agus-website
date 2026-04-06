#  Cara Upload Project ke GitHub

## ✅ Yang Sudah Dilakukan:

- [x] Git repository diinisialisasi
- [x] Semua file sudah di-commit
- [x] Branch renamed ke `main`
- [x] Siap di-push ke GitHub!

---

##  Langkah Upload ke GitHub:

### **Opsi 1: Buat Repository Baru di GitHub** (REKOMENDASI)

#### Langkah 1: Buat Repository di GitHub
1. Buka **https://github.com/new**
2. Isi form berikut:
   - **Repository name**: `ramadhan-berkah` (atau nama lain)
   - **Description**: `🌙 Website Ramadhan Berkah - Panduan Ibadah Ramadhan`
   - **Visibility**: Public (gratis) atau Private
   - ❌ **JANGAN** centang "Initialize this repository with a README"
3. Klik **"Create repository"**

#### Langkah 2: Copy URL Repository
Setelah repository dibuat, GitHub akan menampilkan URL seperti:
```
https://github.com/USERNAME-ANDA/ramadhan-berkah.git
```

#### Langkah 3: Push ke GitHub
Jalankan command berikut di terminal:

```bash
# Ganti USERNAME-ANDA dengan username GitHub Anda
cd /Users/ridonmartunus/agus-website

# Tambahkan remote repository
git remote add origin https://github.com/USERNAME-ANDA/ramadhan-berkah.git

# Push ke GitHub
git push -u origin main
```

**Jika diminta login:**
- Akan muncul browser untuk login ke GitHub
- Login dengan username & password GitHub Anda
- Authorize GitHub CLI jika diminta

---

### **Opsi 2: Gunakan GitHub CLI** (LEBIH CEPAT)

Jika sudah install GitHub CLI (`gh`):

```bash
cd /Users/ridonmartunus/agus-website

# Login ke GitHub
gh auth login

# Buat repository dan push otomatis
gh repo create ramadhan-berkah --private --source=. --remote=origin --push
```

**Ini akan otomatis:**
- ✅ Buat repository baru
- ✅ Set remote
- ✅ Push semua file

---

### **Opsi 3: Push ke Repository yang Sudah Ada**

Jika sudah punya repository:

```bash
cd /Users/ridonmartunus/agus-website

# Tambahkan remote
git remote add origin https://github.com/USERNAME-ANDA/NAMA-REPO.git

# Push
git push -u origin main
```

---

##  Troubleshooting:

### Error: "remote origin already exists"
```bash
# Hapus remote yang lama
git remote remove origin

# Tambahkan lagi
git remote add origin https://github.com/USERNAME-ANDA/ramadhan-berkah.git
```

### Error: "Authentication failed"
```bash
# Clear credential
git credential-cache exit

# Push lagi, akan diminta login ulang
git push -u origin main
```

### Error: "Updates were rejected"
```bash
# Pull dulu
git pull origin main --allow-unrelated-histories

# Push lagi
git push -u origin main
```

### Jika menggunakan SSH Key:
```bash
# Ganti URL dari HTTPS ke SSH
git remote set-url origin git@github.com:USERNAME-ANDA/ramadhan-berkah.git

# Push
git push -u origin main
```

---

##  Setelah Berhasil Push:

### Deploy ke Hosting Gratis:

#### **1. Railway.app** (Paling Mudah)
```bash
# Setelah push ke GitHub:
1. Buka https://railway.app
2. Login dengan GitHub
3. "New Project" → "Deploy from GitHub repo"
4. Pilih repository `ramadhan-berkah`
5. Railway otomatis deploy!
6. Tambah variable environment:
   - APP_KEY=base64:xxxxx
   - DB_CONNECTION=sqlite
```

#### **2. Render.com**
```bash
# Setelah push ke GitHub:
1. Buka https://render.com
2. Login dengan GitHub
3. "New +" → "Web Service"
4. Pilih repository `ramadhan-berkah`
5. Isi:
   - Build Command: composer install --no-dev --optimize-autoloader
   - Start Command: php artisan serve --host=0.0.0.0 --port=$PORT
6. Deploy!
```

#### **3. Heroku**
```bash
# Install Heroku CLI dulu
brew tap heroku/brew && brew install heroku

# Login
heroku login

# Buat app
heroku create ramadhan-berkah

# Push
git push heroku main

# Set config
heroku config:set APP_KEY=base64:xxxxx
heroku config:set APP_ENV=production
```

---

##  Checklist:

- [ ] Buat repository di GitHub
- [ ] Push code ke GitHub
- [ ] Verifikasi file muncul di GitHub
- [ ] Pilih hosting gratis (Railway/Render/Heroku)
- [ ] Deploy ke hosting
- [ ] Test website online
- [ ] Setup custom domain (opsional)

---

##  Contoh URL Setelah Deploy:

- **Railway**: `https://ramadhan-berkah.up.railway.app`
- **Render**: `https://ramadhan-berkah.onrender.com`
- **Heroku**: `https://ramadhan-berkah.herokuapp.com`

---

**Semoga berhasil! 🚀**
