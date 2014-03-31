<?php

namespace Faker\Provider;

/**
 *
 * @author hugh
 */
class BrochureFolder extends \Faker\Provider\Base
{

    protected static $folderName = array('?#','?##');
    
    /**
     * @example 'B6'
     */
    public static function folderName()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$folderName)));
    }

}
