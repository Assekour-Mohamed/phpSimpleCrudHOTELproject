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
        $connexion = new PDO("mysql: host=$servername; dbname=hotle",$username,$password);

        $sql = '   select reservation.id_reserv,client.cin,client.nom, hotel.titre from reservation 
        inner join client on client.id_client = reservation.id_client
        inner join hotel on hotel.id_hotel = reservation.id_hotel;';
        $requete = $connexion -> query($sql);
        $data = $requete->fetchall(PDO::FETCH_ASSOC);
        echo '<table border><tr><td>id_reserv</td><td>cin</td><td>nom</td><td>titre</td>';

        for($i = 0;$i < count($data);$i++ ){
            echo '
            <tr>
                <td>'.$data[$i]["id_reserv"].'</td>
                <td>'.$data[$i]["cin"].'</td>
                <td>'.$data[$i]["nom"].'</td>
                <td>'.$data[$i]["titre"].'</td>
            </tr>
            ';
        }
    ?>
</body>
</html>