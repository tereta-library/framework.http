<?php declare(strict_types=1);

namespace Framework\Http\Controller;

use Framework\Http\Interface\Controller;

/**
 * class Framework\Http\Controller\Redirect
 */
class Redirect implements Controller
{
    /**
     * @param string $url
     * @return string
     */
    public function redirect(string $url): string
    {
        header('Location: ' . $url);
        return '';
    }
}
