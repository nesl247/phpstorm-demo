<?php
declare(strict_types=1);

namespace nesl247\Demo\Service;

interface HelloWorldAdapter
{
    public function getMessage(): string;

    public function method1(): string;
}
