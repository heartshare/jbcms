<?php

if (!function_exists('is_email')) {
    /**
     * @param $email
     * @return bool
     */
    function is_email($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) === false ? false : true;
    }
}

if (!function_exists('is_mobile')) {
    /**
     * @param $mobile
     * @return bool
     */
    function is_mobile($mobile): bool
    {
        $rule = '/^1[3-9]\d{9}$/';

        return is_scalar($mobile) && 1 === preg_match($rule, (string)$mobile);
    }
}

if (!function_exists('skin')) {
    /**
     * @param $path
     * @return string
     */
    function skin($path): string
    {
        return asset('themes/default/' . ltrim($path, '/') . '?v=' . VERSION);
    }
}

