<?php
declare(strict_types=1);

namespace nesl247\Demo\Service;

use PHPUnit\Framework\TestCase;

class DefaultHelloWorldTest extends TestCase
{
    public function testItIsGettingTheMessage()
    {
        $adapter = new DefaultHelloWorld();

        $this->assertEquals('Hello World!', $adapter->getMessage());
    }
}
