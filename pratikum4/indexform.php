<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper{
            padding: 18px;
        }
        .form-input{
            display: block;
        }

    </style>
    <title>Form dengan OOP</title>
</head>
<body>
    <?php
    require_once "formmahasiswa.php";

    $form = new Form();
    $form->setTextField('nama', '');
    $form->setTextField('Nim', '');
    $form->setTextField('prodi', '');
    $form->setTextField('Fakulltas', '');
    $form->tampilkanForm();
    ?>
</body>
</html>