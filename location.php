<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
       
       $servername = "localhost";
       $username = "root";
       $password = "Ass2@moha";
       $connexion = new PDO("mysql:host=$servername;dbname=imob",$username,$password);

        $sql = '   select location.id_reserv,client.cin,client.nom, immob.titre from location 
        inner join client on client.id_client = location.id_client
        inner join immob on immob.id_immob = location.id_immob;';
        $requete = $connexion -> query($sql);
        $data = $requete->fetchall(PDO::FETCH_ASSOC);
        echo '<table border><tr><td>id_location</td><td>cin</td><td>nom</td><td>titre</td>';

        for($i = 0;$i < count($data);$i++ ){
            echo '
            <tr>
                <td>'.$data[$i]["id_location"].'</td>
                <td>'.$data[$i]["cin"].'</td>
                <td>'.$data[$i]["nom"].'</td>
                <td>'.$data[$i]["titre"].'</td>
            </tr>
            ';
        }
    ?>
</body>
</html>