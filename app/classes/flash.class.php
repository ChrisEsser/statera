<?php


class Flash
{

    public static function set($d)
    {

        $_SESSION['flash_data'] = $d;

    }

    public static function add($d)
    {

        $_SESSION['flash_data'][] = $d;

    }

    public static function get()
    {

        $data = (!empty($_SESSION['flash_data'])) ? $_SESSION['flash_data'] : [];
        unset($_SESSION['flash_data']);
        return $data;

    }


}