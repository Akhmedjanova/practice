<?php
declare(strict_types=1);

namespace MyApp\User;
class Users
{
    private $users;

    public function __construct($file)
    {
        $this->users = file($this->file = $file, FILE_IGNORE_NEW_LINES);
    }

    public function checkCredentials($username, $password)
    {
        foreach ($this->users as $user) {
            list($userLogin, $userPassword) = explode(':', $user);
            if (($username === $userLogin) && ($password === $userPassword)) {
                return true;
            }
        }

        return false;
    }
}





//    public function __construct($username, $password)
//    {
//        $this->username=$username;
//        $this->password=$password;
//    }
//
//    public  function checkCredentials()
//    {
//          $users = file('users.txt',FILE_IGNORE_NEW_LINES);
//            foreach($users as $user) {
//                list($userLogin, $userPassword)= explode(':',$user);
//                if(($this->username === $userLogin) && ($this->password === $userPassword)) {
//                return true;
//                }
//            }
//                return false;
//      }


