<?php

namespace phptools\PgSqlOrm;

use phptools\PgSqlOrm\entity\EntityAggregatorInterface;
use phptools\PgSqlOrm\traits\EntityInterface;

class EntityManager
{
    protected static $allowedInterfaces = [
        EntityAggregatorInterface::class,
        EntityInterface::class,
    ];

    /**
     * @param EntityAggregatorInterface|EntityInterface $entity
     * @return bool
     */
    public function save($entity): bool
    {

        return true;
    }

    /**
     * @param EntityAggregatorInterface|EntityInterface $entity
     * @return bool
     */
    public function delete($entity): bool
    {
        return true;
    }
}