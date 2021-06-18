<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.06.2021
 * Time: 19:22
 */

namespace App\SBlog\Core;


class Regisrty
{
    use TSingletone;

    protected static $properties = [];

    /**
     * @param string $value
     * @return mixed|null
     */
    public static function getProperty(string $value)
    {
        $data = null;

        if (isset(self::$properties[$value])) {
            $data = self::$properties[$value];
        }

        return $data;
    }

    /**
     * @param $name
     * @param $value
     */
    public static function setProperty($name, $value): void
    {
        self::$properties[$name] = $value;
    }

    /**
     * @return array
     */
    public static function getProperties(): array
    {
        return self::$properties;
    }

}