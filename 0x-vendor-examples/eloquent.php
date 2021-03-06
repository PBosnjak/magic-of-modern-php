<?php
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model;

$capsule = new Capsule();
$capsule->addConnection(array(
    'driver' => 'mysql', 
    'host' => 'localhost', 
    'database' => 'magic_demo_1', 
    'username' => 'root', 
    'password' => '', 
    'charset' => 'utf8', 
    'collation' => 'utf8_general_ci'
));
$capsule->setAsGlobal();
$capsule->bootEloquent();
/////////////////////////////////////////////

class User extends Model
{
    protected $table = 'users';
    public $timestamps = false;
}

$user = new User;
$user->name = 'Ivan Weiler';
$user->save();
var_dump($user::first()->toArray());


// $users = User::all();
// var_dump($users);



