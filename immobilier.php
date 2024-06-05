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

       $sql = '
       select immob.id_imob, immob.titre  , immob.adresse, immob.prix_Location,   typeimmob.lible, immob.dispo from immob 
       join typeimmob on immob.id_type = typeimmob.id_type';

        $requete = $connexion -> query($sql);
        $data = $requete->fetchall(PDO::FETCH_ASSOC);
        echo '<table border><tr><td>id_immob</td><td>titre</td><td>adresse</td><td>prix_location</td>';



        for($i = 0;$i < count($data);$i++){
            echo '
            <tr>
                <td>'.$data[$i]["id_imob"].'</td>
                <td>'.$data[$i]["titre"].'</td>
                <td>'.$data[$i]["adresse"].'</td>
                <td>'.$data[$i]["prix_Location"].'</td>
            </tr>
            ';
            
        }
    ?>
    
</body>
</html>