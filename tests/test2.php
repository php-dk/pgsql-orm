<?php
include __DIR__ . '/../vendor/autoload.php';

use phptools\PgSqlOrm\Entity;
use phptools\PgSqlOrm\entity\EntityAggregatorInterface;
use phptools\PgSqlOrm\entity\EntityConfigure;
use phptools\PgSqlOrm\Manager;
use phptools\PgSqlOrm\Query;
use phptools\PgSqlOrm\relations\HasOne;

class Post2 implements EntityAggregatorInterface
{

    public $id;
    public $name;

    public function getEntityConfigureAggregate(): EntityConfigure
    {
        return EntityConfigure::builder($this)
            ->setProperties([
                'id' => ['type' => 'serial'],
                'name' => ['type' => 'text'],
                'post_id' => ['type' => 'int', 'fk' => 'post'],

                'post' => ['type' => Post::class, 'post.id = post_id']
            ]);
    }
}


$entityManager = (new Manager())->getEntityManager();


//new post
$post = new Post2();
$post->name = 'hello';
$entityManager->save($post);

//search
$entityManager->buildQuery($post)->firstByPk(1);
