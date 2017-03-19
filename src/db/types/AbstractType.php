<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 19.03.2017
 * Time: 19:24
 */

namespace phptools\PgSqlOrm\db\types;


abstract class AbstractType
{
    public function getAlias(): string
    {
        $ref = new \ReflectionClass(get_called_class());
        $name =  str_replace('Type', '', $ref->getShortName());
        return strtolower($name);
    }

    abstract  public  function convertToPhpValue($value);

}