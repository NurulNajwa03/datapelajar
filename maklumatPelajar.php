<?php 

include "config.php";
$sql = "SELECT * FROM infopelajar";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
<style>

    table,tr,th,td{
    
    border: solid black 3px ;
    border-collapse: collapse;
    padding: 15px;
    }
    button{
    text-decoration: none;
    text-decoration-line: none;
    color:blue;
    padding: 8px;
    }

</style>
</head>
<body>
    <div class="container">
<table class="table">
    <thead>
        <h1>Tpp langat</h1>
    <tr>
            <th>Id</th>
            <th>No Ndp</th>
            <th>Nama Pelajar</th>
            <th>No Kp</th>
            <th>Jantina</th>
            <th>No Hp</th>
        </tr>
    </thead>
<tbody> 
    <?php
       
            while ($row = $result->fetch_assoc()) {
        ?>

        <tr>
        <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nondp']; ?></td>
            <td><?php echo $row['namapelajar']; ?></td>
            <td><?php echo $row['nokp']; ?></td>
            <td><?php echo $row['jantina']; ?></td>
            <td><?php echo $row['nohp']; ?></td>
            <td><button><a  href="tambah.php?id=<?php echo $row['id']; ?>">tambah</a></button> &nbsp;<button><a href="padam.php?id=<?php echo $row['id']; ?>">padam</a></button></td>
        </tr>                       
        <?php       }
        ?>                
    </tbody>
</table>
    </div> 
</body>
</html>




