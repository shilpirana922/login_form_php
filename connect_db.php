<?php

 function openCon(){


    $connect = mysqli_connect("localhost", "root", "", "UserManual");

    return $connect;
 }

?>