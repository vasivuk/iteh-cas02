<?php

require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST['predmet']) && isset($_POST['katedra'])
    && isset($_POST['datum']) && isset($_POST['sala'])){
        $prijava = new Prijava(null, $_POST['predmet'], $_POST['sala'], $_POST['datum']);
        $status = Prijava::add($prijava, $conn);
    }

    if($status){
        echo "Success";
    } else {
        echo $status;
        echo "Failed";
    }


?>