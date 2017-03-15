<?php
include __DIR__.'/../vendor/autoload.php';

use phptools\PgSqlOrm\Entity;
use phptools\PgSqlOrm\Manager;
use phptools\PgSqlOrm\Query;
use phptools\PgSqlOrm\relations\HasOne;

class Post extends Entity {
    protected static $table = 'post';
    protected static $query = PostQuery::class;

    public $id;
    public $name;

    /** @var HasOne */
    public $post;

    public static function properties(): array
    {
        return [
            'id' => ['type' => 'serial'],
            'name' => ['type' => 'text'],
        ];
    }

    public static function relations(): array
    {
        return [
            'post' => [HasOne::class, Post::class, 'post_id'],
        ];
    }

    public function getPost(): Post
    {
        return $this->post->entity();
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