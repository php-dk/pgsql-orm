<?php

namespace phptools\PgSqlOrm;

use phptools\PgSqlOrm\relations\HasMany;
use phptools\PgSqlOrm\traits\EntityInterface;
use phptools\PgSqlOrm\traits\EntityTrait;
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

    public static function properties(): array
    {
        return [

        ];
    }

    /**
     * @return array
     */
    public static function relations(): array
    {
        return [
            'post' => [HasMany::class, 'post_id'],
        ];
    }

    public static function find(): Query
    {
        return new Query(new static);
    }

    public function toTArray(): TArray
    {
        return new TArray();
    }
}