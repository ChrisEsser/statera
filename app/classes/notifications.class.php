<?php


class Notifications
{

    public static function addError($e)
    {
        $_SESSION['site_errors'][] = $e;
    }

    public static function displayErrors()
    {

        $html = '<script src="' . BASE_PATH . '/js/bootstrap-notify.js"></script>' . "\n\r";
        $html .= '<script src="' . BASE_PATH . '/js/notify.js"></script>' . "\n\r";

        if(!empty($_SESSION['site_errors'])) {

            foreach ($_SESSION['site_errors'] as $error) {

                $html .= '<script type="text/javascript">notify("' . htmlentities($error) . '", "danger");</script>' . "\n\r";

            }

            unset($_SESSION['site_errors']);

        }

        return $html;
        
    }

}