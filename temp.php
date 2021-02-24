<?php
echo __DIR__;
require_once "db.php";
class User extends db
{
    public function __construct()
    {
        $this->table = 'users';
    }
}
$user1 = new User();

echo "<br>";
var_dump($user1);
