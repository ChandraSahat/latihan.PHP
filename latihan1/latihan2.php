<?php 
echo "buat tabel dengan format yang sudah diberikan !!!", "<br>"; 
$mhs = [
    [
        "prodi" => "informatika",
        "nim" => "2241625520101204",
        "nama" => "Akbar",
        "alamat" => "Cikampek"
    ],
    [
        "nim" => "2241625520101204",
        "nama" => "Fajar",
        "alamat" => "Karawang",
        "prodi" => "informatika",
    ],
    [
        "nim" => "224154877101204",
        "nama" => "Bisma",
        "alamat" => "Bekasi",
        "prodi" => "informatika",
    ],
    [
        "nim" => "22254720101204",
        "nama" => "Putra",
        "alamat" => "Kosambi",
        "prodi" => "informatika",
    ],
    [
        "nim" => "22416256581204",
        "nama" => "Fahri",
        "alamat" => "kaum",
        "prodi" => "informatika",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_php</title>
</head>
<body>
    <h1 align="center" >Daftar Mahasiswa</h1>
<table  border='1' cellpadding='3' align=center>
<tr>
<th>No</th>
<th>Program Studi</th>
<th>NIM</th>
<th>Nama</th>
<th>Alamat</th>
</tr>
<?php
// Looping untuk mencetak setiap baris data mahasiswa
$no = 1;
foreach ($mhs as $mahasiswa) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . $mahasiswa["prodi"] . "</td>";
    echo "<td>" . $mahasiswa["nim"] . "</td>";
    echo "<td>" . $mahasiswa["nama"] . "</td>";
    echo "<td>" . $mahasiswa["alamat"] . "</td>";
    echo "</tr>";
}
?>
</table>

</body>
</html>