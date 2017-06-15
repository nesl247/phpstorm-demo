<?php
declare(strict_types=1);

namespace nesl247\Demo\Service;

class DefaultHelloWorld implements HelloWorldAdapter
{
    const HELLO_WORLD = 'Hello World!';

    public function getMessage(): string
    {
        return self::HELLO_WORLD;
    }

    public function method1(): string
    {
        return 'This is method 1';
    }

    public function method2(): string
    {
        return 'This is method 2';
    }
}
