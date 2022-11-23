<?php

        $conn = new PDO('mysql:host=localhost;dbname=pruebatecnica', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $conn;
