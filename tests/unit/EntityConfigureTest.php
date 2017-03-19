<?php

use phptools\PgSqlOrm\Entity;
use phptools\PgSqlOrm\entity\EntityConfigure;
use PHPUnit\Framework\TestCase;



class EntityConfigureTest extends TestCase
{
    public function getPost()
    {
        return new class {
          public $id;
        };
    }
    public function testConfigureSuccessType()
    {
        $post = $this->getPost();
        $post->id = '12';

        $configureEntity = EntityConfigure::builder($post)
            ->setProperties(['id' => ['type' => 'int']]);

        static::assertTrue(is_integer($post->id));
    }

}
