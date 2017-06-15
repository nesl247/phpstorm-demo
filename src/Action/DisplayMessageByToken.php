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
    private $helloWorldServiceWithATypo;

    public function __construct(HelloWorldService $helloWorldService)
    {
        $this->helloWorldServiceWithATypo = $helloWorldService;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate): ResponseInterface
    {
        $token = HelloWorldService::MESSAGE_EXAMPLE;

        // This will eventually need a token, but we don't have it now..
        // Let's retype this by hand so we can see PhpStorm's autocomplete at work!
        return new JsonResponse(['message' => $this->helloWorldServiceWithATypo->getAMessageByToken(),]);
    }
}
