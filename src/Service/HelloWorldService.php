<?php
declare(strict_types=1);

namespace nesl247\Demo\Service;

// We're missing a test, why don't we create one?
class HelloWorldService
{
    const MESSAGE_EXAMPLE = 'MESSAGE_EXAMPLE';

    const MESSAGES = [self::MESSAGE_EXAMPLE => 'Here\'s an example message as a token'];

    /**
     * @var HelloWorldAdapter
     */
    private $adapter;

    // Where's our constructor?

    public function getMessage(): string
    {
        return $this->adapter->getMessage();
    }

    // These methods are out of order, how about we fix that?
    public function method2(): string
    {
        // Notice that method2 is highlighted? It isn't in the interface.
        // Why don't we add it from the example adapter.
        return $this->adapter->method2();
    }

    public function method1(): string
    {
        return $this->adapter->method1();
    }

    // This is missing the parameter, let's add it!
    // We can do it either via intentions, or via refactoring!
    public function getAMessageByToken(): string
    {
        return self::MESSAGES[$token];
    }
}
