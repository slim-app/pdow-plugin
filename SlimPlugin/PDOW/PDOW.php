<?php
namespace SlimPlugin\PDOW;
class PDOW
{
    public static function config($configJson)
    {
        if($configJson["mysql"]["enabeld"]==true)
        {
            $db = new \Easy\PDOW\PDOW();
            $db->setTyp("mysql");
            $db->setUsername($configJson["mysql"]["user"]);
            $db->setServer($configJson["mysql"]["host"]);
            $db->setDatabase($configJson["mysql"]["db"]);
            $db->setPassword($configJson["mysql"]["pass"]);
            $db->setPort($configJson["mysql"]["port"]);
            $db->createConnection();
            $db->createStatic();
        }
    }
}
