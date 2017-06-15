<?php

namespace nesl247\Demo\Service;

use PHPUnit\Framework\TestCase;

class HelloWorldServiceTest extends TestCase
{
    public function testItIsGettingAMessageByAToken()
    {
        $adapter = $this->prophesize(HelloWorldAdapter::class);
        $service = new HelloWorldService($adapter->reveal());
        $actual = $service->getAMessageByToken(HelloWorldService::MESSAGE_EXAMPLE);
        $this->assertEquals(HelloWorldService::MESSAGES[HelloWorldService::MESSAGE_EXAMPLE], $actual);
    }
    public function testItIsGettingAHelloWorldMessage()
    {
        $adapter = $this->prophesize(HelloWorldAdapter::class);
        $adapter->getMessage()->willReturn('Hello World!');
        $service = new HelloWorldService($adapter->reveal());
        $this->assertEquals('Hello World!', $service->getMessage());
    }
}
