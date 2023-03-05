<?php

  declare(strict_types=1);

  $db_name = "realm_movie";
  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "";

  $conn = new PDO("mysql:dbname=". (string)$db_name .";host=". (string)$db_host, (string)$db_user, (string)$db_pass);

  // Habilitar erros PDO
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);