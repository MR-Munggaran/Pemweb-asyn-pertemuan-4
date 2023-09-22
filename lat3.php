
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Ini komentar

        #ini juga komentar

        /* ini juga komentar 
            dapat ditulis
            lebih dari 1 baris
        */
        /*$x = 5 /*+ 15 + 5;
        echo $x;*/
    ?>

    <?php
        $namaDepan = "Rafi";
        $namaBelakang = "Munggaran";

        $namaLengkap = $namaDepan." ".$namaBelakang;
        echo "Nama Saya adalah ".$namaLengkap;
        echo "<br> Nama Saya adalah $namaLengkap";

        $tglMasuk = 2021;
        $tglmasuk = 2020;
        echo "<br> Tanggal masuk Kuliah $tglMasuk";
        echo "<br> Tanggal masuk kuliah ".$tglmasuk;
    ?>
</body>
</html>