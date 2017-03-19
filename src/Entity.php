<?php

namespace phptools\PgSqlOrm;

use phptools\PgSqlOrm\db\core\EntityClassName;
use phptools\PgSqlOrm\relations\HasMany;
use phptools\PgSqlOrm\traits\EntityInterface;
use phptools\PgSqlOrm\traits\EntityTrait;
use ToolsPhp\Types\core\ClassName;
use ToolsPhp\Types\TArray;
use ToolsPhp\Types\trains\TStrictObject;

abstract class Entity extends TStrictObject implements EntityInterface
{
    use EntityTrait;

    protected static $query = Query::class;

    protected static $table = '';

    public static function table(): string
    {
        return static::$table;
    }

    public function properties(): array
    {
        return [

        ];
    }

    /**
     * @return array
     */
    public function relations(): array
    {
        return [

        ];
    }

    public static function find(): Query
    {
        return new Query(new EntityClassName(static::class));
    }

    public function toTArray(): TArray
    {
        return new TArray();
    }
}