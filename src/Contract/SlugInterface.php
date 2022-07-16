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
 * Create slug according to language
 *
 * @package Reiterus\FakeContent\Contract
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
interface SlugInterface
{
    /**
     * Create slug
     *
     * @param string $title
     *
     * @return string
     */
    public function transliteration(string $title): string;
}
