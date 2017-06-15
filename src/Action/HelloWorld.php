<?php
declare(strict_types=1);

namespace nesl247\Demo\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

class HelloWorld implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, DelegateInterface $delegate): ResponseInterface
    {
        return new JsonResponse(
            [
                'message' => 'We need to be using the hello world service here!',
            ]
        );
    }
}
