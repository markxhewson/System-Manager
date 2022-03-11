<?php
  $servername = "localhost";
  $username = "admin";
  $password = "admin2";
  $dbname = "skycloud";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $id = 1000;
  $rank = $_POST["data"][0];
  $perm = $_POST["data"][1];
  $server = $_POST["data"][2];

  $sql = "DELETE FROM luckperms_group_permissions WHERE `name`='{$rank}' AND permission='{$perm}'";
  
  $result = $conn->query($sql);

  if(!$result){
    die(mysqli_error($conn));
  }

  $conn->close();
?>