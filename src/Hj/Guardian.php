<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj;

use Hj\Exception\InvalidArgumentException;

/**
 * Class Guardian
 * @package Hj
 */
class Guardian
{
    /**
     * @param integer $value
     *
     * @throws \Hj\Exception\InvalidArgumentException
     */
    public static function guardAgainstInvalidInteger($value)
    {
        if (false === is_int($value)) {
            throw new InvalidArgumentException("The given value must be an integer");
        }
    }
}