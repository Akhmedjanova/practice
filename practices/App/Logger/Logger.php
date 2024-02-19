<?php
declare(strict_types=1);

namespace App\Logger;
//require_once 'login.php';

class Logger
{
    public $username;

    public function __construct($username)
    {
        $this->username = $username;
    }
//    public $successLogFile;
//    public $errorLogFile;
//
//    public function __construct($successLogFile, $errorLogFile){
//        $this->successLogFile=$successLogFile;
//        $this->errorLogFile=$errorLogFile;
//    }
    public function success($mess)
    {
        date_default_timezone_set('Asia/Tashkent');
        $logMessage = date('Y-m-d H:i:s') . ' - ' . $mess . ' - ' . $_SERVER['REMOTE_ADDR'] . "\n";
        file_put_contents('logs/logs.txt', $logMessage, FILE_APPEND);
    }

    public function error($mess)
    {
        date_default_timezone_set('Asia/Tashkent');
        $logMessage = date('Y-m-d H:i:s') . ' - ' . $mess . ' - ' . $_SERVER['REMOTE_ADDR'] . "\n";
        file_put_contents('logs/error.txt', $logMessage, FILE_APPEND);
    }
}
