<p align="center"><a href="https://mikaeducation.id" target="_blank"><img src="public/images/logo" width="400" alt="MIKA Logo"></a></p>
<h1 align="center">MIKA Education</h1>

<p align="center">
<a href="https://github.com/nicolasnch/mikaeducation">
    <img src="https://img.shields.io/badge/View_on-GitHub-181717?style=for-the-badge&logo=github" alt="GitHub Badge"/>
</a>
</p>

## About MIKA

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

---

## 🛠️ Tech Stack

- **Frontend:** Laravel & Tailwind
- **Backend:** Laravel
- **Database:** MySQL
- **Authentication:** Laravel(default), Breeze
- **Deployment:** Hostinger, Cloud Kilat S3 Bucket

Dependency
- PHP >8.2
- Composer, Laravel 11 (cek lagi)
- node.js, NPM / Bun

---

## 📌 Features

- Landing Page
- 🎓 Modular courses & lessons
- 🧠 Interactive Elements (Quiz, Pop-up Question, Interactive Study Case, Forum)

---

# Interactive Elements Development
## 📝 Commit Message Guidelines

Gunakan format berikut untuk commit message:
`<tipe>(scope): <deskripsi singkat>`

**Tipe:**
- `feat` - pengembangan fitur baru
- `fix` - memperbaiki bug
- `docs` - perubahan dokumentasi
- `style` - perubahan yang tidak berarti (contoh: menghilangakan white space)
- `refactor` - perubahan pada kode yang tidak memperbaiki bug ataupun menambah fitur
- `perf` - perubahan yang meningkatkan performa web
- `test` - menambah menambah atau memperbaiki tes
- `chore` - perubahan yang tidak menjadi value utama dalam pengembangan web

contoh commit: `refactor(quiz): membuat komponen untuk pilihan jawaban`

---

## 🚀 Local Development Guide

1. Clone repository
   ```bash
   git clone https://github.com/nicolasnch/mikaeducation.git
   # ubah link jika menggunakan ssh
   cd <nama repo> (mikaeducation)
   ```

2. Install dependencies
   ```bash
   npm install
   # atau
   bun install
   ```

3. ubah env
   ```bash
   # copy .env.example
   cp .env.example .env
   # atau buat sendiri yang baru
   ```
4. Generate Laravel key
   ```bash
   php artisan key:generate
   ```

5. Migrate database dan seeder
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. Jalankan server development
   ```bash
   php artisan serve
   ```
   ```bash
   npm run dev
   # atau
   bun run dev
   ```
