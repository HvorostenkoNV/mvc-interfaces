<?php
declare(strict_types=1);

namespace HNV\MVC\Interfaces;

use Psr\Http\Message\RequestInterface;
use HNV\MVC\Interfaces\Exception\ViewNotFoundExceptionInterfaces;
/**
 * Controller common interface.
 *
 * @package HNV\MVC\Interfaces
 */
interface ControllerInterfaces
{
    /**
     * Handle HTTP request and provide view.
     *
     * @param   RequestInterface    $request        HTTP request.
     * @param   array               $parameters     Additional parameters.
     *
     * @return  ViewInterfaces                      View.
     * @throws  ViewNotFoundExceptionInterfaces     View was not found.
     */
    public function handleRequest(
        RequestInterface    $request,
        array               $parameters = []
    ): ViewInterfaces;
}