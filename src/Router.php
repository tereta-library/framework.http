<?php declare(strict_types=1);

namespace Framework\Http;

use Framework\Http\Router\General as StaticRouter;

/**
 * Library\Http\Router
 */
class Router {
    /**
     * @var array
     */
    private array $routers = [];

    /**
     * @param array $routers
     * @param $errorRouter
     */
    public function __construct(array $routers = []) {
        $this->routers = $routers;
    }

    /**
     * @param string $method
     * @param string $host
     * @param string $path
     * @return string|null
     */
    public function run(string $method, string $host, string $path): ?string
    {
        foreach ($this->routers as $router) {
            $return = $router->run($method, $host, $path);
            if ($return !== null) {
                return $return;
            }
        }

        return null;
    }
}