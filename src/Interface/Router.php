<?php declare(strict_types=1);

namespace Framework\Http\Interface;

/**
 * Framework\Http\Interface\Router
 */
interface Router
{
    /**
     * @param string $method
     * @param string $host
     * @param string $path
     * @return mixed
     */
    public function run(string $method, string $host, string $path);
}