🌦️ Weather App – API Sederhana dengan PHP & OpenWeatherMap

Aplikasi cuaca sederhana yang dibangun dengan PHP (backend) dan HTML, CSS, JS (frontend).
Menggunakan API dari OpenWeatherMap
 untuk menampilkan data cuaca berdasarkan kota yang dimasukkan pengguna.

🚀 Fitur Utama

Input nama kota untuk mendapatkan data cuaca

Menampilkan suhu, kelembapan, dan kondisi cuaca

Grafik visual menggunakan Chart.js untuk suhu

Tampilan responsive dan ringan

📂 Struktur Proyek
📦 weather-app
 ┣ 📜 index.html      → Tampilan utama (frontend)
 ┣ 📜 style.css       → Desain & styling
 ┣ 📜 script.js       → Logika frontend (fetch API ke PHP)
 ┣ 📜 cuaca.php       → Backend PHP, request ke OpenWeatherMap API
 ┗ 📜 README.md       → Dokumentasi proyek

⚙️ Instalasi & Setup

Clone repo ini

git clone https://github.com/LatiefAkbar/api-cuaca.git


Masuk ke folder project

cd api-cuaca


Pindahkan project ke dalam folder htdocs (jika pakai XAMPP/Laragon).

Jalankan server lokal (contoh XAMPP → start Apache).

Buka di browser:

http://localhost/api-cuaca

🔑 Konfigurasi API Key

Daftar di OpenWeatherMap
 untuk mendapatkan API Key gratis.

Edit file cuaca.php bagian berikut:

$apiKey = "MASUKKAN_API_KEY_ANDA";

🌐 Demo

🔗 Live Demo

💻 GitHub Repository

📸 Screenshot

🤝 Kontribusi

Jika ingin berkontribusi:

Fork repo ini

Buat branch baru (feature-xyz)

Commit perubahan

Ajukan pull request

📜 Lisensi

MIT License © 2025 Latif Akbar Maulana

🔥 Proyek ini dibuat sebagai latihan dasar API.

Silakan fork, kembangkan, atau tambahkan fitur baru seperti forecast 5 hari ke depan ⛅ atau integrasi dengan geolocation browser 📍.
