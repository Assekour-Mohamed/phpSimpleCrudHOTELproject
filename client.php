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

        $sql = 'select id_client,cin,nom,prenom from client';

        $requete = $connexion -> query($sql);
        $data = $requete->fetchall(PDO::FETCH_ASSOC);
        echo '<table border><tr><td>id_client</td><td>cin</td><td>nom</td><td>prenom</td>';

        for($i = 0;$i < count($data);$i++){
            echo '
            <tr>
                <td>'.$data[$i]["id_client"].'</td>
                <td>'.$data[$i]["cin"].'</td>
                <td>'.$data[$i]["nom"].'</td>
                <td>'.$data[$i]["prenom"].'</td>
            </tr>
            ';
        }
    ?>
</body>
</html>