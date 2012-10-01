<?php

class GuardTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionScope()
    {
        $result = false;
        $func = function () use (&$result) {
            new Guard(function () use (&$result) { $result = true; });
        };
        call_user_func($func);

        $this->assertTrue($result);
    }

    public function testUnsetGuard()
    {
        $result = false;
        $guard = new Guard(function () use (&$result) { $result = true; });
        unset($guard);

        $this->assertTrue($result);
    }
}
