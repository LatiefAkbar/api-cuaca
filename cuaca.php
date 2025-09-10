<?php
header("Content-Type: application/json");

// API key kamu
$apiKey = "a81bf001659cfad9fc054f558645ddc2";

// Ambil parameter kota (default Jakarta)
$kota = isset($_GET['kota']) ? $_GET['kota'] : "Jakarta";

// URL OpenWeather
$url = "https://api.openweathermap.org/data/2.5/weather?q={$kota}&appid={$apiKey}&units=metric&lang=id";

// Ambil data dari OpenWeather
$response = file_get_contents($url);

if ($response === FALSE) {
    echo json_encode([
        "status" => "error",
        "message" => "Gagal mengambil data cuaca"
    ]);
    exit;
}

$data = json_decode($response, true);

// Format ulang biar lebih ringkas
$output = [
    "status" => "success",
    "kota" => $data['name'],
    "negara" => $data['sys']['country'],
    "suhu" => $data['main']['temp'] . " °C",
    "kelembaban" => $data['main']['humidity'] . " %",
    "cuaca" => $data['weather'][0]['description'],
    "angin" => $data['wind']['speed'] . " m/s"
];

// Kirim output JSON
echo json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
