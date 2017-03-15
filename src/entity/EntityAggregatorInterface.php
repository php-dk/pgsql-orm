<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 15.03.2017
 * Time: 20:31
 */

namespace phptools\PgSqlOrm\entity;


use phptools\PgSqlOrm\Entity;

interface EntityAggregatorInterface
{
    public function getEntityConfigureAggregate(): EntityConfigure;
}