<?php

namespace phptools\PgSqlOrm\db\types;

class IntType extends AbstractType
{
    public function convertToPhpValue($value)
    {
        return (int)$value;
    }


}