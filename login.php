<?php
declare(strict_types=1);
//require_once __DIR__ . '/vendor/autoload.php';
require_once realpath("vendor/autoload.php");

use MyApp\Logger\Logger;
use MyApp\User\Users;
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new Users('users.txt');
    $result = $user->checkCredentials('someUsername', 'somePassword');
    if ($result) {
        echo "Credentials are correct!";
    } else {
        echo 'Credentials are incorrect.';
    }
    $logger = new Logger($username);
    if ($username->checkCredentials()) {
        $logger->success('Hello');
    } else {
        $logger->error('Goodbye');
    }
}





