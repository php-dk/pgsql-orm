<?php

namespace phptools\PgSqlOrm;

use phptools\PgSqlOrm\db\Connect;

class Mapper
{
    /** @var  Entity */
    protected $entity;


    /**
     * Mapper constructor.
     * @param Entity $entity
     * @param null|Connect $connect
     */
    public function __construct(Entity $entity, ?Connect $connect)
    {
        $this->entity = $entity;
    }

    public function save(): void
    {

    }


    public function update(): void
    {

    }

    public function delete(): void
    {

    }

}