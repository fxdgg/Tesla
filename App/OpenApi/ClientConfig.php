<?php
namespace Tesla\App\Oapi;

class ClientConfig {


    static $testClient = [

        ];

    static $onlineClient = [

        ];

    static function getClient($env) {
        $client = ($env == 'online') ? self::$onlineClient: self::$testClient;
        return $client;
    }
}
