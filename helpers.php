<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

/**
 * @param $path
 * @param null $idc
 * @param null $flag
 * @param null $default
 * @return null
 */
function qconf_get_value($path, $idc = null, $flag = null, $default = null)
{
    if (is_null($config = QConf::getConf($path, $idc, $flag))) {
        return $default;
    }
    return $config;
}

/**
 * @param $path
 * @param null $idc
 * @param null $flag
 * @return array
 */
function qconf_get_values($path, $idc = null, $flag = null, $default = null)
{
    if (is_null($config = QConf::getBatchConf($path, $idc, $flag))) {
        return $default;
    }
    return $config;
}