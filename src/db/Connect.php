<?php

namespace phptools\PgSqlOrm\db;

class Connect
{
    /** @var  Config */
    protected $config;

    /**
     * Connect constructor.
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

}