<?php 

interface Autenticable{

public function login();
public function register();
public function logout();
public static function Taking_Role();

}

class Admin implements Autenticable{

    public function login () {
        echo "Yes";
    }
    public function logout () {
        echo "No";
    }
    public function register()
    {
        echo "Yahhh";
    }

    public static function Taking_Role()
    {
            return "Admin";
    }

}



