<html>
<head>

<meta charset="utf-8">

</head>
<body>
    <h1>Affichage des résultats </h1>
    <?php
    $a=$_REQUEST['t1'];
    $b=$_REQUEST['t2'];
    $c=$a-$b;
   
    echo "la somme est:" .$c;
    ?>
    <br>
    <a href = "javascript:history.back()">Essayez à nouveau </a>

</body>
</html>

