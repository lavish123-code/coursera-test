<?php

    $server= 'localhost';
    $user = 'root';
    $password = '';
    $db = 'coronadb';

    $con = mysqli_connect($server,$user, $password, $db);
    if($con){
        ?>
        <script>
            alert('connection successfull');
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("no connection successfull");
        </script>
        <?php
    }



?>