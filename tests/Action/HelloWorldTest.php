<?php
declare(strict_types=1);

namespace nesl247\Demo\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use nesl247\Demo\Service\DefaultHelloWorld;
use nesl247\Demo\Service\HelloWorldService;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\EmptyResponse;
use Zend\Diactoros\ServerRequest;

class HelloWorldTest extends TestCase
{
    public function testIsReturningHelloWorld()
    {
        $adapter = new DefaultHelloWorld();
        $helloWorldService = new HelloWorldService($adapter);
        $action = new HelloWorld($helloWorldService);

        $response = $action->process(new ServerRequest(), new class implements DelegateInterface {
            public function process(ServerRequestInterface $request): ResponseInterface
            {
                return new EmptyResponse();
            }
        });

        $this->assertJsonStringEqualsJsonString('{"message": "Hello World!"}', (string) $response->getBody());
    }
}
