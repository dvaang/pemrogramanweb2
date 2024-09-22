<?php
 include "orang.php";
 include "bankcustumer.php"
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello pratikum 2</h1>  
    <div class="di">
        <?php
           $nasabah = new BankCustumer();
           $nasabah->setCustumerName('kaila jordan');
           $nasabah->setAddress('kasang,pudak,jambi');
           $nasabah->setEmail('kailajordan@gmail.com');
           $nasabah->setCard('prioritas');
           $nasabah->setAcc('jordan');

           $nasabah->insertCard();
           $nasabah->enterPIN(131307);     
           
        ?>
    </div>
</body>
</html>
 
<!-- localhost/index.php?nama= Diva Angeliana -->