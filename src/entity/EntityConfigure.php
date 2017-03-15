<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 15.03.2017
 * Time: 20:34
 */

namespace phptools\PgSqlOrm\entity;


class EntityConfigure
{
    protected $entity;

    /**
     * EntityConfigure constructor.
     * @param $entity
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    public static function builder($entity)
    {
        return new static($entity);
    }

    public function setProperties(array $pr): self
    {
        return $this;
    }

    public function setRelations(array $pr): self
    {
        return $this;
    }

}