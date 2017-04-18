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
 * @return string
 */
function qconf_get_value($path, $idc = null, $flag = null)
{
    return QConf::getConf($path, $idc, $flag);
}

/**
 * @param $path
 * @param null $idc
 * @param null $flag
 * @return array
 */
function qconf_get_values($path, $idc = null, $flag = null)
{
    return QConf::getBatchConf($path, $idc, $flag);
}