<?php
    // Komentar pada PHP
    // Baris kedua komentar
    /* Komentar dengan banyak baris,
    ini masih termasuk komentar */

    // Pertemuan 2 - PHP Dasar
    // Sintaks PHP

    // Standar Output
    // echo, print
    // print_r (unutuk mencetak isi array)
    // var_dump (mencetak isi dari variabel)
    // print_r dan var_dump digunakan pada saat debugging

    // Contoh
    // echo "Ilma Muttaqien";
    // print "Ilma Muttaqien";
    // print_r("Ilma Muttaqien");
    // var_dump("Ilma Muttaqien");

    // Penulisan sintaks PHP
    // 1. PHP di dalam HTML
    // 2. HTML di dalam PHP

    // Variabel dan Tipe Data

    // Variabel
    // tidak boleh diawali oleh angka
    // $nama = "Ilma Muttaqien";

    //Interpolasi (Untuk mengecek apakah di dalam string terdapat variabel atau tidak)

    // echo "Hello, nama saya $nama";

    //Operator
    //Aritmatika
    // + / * - %

    // $x = 10;
    // $y = 20;
    // echo $x + $y;

    //Operator penggabung string / concatenation / concat
    // .

    // $nama_depan = "Ilma";
    // $nama_belakang = "Muttaqien";
    // echo $nama_depan . " " .  $nama_belakang;

    // Assignment
    // =, +=, -=, *=, /=, %=, .=
    // $x = 1;
    // $x -= 5;
    // echo $x;

    // $nama = "Ilma";
    // $nama .= " ";
    // $nama .= "Muttaqien";
    // echo $nama;

    // Perbandingan
    // <, >, <=, >=, ==, !=
    // var_dump(1 == "1"); 

    // Identitas (cek tipe data)
    // ===, !==
    // var_dump(1 === "1"); 

    // Logika
    // &&, ||, !
    // $x = 30;
    // var_dump($x < 20 || $x % 2 == 0);


?>

<!-- 1. PHP di dalam HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- <h1>Hallo selamat datang <?php echo $nama; ?></h1> -->
    <!-- <p><?php echo "ini adalah paragrap"; ?></p> -->
</body>
</html>


<!-- 2. HTML di dalam PHP 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php //echo "<h1>Hallo selamat datang Ilma Muttaqien</h1>"; ?>
</body>
</html>

-->