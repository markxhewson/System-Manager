<?php
  $servername = "localhost";
  $username = "admin";
  $password = "admin2";
  $dbname = "skycloud";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT max(`id`) AS `id` FROM luckperms_group_permissions";
  $maxID = $conn->query($sql);

  $id = $maxID->fetch_assoc()["id"] + 1;
  $rank = $_POST["data"][0];
  $perm = $_POST["data"][1];
  $server = $_POST["data"][2];
  $value = $_POST["data"][3];
  $world = "global";
  $expiry = 0;
  $contexts = "{}";

  $sql = "INSERT INTO luckperms_group_permissions (id, `name`, permission, `value`, `server`, world, expiry, contexts) VALUES ('{$id}', '{$rank}', '{$perm}', '{$value}', '{$server}', '{$world}', '{$expiry}', '{$contexts}')";
  
  $result = $conn->query($sql);

  if(!$result){
    die(mysqli_error($conn));
  }

  $conn->close();
?>