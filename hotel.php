

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="text-align:center;">
   


<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
 <table border style="width: 500px; height: 200px; text-align:center; ">
  <tr>
  <td>id_hotel </td>
  <td>titre </td>
  <td>adresse </td>
  <td>prex_nuit </td>
  <td>nombre_Place </td>
  <td>nombre_etoile </td></tr>
 
<?php

$servername = "localhost";
$username = "root";
$password = "Ass2@moha";

try {
  $connection = new PDO("mysql:host=$servername;dbname=Hotle", $username, $password);


  $res = $connection->query("
  select id_hotel, titre, adresse , prex_nuit , nombre_Place, typeHotel.nombre_etoile  from hotel
  join typeHotel on typeHotel.id_type = hotel.id_type
  ");
  $data = $res->fetchAll(PDO::FETCH_ASSOC);
  
 
  for ($i=0; $i < count($data) ; $i++) { 

    echo '<tr><td>'.$data[$i]["id_hotel"].' </td><td>'.$data[$i]["titre"].'</td><td>'.$data[$i]["adresse"].'</td>
    <td>'.$data[$i]["prex_nuit"].'</td><td>'.$data[$i]["nombre_Place"] .'</td><td>'.$data[$i]["nombre_etoile"] .'</td>
    <td>     <a href = "#" value ="del" name ="del"> delete </a>  >
    </td></tr> ';
   }
   echo "</table>";

 
} catch (PDOException $e) {
  die($e->getMessage());
}


?>

</form> 
</body>
</html>