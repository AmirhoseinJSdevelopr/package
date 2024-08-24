<?php 

class roles {

    public $role;

    public function __construct($role) {
        $this->role = $role;
    }

    public static function Give_Roles ($role) {
        return $role;
    }

}

function Admin_support() {
    include 'Auth/Autheticable.php'; 
}

spl_autoload_register('Admin_support');

echo Admin::Taking_Role(); 


