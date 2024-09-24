<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .fs-45{
            font-size: 25px;
        }
    </style>
    <title>pratikum 3</title>
</head>
<body>
    <div class="fs-25">
        <?php
            include "visibility.php";

            $visibility = new visibility();
            $visibility->tampilkanData();

            echo "<br>";

            echo "Akses di luar kelas";
            echo "public: " . $visibility->public . "<br>";
           // echo "private: " . $visibility->private . "<br>";
            //echo "protected: " . $visibility->protected . "<br>";
            echo "<br> </br>";
            echo "<h2> konsep pewarisan </h2>";

            include "mahasiswa.php";

            $mahasiswa = new Mahasiswa("amal jamal smith");
            $mahasiswa->ucapsalam();

            $mahasiswaInggris = new mahasiswaAsing("upin betul betul betul");
            $mahasiswaInggris->ucapsalam();

        ?>
    </div>
</body>
</html>