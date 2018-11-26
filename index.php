<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie4_Exercice 5</title>
</head>
<!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. -->
<body>
<?php
// attention à bien nommer la fonction 'function string' n'est pas bon
function chaine($number = 10, $name = 'globules'){
return 'Voici'.' '.$number.' '.$name.'!';
}
echo chaine();
?>
</body>
</html>
