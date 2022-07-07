<?php
declare(strict_types=1);

namespace HNV\MVC\Interfaces;

use Psr\Http\Message\RequestInterface;
use HNV\MVC\Interfaces\Exception\ControllerNotFoundExceptionInterfaces;
/**
 * Router common interface.
 *
 * @package HNV\MVC\Interfaces
 */
interface RouterInterfaces
{
    /**
     * Handle HTTP request and provide controller.
     *
     * @param   RequestInterface $request               HTTP request.
     *
     * @return  ControllerInterfaces                    Controller.
     * @throws  ControllerNotFoundExceptionInterfaces   Controller was not found.
     */
    public function handleRequest(RequestInterface $request): ControllerInterfaces;
}