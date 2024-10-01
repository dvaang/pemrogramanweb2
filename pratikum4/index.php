<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratikum4</title>
</head>
<body>
    <h1>konsep pewarisan</h1>
    <div class="">
        <?php
            require_once "Orangbiasa.php";
            require_once "oranginggris.php";
            require_once "mahasiswa.php";

            $dvaaang = new Orangbiasa();
            $dvaaang->setNama( 'Diva angeliana');
            $dvaaang->ucapSalam();

            echo "<br>";
            
            $amal = new oranginggris();
            $amal->setNama("jamal jamal");
            $amal->ucapSalam();
            
            echo "<br>";

            $mahasiswa = new mahasiswa();
            $mahasiswa->setNama('alan walker');
            $mahasiswa->setNim("123456789");

            $nilaimahasiswa = new Nilai();
            $nilaimahasiswa->setTugas(90);
            $nilaimahasiswa->setUTS(85);
            $nilaimahasiswa->setUAS(80);

            $mahasiswa->setNilai($nilaimahasiswa);

            $mahasiswa->ucapSalam();
            $mahasiswa->tampilkanData(); 
        ?>
    </div>
</body>
</html>