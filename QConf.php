<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2017-06
 */
if (!class_exists('QConf')) {
    class QConf
    {

        /**
         * @param $key
         * @param $idc
         * @param $get_flag
         * @return string|null
         */
        public static function getConf($key, $idc = null, $get_flag = null)
        {
            return null;
        }

        /**
         * @param $key
         * @param $idc
         * @param $get_flag
         * @return string|array|null
         */
        public static function getBatchConf($key, $idc = null, $get_flag = null)
        {
            return null;
        }

        /**
         * @param $key
         * @param $idc
         * @param $get_flag
         * @return string|array|null
         */
        public static function getBatchKeys($key, $idc = null, $get_flag = null)
        {
            return null;
        }

        /**
         * @param $path
         * @param $idc
         * @param $get_flag
         * @return array|null
         */
        public static function getAllHost($path, $idc = null, $get_flag = null)
        {
            return null;
        }

        /**
         * @param $path
         * @param $idc
         * @param $get_flag
         * @return string|null
         */
        public static function getHost($path, $idc = null, $get_flag = null)
        {
            return null;
        }
    }
}
