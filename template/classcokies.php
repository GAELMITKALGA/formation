<?php

class Cookie {
    public static function set($name, $value, $expire = 0, $path = '/', $domain = null, $secure = null, $httponly = null) {
        setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
    }

    public static function get($name, $default = null) {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : $default;
    }

    public static function delete($name, $path = '/', $domain = null) {
        setcookie($name, '', time() - 3600, $path, $domain);
        unset($_COOKIE[$name]);
    }
}

Cookie::set('user', 'Alice', time() + 3600);

echo Cookie::get('user', 'Guest');

Cookie::delete('user');