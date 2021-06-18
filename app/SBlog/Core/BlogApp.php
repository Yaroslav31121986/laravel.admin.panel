<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.06.2021
 * Time: 19:31
 */

namespace App\SBlog\Core;


class BlogApp
{
    public static $app;

    public static function getInstance()
    {
        self::$app = Regisrty::instance();
        self::getParams();
        return self::$app;
    }

    protected static function getParams()
    {
        $params = require CONF . '/params.php';

        if (!empty($params)) {
            foreach ($params as $key => $param) {
                self::$app->setProperty($key, $param);
            }
        }
    }
}