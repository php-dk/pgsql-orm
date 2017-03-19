<?php

namespace phptools\PgSqlOrm;


use phptools\PgSqlOrm\db\Connect;

class Manager
{
    /** @var  Connect */
    protected $connect;


    public function buildMapper(Entity $entity): Mapper
    {
        return new Mapper($entity, $this->connect);
    }
}