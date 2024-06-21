<?php
namespace Core;
class Request
{
    // Get HTTP method
    public static function Method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    // Get URI path
    public static function Route()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    // Get all query parameters
    public static function Get()
    {
        return $_GET;
    }

    // Get specific query parameter
    public static function QueryParam($key, $default = null)
    {
        return $_GET[$key] ?? $default;
    }

    // Get all POST data
    public static function Post()
    {
        return $_POST;
    }

    // Get specific POST parameter
    public static function GetPostParam($key, $default = null)
    {
        return $_POST[$key] ?? $default;
    }

    // Get HTTP header
    public static function Header($name)
    {
        $header = 'HTTP_' . strtoupper(str_replace('-', '_', $name));
        return $_SERVER[$header] ?? null;
    }

    // Get all cookies
    public static function Cookies()
    {
        return $_COOKIE;
    }

    // Get specific cookie
    public static function GetCookieByName($name, $default = null)
    {
        return $_COOKIE[$name] ?? $default;
    }

    // Get uploaded files
    public static function Files()
    {
        return $_FILES;
    }

    // Get a specific file
    public static function GETFile($name)
    {
        return $_FILES[$name] ?? null;
    }

    // Get raw input data
    public static function Input()
    {
        return file_get_contents('php://input');
    }

    // Get server parameter
    public static function GetServerParam($key, $default = null)
    {
        return $_SERVER[$key] ?? $default;
    }
}
