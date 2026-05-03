<?php

/**
 * ZUCOMP - Contact Form Handler
 * File: contact.php
 */

$config = [
    'email_tujuan'  => 'Aradhanaambon@gmail.com',
    'nama_toko'     => 'ZUCOMP computer',
    'wa_number'     => '62856-9349-6182',
    'notif_email'   => true,
];

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
    exit;
}

function clean($data)
{
    return htmlspecialchars(strip_tags(trim($data)));
}

$nama    = clean($_POST['nama']     ?? '');
$wa      = clean($_POST['whatsapp'] ?? '');
$pesan   = clean($_POST['pesan']    ?? '');

$errors = [];
if (empty($nama))  $errors[] = 'Nama tidak boleh kosong';
if (empty($wa))    $errors[] = 'Nomor WhatsApp tidak boleh kosong';
if (empty($pesan)) $errors[] = 'Pesan tidak boleh kosong';

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'errors' => $errors]);
    exit;
}

date_default_timezone_set('Asia/Jakarta');
$waktu = date('d/m/Y H:i') . ' WIB';

$log_dir = __DIR__ . '/logs';
if (!is_dir($log_dir)) mkdir($log_dir, 0755, true);

$log_entry = "[{$waktu}] Nama: {$nama} | WA: {$wa} | Pesan: {$pesan}" . PHP_EOL;
file_put_contents($log_dir . '/pesan.log', $log_entry, FILE_APPEND | LOCK_EX);

if ($config['notif_email']) {
    $subject = "[{$config['nama_toko']}] Pesan Baru dari {$nama}";
    $body    = "Ada pesan baru masuk:\n\nNama: {$nama}\nWA: {$wa}\nPesan: {$pesan}\nWaktu: {$waktu}";
    $headers = "From: noreply@{$_SERVER['HTTP_HOST']}\r\n";
    mail($config['email_tujuan'], $subject, $body, $headers);
}

echo json_encode([
    'status'  => 'success',
    'message' => 'Pesan berhasil dikirim!',
]);
exit;
