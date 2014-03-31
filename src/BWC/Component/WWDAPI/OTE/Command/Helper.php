<?php

namespace BWC\Component\WWDAPI\OTE\Command;

use BWC\Component\WWDAPI\Credential;
use BWC\Component\WWDAPI\WAPI;
use BWC\Component\WWDAPI\WwdApi;
use Symfony\Component\Yaml\Yaml;

class Helper
{
    /**
     * @return array
     */
    public static function getConfig()
    {
        $config = Yaml::parse(file_get_contents(__DIR__.'/../config.yml'));
        return $config;
    }

    /**
     * @return WAPI
     */
    public static function getWAPI()
    {
        $api = new WAPI(array(), __DIR__.'/../../wsdl/api-ote.wsdl');
        return $api;
    }


    /**
     * @return WwdApi
     */
    public static function getWwdApi()
    {
        $api = new WwdApi(self::getWAPI());
        return $api;
    }

    /**
     * @return Credential
     */
    public static function getCredential()
    {
        $config = self::getConfig();
        return new Credential($config['account'], $config['password']);
    }

} 