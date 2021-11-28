<?php
class Prijava{
    public $id;
    public $predmet;
    public $katedra;
    public $sala;
    public $datum;

    public function __construct($id=null, $predmet=null, $katedra=null, $sala=null, $datum=null){
        $this->id = $id;
        $this->predmet = $predmet;
        $this->katedra = $katedra;
        $this->sala = $sala;
        $this->datum = $datum;
    }

    public static function getAll(mysqli $conn){
        $query = "SELECT * FROM prijave";
        //vraca taj result set
        return $conn->query($query);
    }

    public static function getById($id, mysqli $conn){
        $query = "SELECT * FROM prijave WHERE id=$id";

        $myObj = array();
        if($mysqlObj = $conn->query($query)){
            while($red = $mysqlObj->fetch_array(1)){
                $myObj[] = $red;
            }
        }
        return $myObj;
    }

    public function deleteByID(mysqli $conn){
        $query = "DELETE FROM prijave WHERE id=$this->id";
        return $conn->query($query);
    }

    public function update($id, mysqli $conn){
        $query = "UPDATE prijave SET predmet = $this->predmet,katedra = $this->katedra,sala = $this->sala,datum = $this->datum WHERE id=$id";
        return $conn->query($query);
    }

    public static function add(Prijava $prijava, mysqli $conn)
    {
        $query = "INSERT INTO prijave(predmet, katedra, sala, datum) VALUES('$prijava->predmet','$prijava->katedra','$prijava->sala','$prijava->datum')";
        return $conn->query($query);
    }

}


?>
