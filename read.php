<?php
include "trainingmysqlindex.php";
require 'create.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <?php


          global $conn;
          $conn->select_db('reunion_island');
          $sql="SELECT name,difficulty,distance,duration,height_difference FROM hiking";

          $result = $conn->query($sql);

          while($row = $result->fetch_assoc())
          {
              $name = $row['name'];
              $difficulty = $row['difficulty'];
              $distance = $row['distance'];
              $duration = $row['duration'];
              $height_difference =$row['height_difference'];

              echo "<tr>"."<th> "."Nom : ".$name." "."</th>"."<th>"." Difficulté: ".$difficulty."</th>"."<th>"."Distance: ".$distance." km"."</th>"."<th>"."Durée: ".$duration."</th>"."<th>"."Dénivelé: ".$height_difference." m"."</th>"."</tr>"."<br>";
          

      }

      ?>
    </table>
  </body>
</html>
