<?php

class Guard
{
    private $callback;

    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function __destruct()
    {
        call_user_func($this->callback);
    }
}
