<?php 

include "config.php"; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `infopelajar` WHERE `id`='$id'";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        echo "<script>alert('maklumat berjaya dipadam.');
        window.location='maklumatpelajar.php'</script>";  
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 
?>