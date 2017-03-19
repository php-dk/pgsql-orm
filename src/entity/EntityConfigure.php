<?php

namespace phptools\PgSqlOrm\entity;


use phptools\PgSqlOrm\db\types\BoolType;
use phptools\PgSqlOrm\db\types\IntType;
use phptools\PgSqlOrm\db\types\SerialType;
use phptools\PgSqlOrm\db\types\StringType;
use phptools\PgSqlOrm\db\TypesCollection;
use phptools\PgSqlOrm\exception\Exception;

class EntityConfigure
{
    /** @var  object */
    protected $entity;

    /** @var  TypesCollection */
    protected $types;

    /**
     * EntityConfigure constructor.
     * @param $entity
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
        $this->types = new TypesCollection([
            new IntType,
            new StringType,
            new SerialType,
            new BoolType,
        ]);
    }

    public static function builder($entity)
    {
        return new static($entity);
    }

    public function setProperties(array $properties): self
    {
        foreach ($properties as $name => $options) {
            $typeAlias = $options['type'];
            if ($type = $this->types->getByAlias($typeAlias)) {
                $this->entity->{$name} = $type->convertToPhpValue($this->entity->{$name});
            } else {
                throw new Exception();
                //@todo - relations
            }
        }

        return $this;
    }

    public function setRelations(array $pr): self
    {
        return $this;
    }


}