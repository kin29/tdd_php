<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Dollar;

class MoneyTest extends TestCase
{
    public function test_multiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}
