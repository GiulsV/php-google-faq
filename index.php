<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il "Database" (in questo caso un semplice array) e la visualizzazione di queste domande e risposte con PHP. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include 'data.php';

     ?>
    <title>Google F.A.Q.</title>
</head>
<body>
    <?php 
        foreach($faq as $key){
            foreach($key as $q_a){
                echo $q_a;
            }
        }
    ?>
</body>
</html>