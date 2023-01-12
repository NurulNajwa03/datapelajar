<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $nondp = $_POST['nondp'];
    $namapelajar = $_POST['namapelajar'];
    $nokp = $_POST['nokp'];
    $jantina = $_POST['jantina'];
    $nohp = $_POST['nohp'];

      $sql = "INSERT INTO `infopelajar` (`id`, `nondp`, `namapelajar`, `nokp`, `jantina`, `nohp`) VALUES ('$id','$nondp','$namapelajar','$nokp','$jantina','$nohp')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "<script>alert('maklumat berjaya ditambah');
        window.location='maklumatpelajar.php'</script>";  
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      form{
        text-align: center;
        font-size:20px;
      }
    </style>
  </head>
  <body>

<form action="" method="POST">

  <h1>Tambah pelajar</h1>
  <fieldset>
      Id:<br>
        <input type="text" name="id"><br>

      No Ndp:<br>
        <input type="text" name="nondp"><br>

      Nama Pelajar:<br>
        <input type="text" name="namapelajar"><br>

      No Kp:<br>
        <input type="text" name="nokp"><br>

      Jantina:<br>
      <input type="radio" name="jantina" value="lelaki">lelaki
      <input type="radio" name="jantina" value="perempuan">perempuan
      <br>

      No Hp:<br>
      <input type="text" name="nohp"><br>

      <br><br>
      <input type="submit" name="submit" value="submit">

  </fieldset>
    </form>
</body>
</html>