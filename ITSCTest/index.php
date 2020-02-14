<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="bootstrap-4.4.1/css/bootstrap.css">
    <link rel="stylesheet" href="scirpt/customfont.css">
</head>
<body>
    <?php
        $dataj = file_get_contents("datajson.json");
        $data = json_decode($dataj,true);
        echo "<pre>";
       // print_r($data);
        echo "</pre>";
    ?>
    <center>
    <input type="button" value="Add New Member" class = 'btn btn-success'>
    <br><br>
    <table border = "1">
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Birthname</th>
        <th>Email</th>
        <th>Operation</th>
        <th></th>
            <?php
                foreach($data as $i => $value){
                    echo "<tr>";
                    echo "<td>".$data[$i]['firstname']."</td>";
                    echo "<td>".$data[$i]['lastname']."</td>";
                    echo "<td>".$data[$i]['birthday']."</td>";
                    echo "<td>".$data[$i]['email']."</td>";
                    echo "<td><a href = 'update.php?name=".$data[$i]['firstname']."'><button class='btn btn-warning'>UPDATE</button></a></td>";
                    echo "<td><button class = 'btn btn-danger' value = '".$data[$i]['firstname']."'>Delete</button></td>";
                    echo "</tr>";
                }
            ?>
    </table>
    </center>
    
</body>
<script src="bootstrap-4.4.1/js/bootstrap.js"></script>
<script src="scirpt/jquery-3.4.1.js"></script>
</html>