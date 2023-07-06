<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

  // $jourDeLaSemaine = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");

  // for($i = 0; $i < count($jourDeLaSemaine); $i++ ) {

  //   echo "$jourDeLaSemaine[$i] <br>";
  // }

   $personnes = array("Karim" => 34 , "Mounir" => 37 , "Nabil" => 22 );

    //echo $personnes["Karim"];

      foreach($personnes as $nom => $age) {
        echo" $nom a $age ans. <br>";
      }

?>

</body>
</html>

