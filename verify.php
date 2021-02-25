<?php
    
    if(isset($_GET['VKEY'])){

        require_once('config.php');

        $vkey = $_GET['VKEY'];
        $mysqli = NEW MySQLi('127.0.0.1','root','','emails');

        $resultSet = $mysqli->query("SELECT VERIFIED, VKEY FROM info WHERE VERIFIED = 0 AND VKEY='$vkey'");
        
        
        if($resultSet->num_rows==1){
            $update =  $mysqli->query("UPDATE info SET VERIFIED = 1 WHERE VKEY  = '$vkey' LIMIT 1");
            if($update){
                echo "Account verified. You may now Login!";
            }else{
                echo $mysqli->error;
            }
        }else{
            echo "Account Invlid or already verified";
        }
    }else{
        die ("Something went wrong");
    }
    