<?php

declare(strict_types=1);

namespace HNV\MVC\Interfaces;

use Psr\Http\Message\ResponseInterface;

/**
 * View common interface.
 */
interface ViewInterfaces
{
    /**
     * Get view full data set.
     *
     * @return array full data set
     */
    public function getData(): array;

    /**
     * Get view data value by key.
     *
     * @param string $key data key
     *
     * @return mixed data value
     */
    public function getDataByKey(string $key): mixed;

    /**
     * Check data existence by key.
     *
     * @param string $key data key
     *
     * @return bool data existence
     */
    public function hasData(string $key): bool;

    /**
     * Render view to HTTP response.
     *
     * @return ResponseInterface HTTP response
     */
    public function render(): ResponseInterface;
}
