# 📦 Presence BackEnd

# Project Presence BackEnd

Presence BackEnd merupakan aplikasi BackEnd untuk sistem presensi karyawan yang dibangun menggunakan framework Laravel 11 dan database MySQL. Aplikasi ini menyediakan API yang dapat diintegrasikan dengan aplikasi FrontEnd untuk mengelola data kehadiran karyawan secara efisien.

## 📣 Requirements

-   PHP >= 8.2
-   Composer
-   MySQL atau database lain yang compatible dengan Laravel 11

## 🏃 Menjalankan Web secara Offline

Untuk menjalankan web ini secara offline, berikut langkah-langkahnya:

1. <b>Cloning</b><br>
   Clone repo ke perangkat lokal.
   `git clone https://github.com/affansholahuddin/presence_be.git`

2. <b>Buka Project</b><br>
   Masuk ke Direktori dan jalankan Visual Studio Code atau sejenisnya.
   `cd presence_be`

    `code .`

3. <b>Install Dependency</b><br>
   Jalankan Composer untuk menginstall dependensi yang diperlukan oleh Laravel 11.
   `composer install`

4. <b>Konfigurasi Environment</b><br>
   Ubah file `.env.example` menjadi `.env`.
   `cp .env.example .env`

    Kemudian ubah isi file `.env` dan sesuaikan dengan konfigurasi database di perangkat lokal, seperti:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

5. <b>Generate Key</b><br>
   Generate key untuk mengamankan aplikasi.
   `php artisan key:generate`

6. <b>Link Storage</b><br>
   Link folder storage agar dapat mengakses file di publik.
   `php artisan storage:link`

7. <b>Database Migrations</b>
   Jalankan migrasi untuk setup database.
   `php artisan migrate`

8. <b>Jalankan Project</b><br>
   Untuk menjalankan project secara offline, gunakan perintah berikut:
   `php artisan serve`

    Server akan berjalan pada alamat `http://localhost:8000`

    \* Jika ingin mengubah port, gunakan perintah:
    `php artisan serve --port=8005`

9. <b>Cek Project pada browser</b><br>
   Buka browser dan buka alamat sesuai port yang digunakan
   `http://localhost:8000`

## 📬 Update Konten Terbaru

Untuk mengunduh repo terbaru ke repo lokal, berikut langkahnya:

1. <b>Pulling</b><br>
   `$ git pull origin master`

## 🧱 Features

### Auth Page

<img alt="banner" width="100%" src="/screens/auth_page.png" />

### Dashboard Page

<img alt="banner" width="100%" src="/screens/dashboard.png" />

<img alt="banner" width="100%" src="/screens/profile_menu.png" />

### User Management

<img alt="banner" width="100%" src="/screens/user_management.png" />

### Company Profile

<img alt="banner" width="100%" src="/screens/company_profile.png" />

### Attendance

<img alt="banner" width="100%" src="/screens/attendances.png" />

### Permission

<img alt="banner" width="100%" src="/screens/permissions.png" />

## License

[MIT License](https://choosealicense.com/licenses/mit/)
