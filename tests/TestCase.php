<?php

namespace BestServedCold\HTMLBuilder;

use BestServedCold\PhalueObjects\Utility\Reflection\ReflectionClass;
use BestServedCold\PhalueObjects\Utility\Reflection\ReflectionObject;
use Mockery;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    public function mock($class)
    {
        return Mockery::mock($class);
    }

    public function reflect($object)
    {
        return is_string($object) ? new ReflectionClass($object) : new ReflectionObject($object);
    }
}
