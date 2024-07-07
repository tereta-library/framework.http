<?php declare(strict_types=1);

namespace Framework\Http\Router;

/**
 * Framework\Http\Router\Expression
 *
 * Class Expression
 */
class Expression
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';

    /**
     * @var array|array[] $map
     */
    private array $map = [
        self::METHOD_GET    => [],
        self::METHOD_POST   => [],
        self::METHOD_PUT    => [],
        self::METHOD_DELETE => [],
    ];

    /**
     * @param string $method
     * @param string $path
     * @param string $action
     * @return $this
     */
    public function add(string $method, string $path, string $action): static {
        $this->map[$method][$path] = $action;

        return $this;
    }

    /**
     * @param string $method
     * @param string $host
     * @param string $path
     * @return string|null
     */
    public function run(string $method, string $host, string $path): ?string {
        !isset($this->map[$method]) && throw new Exception("The HTTP method {$method} not found");
        foreach ($this->map[$method] as $key => $item) {
            if (preg_match($key, $path, $matches)) {
                return $item;
            }
        }

        if (!isset($this->map[$method][$path])) {
            return null;
        }

        return $this->map[$method][$path];
    }
}