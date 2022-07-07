<?php

declare(strict_types=1);

namespace HNV\MVC\Interfaces;

use Psr\Http\Message\RequestInterface;

interface ControllerInterfaces
{
    public function handleRequest(
        RequestInterface $request,
        array $parameters = []
    ): ViewInterfaces;
}
