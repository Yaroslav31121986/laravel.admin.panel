<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.06.2021
 * Time: 19:16
 */

namespace App\SBlog\Core;


trait TSingletone
{
    private static $instance;

    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}