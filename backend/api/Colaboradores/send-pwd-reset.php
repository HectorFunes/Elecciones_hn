<?php

$email = $_POST["email"];
$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expira = date("Y-m-d H:i:s", time()+ 60*30);

$mysqli = require __DIR__ ."database.php";

$sql = "UPDATE colaboradores
        SET reset_token_hash = ?,
            reset_token_expira = ?
        WHERE correoElectronico = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("sss", $token_hash, $expira, $email);

$stmt->execute();
