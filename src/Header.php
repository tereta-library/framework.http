<?php declare(strict_types=1);

namespace Framework\Http;

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
 * @class Framework\Http\Header
 * @package Framework\Http
 * @link https://tereta.dev
 * @since 2020-2024
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author Tereta Alexander <tereta.alexander@gmail.com>
 * @copyright 2020-2024 Tereta Alexander
 */
class Header
{
    private static ?array $headers = null;

    /**
     * @param string $key
     * @return string|null
     */
    public static function get(string $key): ?string
    {
        if (static::$headers === null) {
            static::$headers = [];
            foreach (getallheaders() as $headerKey => $value) {
                static::$headers[strtolower($headerKey)] = $value;
            }
        }

        $key = strtolower($key);
        if (isset(static::$headers[$key])) {
            return static::$headers[$key];
        }

        return null;
    }
}