<?php
namespace App\Domains\User\Entities;

use ActiveRecord\Model;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class User extends Model
{
    public function log($message)
    {
        $log = new Logger('teste');
        $log->pushHandler(new StreamHandler(__DIR__ . '/../../../../storage/logs/UserEntitie.log'));
        $log->addWarning($message);
    }

}