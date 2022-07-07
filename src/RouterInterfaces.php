<?php

declare(strict_types=1);

namespace HNV\MVC\Interfaces;

use HNV\MVC\Interfaces\Exception\ControllerNotFoundExceptionInterfaces;
use Psr\Http\Message\RequestInterface;

interface RouterInterfaces
{
    /**
     * @throws ControllerNotFoundExceptionInterfaces
     */
    public function handleRequest(RequestInterface $request): ControllerInterfaces;
}
