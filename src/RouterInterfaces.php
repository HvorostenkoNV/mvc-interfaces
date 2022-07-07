<?php

declare(strict_types=1);

namespace HNV\MVC\Interfaces;

use HNV\MVC\Interfaces\Exception\ControllerNotFoundExceptionInterfaces;
use Psr\Http\Message\RequestInterface;

/**
 * Router common interface.
 */
interface RouterInterfaces
{
    /**
     * Handle HTTP request and provide controller.
     *
     * @throws ControllerNotFoundExceptionInterfaces controller was not found
     */
    public function handleRequest(RequestInterface $request): ControllerInterfaces;
}
