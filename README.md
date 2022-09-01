<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Dokumentasi Aplikasi

Aplikasi ini adalah contoh aplikasi sebuah Organisasi UKM Bahasa FLAT UIN Jakarta yang mana bergerak di bidang kebahasaaan, pada aplikasi ini terdapat sistem login user dan admin yang dimana bisa di edit sendiri profile user maupun adminnya, selain itu terdapat fitur news(berita) dan kita bisa memasukkan komentar dari news tersebut, kemudian bisa membuat Jumbotron yang ada dihalaman home kemudian membuat quotes yang ada di halaman home di bagian bawah, aplikasi ini sudah menggunakan blade template dan juga sudahmemakai mysql untuk databasenya dan terdapat relasi one to one dan one to many.

## Panduan Instalisasi

1. git clone https://github.com/My-Dios/flat-app.git
2. cd ke folder aplikasi dan bash git "code ."
3. buka terminal di vscode dan ketik "composer install"
4. install dependencies dengan cara "npm install"
5. copy .env example dengan cara "cp .env.example .env"
6. generate enkripsi key "php artisan key:generate"
7. sesuaikan "DB_DATABASE=flaters_db" di .env kemudian buat database di mysql dengan nama "flaters_db" dan sebelum itu nyalakan xamppnya
8. migrate databasenya "php artisan migrate"
9. kemudian jalankan laravelnya dengan "php artisan serve"
10. lihat di local servernya

## 
