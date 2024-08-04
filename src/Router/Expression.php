<?php declare(strict_types=1);

namespace Framework\Http\Router;

use Framework\Http\Interface\Router as RouterInterface;

/**
 * ···························WWW.TERETA.DEV······························
 * ·······································································
 * : _____                        _                     _                :
 * :|_   _|   ___   _ __    ___  | |_    __ _        __| |   ___  __   __:
 * :  | |    / _ \ | '__|  / _ \ | __|  / _` |      / _` |  / _ \ \ \ / /:
 * :  | |   |  __/ | |    |  __/ | |_  | (_| |  _  | (_| | |  __/  \ V / :
 * :  |_|    \___| |_|     \___|  \__|  \__,_| (_)  \__,_|  \___|   \_/  :
 * ·······································································
 * ·······································································
 *
 * @interface Framework\Http\Router\Expression
 * @package Framework\Http\Router
 * @link https://tereta.dev
 * @since 2020-2024
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author Tereta Alexander <tereta.alexander@gmail.com>
 * @copyright 2020-2024 Tereta Alexander
 */
class Expression implements RouterInterface
{
    const ROUTER = "expression";

    const METHOD_ANY = 'ANY';
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';

    /**
     * @param string $action
     * @param array $params [method, expression]
     */
    public function __construct(private string $action, array $params) {
        $this->method = $params[0];
        $this->expression = $params[1];
    }

    /**
     * @param string $method
     * @param string $host
     * @param string $path
     * @return Action|null
     */
    public function run(string $method, string $host, string $path): ?Action {
        if ($this->method != static::METHOD_ANY && $method != $this->method) return null;
        if (!preg_match($this->expression, $path, $params)) return null;

        array_shift($params);
        return new Action($this->action, $params);
    }
}