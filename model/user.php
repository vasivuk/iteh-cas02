<?php

class User
{
    //ovo naravno mozemo da enkapsuliramo i stavimo get i set metode;
    public $id;
    public $username;
    public $password;

    //definisemo konstruktor
    public function __construct($id = null, $username = null, $password = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public static function logInUser($user, mysqli $conn)
    {
        $query = "SELECT * FROM User WHERE username='$user->username' AND password='$user->password'";
        //konekcija sa bazom
        return $conn->query($query);
    }
}