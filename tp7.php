<html>
<head>
<meta charset="utf-4">
<TITLE> EX8_p2 : Formulaires et contrôles </TITLE>
</head>
<body>
<?php

$a=$_POST ['zt_password'];
$b=$_POST ['zt_nom'];



if ($a=="admin" and $b=="admin")

{

    echo "Bienvenue M. $a; votre mot de passe est corerect".".<br/>";
    echo "Vous êtes connecté le " .date("d/m/y")."<br/>";
    echo "Il est ".date("M;i,s");"!";


}
else
echo "M. $b  votre mot de passe est incorrect","<br>";
?>

<INPUT Type=button value = "retour" onclick = "self.history.back();">

</body>
</body>
</html>
