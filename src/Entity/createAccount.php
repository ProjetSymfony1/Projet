<?php

namespace App\createAccount;

class createAccount{
    public function create():Boolean{
        $con = mysqli_connect("localhost","root","root","chez-gusto");
        $idUser =  $_REQUEST['idUser'];
        $pwd = $_REQUEST['pwd'];
        //level = 1
        $mail =  $_REQUEST['mail'];
        $fName =  $_REQUEST['fName'];
        $lName = $_REQUEST['lName'];
        $address = $_REQUEST['address'];
        $gender =  $_REQUEST['gender'];

        $query = "INSERT INTO user VALUES ('$idUser', '$pwd', 1, '$mail', '$fName', '$lName', '$address', '$gender')";

        if(mysqli_query($con, $query)===TRUE){
            return TRUE;
        } else{
            die(mysqli_query_error($con, $query));
            return FALSE;
        }
        mysqli_close($con);
    }
}

?>
