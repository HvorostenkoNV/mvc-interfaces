<?php
declare(strict_types=1);

namespace HNV\MVC\Interfaces;

use Psr\Http\Message\ResponseInterface;
/**
 * View common interface.
 *
 * @package HNV\MVC\Interfaces
 */
interface ViewInterfaces
{
    /**
     * Set view full data set.
     *
     * @param   array $data                 View data, where
     *                                      keys are string and values are mixed.
     *
     * @return  static                      Self.
     */
    public function setData(array $data): static;
    /**
     * Get view full data set.
     *
     * @return  array                       Full data set.
     */
    public function getData(): array;
    /**
     * Clear view all data.
     *
     * @return  static                      Self.
     */
    public function clearData(): static;
    /**
     * Add view data by key.
     *
     * @param   string  $key                Data key.
     * @param   mixed   $value              Data value.
     *
     * @return  static                      Self.
     */
    public function addData(string $key, mixed $value): static;
    /**
     * Get view data value by key.
     *
     * @param   string $key                Data key.
     *
     * @return  mixed                      Data value.
     */
    public function getDataByKey(string $key): mixed;
    /**
     * Check data existence by key.
     *
     * @param   string $key                 Data key.
     *
     * @return  bool                        Data existence.
     */
    public function hasData(string $key): bool;
    /**
     * Remove view data by key.
     *
     * @param   string $key                 Data key.
     *
     * @return  static                      Self.
     */
    public function removeData(string $key): static;
    /**
     * Render view to HTTP response.
     *
     * @return ResponseInterface            HTTP response.
     */
    public function render(): ResponseInterface;
}