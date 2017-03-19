<?php
namespace phptools\PgSqlOrm\db\core;

use phptools\PgSqlOrm\Entity;
use ToolsPhp\Types\core\ClassName;


class EntityClassName extends ClassName
{
    /**
     * @var Entity
     */
    protected $className;

    public function getTableName(): string
    {
        $class = $this->className;
        return $class::table();
    }


}