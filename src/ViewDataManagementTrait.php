<?php

declare(strict_types=1);

namespace HNV\MVC\Interfaces;

/**
 * View data management trait.
 *
 * Provides functionality for data manipulating.
 */
trait ViewDataManagementTrait
{
    private array $data = [];

    /**
     * Get view full data set.
     *
     * @return array full data set
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Get view data value by key.
     *
     * @param string $key data key
     *
     * @return mixed data value
     */
    public function getDataByKey(string $key): mixed
    {
        return $this->data[$key] ?? null;
    }

    /**
     * Check data existence by key.
     *
     * @param string $key data key
     *
     * @return bool data existence
     */
    public function hasData(string $key): bool
    {
        return isset($this->data[$key]);
    }
}
