<?php
declare(strict_types=1);

namespace nesl247\Demo\Service;

class HelloWorldService
{
    const MESSAGE_EXAMPLE = 'MESSAGE_EXAMPLE';
    const MESSAGES = [self::MESSAGE_EXAMPLE => 'Here\'s an example message as a token'];

    /**
     * @var HelloWorldAdapter
     */
    private $adapter;

    public function __construct(HelloWorldAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getMessage(): string
    {
        return $this->adapter->getMessage();
    }

    public function method1(): string
    {
        return $this->adapter->method1();
    }

    public function method2(): string
    {
        return $this->adapter->method2();
    }

    public function getAMessageByToken(string $token): string
    {
        return self::MESSAGES[$token];
    }
}
