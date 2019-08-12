<?php

namespace vendor;

/**
 * Class Logger
 */
class Logger
{
    /**
     * @param $text
     * @param string $file
     */
    public static function log($text, $file = 'log.txt')
    {
        $date = new \DateTime();
        $text = sprintf("[%s] %s\n", $date->format('Y/m/d H:i:s'), $text);
        file_put_contents($file, $text, 8);
    }
}