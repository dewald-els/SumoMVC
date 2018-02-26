<?php

namespace Sumo\Core;

class Assets
{
    static function css($filename)
    {
        return ASSETS_DIR . 'css' . DIRECTORY_SEPARATOR . $filename . '.css';
    }
}