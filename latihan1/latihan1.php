<?php

function hitungHari($jumlah_hari) {  //parameter jumlah_hari //1
    // Mendapatkan timestamp hari ini
$namaHari= date ('l', strtotime(date("Y-m-d"). "+" .$jumlah_hari. "days"));

    // Menerjemahkan nama hari ke dalam bahasa Indonesia
    switch ($namaHari) 
        {
        case 'Monday':
            $translateHari = 'Senin';
            break;
        case 'Tuesday':
            $translateHari = 'Selasa';
            break;
        case 'Wednesday':
            $translateHari = 'Rabu';
            break;
        case 'Thursday':
            $translateHari = 'Kamis';
            break;

        case 'Friday':
            $translateHari = 'Jumat';
            break;

        case 'Saturday':
            $translateHari = 'Sabtu';
            break;
        case 'Sunday':
            $translateHari = 'Minggu';
            break;
        default:
            $translateHari = 'Error dalam menerjemahkan nama hari';
        }
        return $translateHari;
    }
$hari_ini = 'Thursday';
$jumlah_hari=80;

echo "$jumlah_hari setelah hari ini adalah hari  ". hitungHari($jumlah_hari);

?>
