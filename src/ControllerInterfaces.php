<?php

declare(strict_types=1);

namespace HNV\MVC\Interfaces;

use HNV\MVC\Interfaces\Exception\ViewNotFoundExceptionInterfaces;
use Psr\Http\Message\RequestInterface;

/**
 * Controller common interface.
 */
interface ControllerInterfaces
{
    /**
     * Handle HTTP request and provide view.
     *
     * Additional parameters usually parsed from URI according to it`s template.
     *
     * @throws ViewNotFoundExceptionInterfaces view was not found
     */
    public function handleRequest(
        RequestInterface $request,
        array $parameters = []
    ): ViewInterfaces;
}
