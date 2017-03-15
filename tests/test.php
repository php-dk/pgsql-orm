<?php
include __DIR__.'/../vendor/autoload.php';

use phptools\PgSqlOrm\Entity;
use phptools\PgSqlOrm\Manager;
use phptools\PgSqlOrm\Query;

class Post extends Entity {
    protected static $table = 'post';
    protected static $query = PostQuery::class;

    public $id;
    public $name;

    public static function fields(): array
    {
        return [
            'id' => ['type' => 'serial'],
            'name' => ['type' => 'text'],
        ];
    }


}

class PostQuery extends Query {

}

$entityManager = (new Manager())->getEntityManager();


//new post
$post = new Post();
$post->name = 'hello';
$entityManager->save($post);

//search
$newPost = Post::find()->firstByPk($post->id);