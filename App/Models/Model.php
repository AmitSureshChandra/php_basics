<?php


abstract class Model
{
    /**
     * @var string
     */

    protected static $table = null;

    /*
     *          self::class / __CLASS__ gives parent class name
     */

    public static function all(){
        if (is_null(static::$table))
            static::$table = static::class;
        return \App\Core\App::get('database')->selectAll(static::$table);
    }

}