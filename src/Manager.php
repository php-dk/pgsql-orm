<?php

namespace phptools\PgSqlOrm;


use phptools\PgSqlOrm\db\Connect;

class Manager
{
    /** @var  Connect */
    protected $connect;

    public function getEntityManager(): EntityManager
    {
        return new EntityManager();
    }
}