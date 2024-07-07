<?php declare(strict_types=1);

namespace Framework\Http\Router;

use Framework\Http\Interface\Router as RouterInterface;

/**
 * Library\Http\Router\Item
 */
class Item implements RouterInterface
{
    /**
     * @param string $action
     */
    public function __construct(private string $action) {
    }

    /**
     * @param string $method
     * @param string $host
     * @param string $path
     * @return string
     */
    public function run(string $method, string $host, string $path): string
    {
        return $this->action;
    }
}