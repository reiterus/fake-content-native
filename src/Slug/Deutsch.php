<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\FakeContent\Slug;

use Reiterus\FakeContent\Contract\SlugInterface;

/**
 * Create Deutsch Slug
 *
 * @package Reiterus\FakeContent\Slug
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class Deutsch implements SlugInterface
{
    /**
     * Transliteration from Deutsch to English
     *
     * @param string $title
     *
     * @return string
     */
    public function transliteration(string $title): string
    {
        //TODO Implement transliteration
        return mb_strtolower(trim($title));
    }
}
