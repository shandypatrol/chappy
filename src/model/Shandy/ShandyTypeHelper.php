<?php

namespace Shandy;

/**
 * Class ShandyTypeHelper checks
 *
 * @method static TypeHelper getInstance()
 */
class TypeHelper extends \Singleton
{

    const ALLOW_NULL    = true;
    const DISALLOW_NULL = false;
    const TYPE_STRING   = 'string';

    /**
     * Will throw an Exception exception if $var is the empty string or NULL.
     *
     * @param mixed   $var        The variable to test.
     * @param string  $varName    The name of the variable.
     * @param bool    $allowNull  Whether the function will allow $var to be null.
     *
     * @throws \Exception Thrown if any of the parameters do not validate.
     * @return void
     */
    public function assertStringNotEmpty($var, $varName, $allowNull = self::DISALLOW_NULL)
    {

        if (null === $var) {
            if (self::DISALLOW_NULL === $allowNull) {
                throw new \Exception('Variable is null and should not be: '.$varName);
            }
            return;
        }

        if (!is_string($var)) {
            throw new \Exception('Variable is not string  and it should  be!');
        }

        if (empty($var)) {
            throw new \Exception('Variable is empty');
        }

    }

}