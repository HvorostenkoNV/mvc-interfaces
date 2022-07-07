<?php

declare(strict_types=1);

namespace HNV\MVC\Interfaces;

use Psr\Http\Message\ResponseInterface;

interface ViewInterfaces
{
    public function render(): ResponseInterface;
}
