<?php
namespace phptools\PgSqlOrm\exception;
use Exception as BaseException;

class Exception extends BaseException
{
    public static function new(string $msg): self
    {
        return new static($msg);
    }
}