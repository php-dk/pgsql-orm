<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 19.03.2017
 * Time: 19:24
 */

namespace phptools\PgSqlOrm\db\types;


class BoolType extends AbstractType
{
    public  function convertToPhpValue($value)
    {
        return (bool)$value;
    }

}