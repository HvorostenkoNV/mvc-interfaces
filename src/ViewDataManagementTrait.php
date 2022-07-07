<?php
declare(strict_types=1);

namespace HNV\MVC\Interfaces;

use InvalidArgumentException;

use function strlen;
/**
 * View data management trait.
 *
 * Provides functionality for data manipulating.
 *
 * @package HNV\MVC\Interfaces
 */
trait ViewDataManagementTrait
{
    private array $data = [];
    /**
     * Set view full data set.
     *
     * @param   array $data                 View data, where
     *                                      keys are string and values are mixed.
     *
     * @return  static                      Self.
     */
    public function setData(array $data): static
    {
        $this->data = $data;

        return $this;
    }
    /**
     * Get view full data set.
     *
     * @return  array                       Full data set.
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * Clear view all data.
     *
     * @return  static                      Self.
     */
    public function clearData(): static
    {
        return $this->setData([]);
    }
    /**
     * Add view data by key.
     *
     * @param   string  $key                Data key.
     * @param   mixed   $value              Data value.
     *
     * @return  static                      Self.
     */
    public function addData(string $key, mixed $value): static
    {
        if (strlen($key) === 0) {
            throw new InvalidArgumentException('key is empty');
        }

        $this->data[$key] = $value;

        return $this;
    }
    /**
     * Get view data value by key.
     *
     * @param   string $key                Data key.
     *
     * @return  mixed                      Data value.
     */
    public function getDataByKey(string $key): mixed
    {
        return $this->data[$key] ?? null;
    }
    /**
     * Check data existence by key.
     *
     * @param   string $key                 Data key.
     *
     * @return  bool                        Data existence.
     */
    public function hasData(string $key): bool
    {
        return isset($this->data[$key]);
    }
    /**
     * Remove view data by key.
     *
     * @param   string $key                 Data key.
     *
     * @return  static                      Self.
     */
    public function removeData(string $key): static
    {
        unset($this->data[$key]);

        return $this;
    }
}