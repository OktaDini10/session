<?php
    $server = 'New Connection';//localhost:3306
    $username = 'root';
    $password = '';
    $namadb = 'a122206842';

    mysqli_connect($server, $username, $password, $namadb);

   $k = new mysqli($server, $username, $password, $namadb);
   if($k->connect_errno)
   {
        echo "failed ", $k->connect_error;
        exit();
   }
