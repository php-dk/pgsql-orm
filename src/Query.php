<?php

namespace phptools\PgSqlOrm;

use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use NilPortugues\Sql\QueryBuilder\Manipulation\AbstractBaseQuery;
use phptools\PgSqlOrm\db\core\EntityClassName;
use ToolsPhp\Types\core\ClassName;

class Query
{
    /** @var  EntityClassName */
    protected $entity;

    /** @var  AbstractBaseQuery */
    protected $queryBuilder;

    /**
     * Query constructor.
     * @param EntityClassName $entity
     */
    public function __construct(EntityClassName $entity)
    {
        $this->entity = $entity;
        $this->queryBuilder = $this->builder()
            ->select()
            ->setTable($entity->getTableName());
    }

    public function builder(): GenericBuilder
    {
        return new GenericBuilder();
    }


    public function select(): self
    {
        return $this;
    }

    public function andWhere(array $data): self
    {

        return $this;
    }

    public function orWhere(array $data): self
    {
        return $this;
    }

    public function firstByPk(int $id): ?Entity
    {
        return null;
    }

    public function order(array $order): self
    {
        return $this;
    }

    public function toSql(): string
    {
        return $this->builder()->write($this->queryBuilder);
    }
}