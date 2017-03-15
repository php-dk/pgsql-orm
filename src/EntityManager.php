<?php

namespace phptools\PgSqlOrm;

class EntityManager
{

    public function save(Entity $entity): bool
    {
        return true;
    }

    public function delete(Entity $entity): bool
    {
        return true;
    }
}