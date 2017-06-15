<?php
declare(strict_types=1);

namespace nesl247\Demo\Service;

class DefaultHelloWorld implements HelloWorldAdapter
{
    public function getMessage(): string
    {
        // This could be a constant
        return 'Hello World!';
    }

    public function method1(): string
    {
        return 'This is method 1';
    }

    public function method2(): string
    {
        return 'This is method 2' // Notice we are missing the semicolon
    }
}
