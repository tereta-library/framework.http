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
 * @router HttpRouterItem
 * @interface Framework\Http\Router\Item
 * @package Framework\Http\Router
 * @link https://tereta.dev
 * @since 2020-2024
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author Tereta Alexander <tereta.alexander@gmail.com>
 * @copyright 2020-2024 Tereta Alexander
 */
class Item implements RouterInterface
{
    const ROUTER = "item";

    /**
     * @param string $action
     */
    public function __construct(private string $action) {
    }

    /**
     * @param string $method
     * @param string $host
     * @param string $path
     * @return Action|null
     */
    public function run(string $method, string $host, string $path): ?Action
    {
        return new Action($this->action);
    }
}