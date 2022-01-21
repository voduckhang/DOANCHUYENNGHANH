<?php
class Utilities
{
    public static function get($key,$valueDafault=''){
        return isset($_GET[$key])?$_GET[$key]:$valueDafault;
    }

    public static function post($key,$valueDafault=''){
        return isset($_POST[$key])?$_POST[$key]:$valueDafault;
    }
}
?>