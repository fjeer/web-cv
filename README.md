
---

# 🚀 Web CV — Project Setup & Installation Guide

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-%3E=8.2-blue?style=for-the-badge)
![Composer](https://img.shields.io/badge/Composer-Required-orange?style=for-the-badge)
![Node](https://img.shields.io/badge/Node-Required-green?style=for-the-badge)

> 📌 Project ini dibangun menggunakan **Laravel 12**.
> Panduan ini dibuat agar rekan developer dapat menjalankan project ini dengan mudah mulai dari clone hingga running.

---

> buka terminal dan jalankan command berikut.

## 📥 1. Clone Repository

```bash
git clone https://github.com/fjeer/web-cv.git
cd web-cv
```

---

## 📦 2. Install Dependency Backend (Composer)

```bash
composer install
```

---

## 🔧 3. Konfigurasi Environment

Copy `.env.example` → menjadi `.env`:

```bash
cp .env.example .env
```

Generate key Laravel:

```bash
php artisan key:generate
```

Sesuaikan konfigurasi `.env` → terutama bagian database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_web
DB_USERNAME=root
DB_PASSWORD=
```

> Buat database terlebih dahulu sebelum migrate.

---

## 🗃 4. Migrasi Database + Seeder (jika tersedia)

```bash
php artisan migrate
```

Jika project memiliki seeder:

```bash
php artisan db:seed
```

---

## 🎨 5. Install Dependencies Frontend Node Js

```bash
npm install && npm run build
```


## ▶ 6. Jalankan Server Laravel

```bash
composer run dev
```

atau kalau tidak bisa 

```bash
php artisan serve
```
```bash
npm run dev
```

Akses melalui browser →
🔗 [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🧽 Commands Penting

| Keperluan     | Command                      |
| ------------- | ---------------------------- |
| Clear cache   | `php artisan optimize:clear` |
| Clear config  | `php artisan config:clear`   |
| Clear view    | `php artisan view:clear`     |
| Restart queue | `php artisan queue:restart`  |

---

## 🔥 Ringkas Langkah Instalasi

```bash
git clone repo
cd folder-project
composer install
cp .env.example .env
php artisan key:generate
edit .env & set database
php artisan migrate
npm install && npm run build
composer run dev
```

---
