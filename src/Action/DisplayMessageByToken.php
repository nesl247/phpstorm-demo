<?php
declare(strict_types=1);

namespace nesl247\Demo\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use nesl247\Demo\Service\HelloWorldService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

class DisplayMessageByToken implements MiddlewareInterface
{
    /**
     * @var HelloWorldService
     */
    private $helloWorldService;

    public function __construct(HelloWorldService $helloWorldService)
    {
        $this->helloWorldService = $helloWorldService;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate): ResponseInterface
    {
        $token = HelloWorldService::MESSAGE_EXAMPLE;

        return new JsonResponse(['message' => $this->helloWorldService->getAMessageByToken($token),]);
    }
}
