<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2017-06
 */
if (!class_exists('Qconf')) {
    class Qconf
    {

        /**
         * @param $key
         * @param $idc
         * @param $get_flag
         * @return string|null
         */
        public function getConf($key, $idc = null, $get_flag = null)
        {
        }

        /**
         * @param $key
         * @param $idc
         * @param $get_flag
         * @return string|array|null
         */
        public function getBatchKeys($key, $idc = null, $get_flag = null)
        {
        }

        /**
         * @param $path
         * @param $idc
         * @param $get_flag
         * @return array|null
         */
        public function getAllHost($path, $idc = null, $get_flag = null)
        {
        }

        /**
         * @param $path
         * @param $idc
         * @param $get_flag
         * @return string|null
         */
        public function getHost($path, $idc = null, $get_flag = null)
        {
        }
    }
}
