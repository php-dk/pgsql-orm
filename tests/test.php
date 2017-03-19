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

    /** @var static */
    public $post;

    public function properties(): array
    {
        return [
            'id' => ['type' => 'serial'],
            'name' => ['type' => 'string'],

            'post_id' => ['type' => 'id', 'fk' => 'post'],

        ];
    }

    public function relations(): array
    {
        return [
            'post' => [HasOne::class, Post::class, 'post_id'],
        ];
    }

    public function getPost(): Post
    {
        return $this->post;
    }

}

class PostQuery extends Query {

}

$postMapper = (new Manager())->buildMapper($post);

//new post
$post = new Post();
$post->name = 'hello';

$postMapper->save();

//search
$newPost = Post::find()->firstByPk($post->id);