<?php
declare(strict_types=1);

namespace nesl247\Demo\WrongDir;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

// This class name doesn't really describe what we want, so why don't we refactor it?
// The class is also in the wrong location, so we should move it to src/Action
// Let's call this WhoAmI
class NeedsRefactoring implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, DelegateInterface $delegate): ResponseInterface
    {
        return new JsonResponse(
            [
                'message' => 'I am Neo!',
            ]
        );
    }
}
