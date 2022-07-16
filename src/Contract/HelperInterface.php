<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\FakeContent\Contract;

/**
 * Content Processing Helper
 *
 * @package Reiterus\FakeContent\Contract
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
interface HelperInterface
{
    /**
     * First letter capital with UTF
     *
     * @param string $text
     *
     * @return string
     */
    public function utfUcFirst(string $text): string;

    /**
     * Clear a string from any symbols
     *
     * @param string $text
     *
     * @return string
     */
    public function noSymbols(string $text): string;
}
