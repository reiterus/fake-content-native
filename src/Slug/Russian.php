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
 * Create Russian Slug
 *
 * @package Reiterus\FakeContent\Slug
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class Russian implements SlugInterface
{
    /**
     * Transliteration from Russian to English
     *
     * @param string $title
     *
     * @return string
     */
    public function transliteration(string $title): string
    {
        $title = mb_strtolower(trim($title));

        $converter = [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
            'е' => 'e', 'ё' => 'e', 'ж' => 'zh',   'з' => 'z', 'и' => 'i',
            'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
            'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
            'ш' => 'sh', 'щ' => 'sch', 'ь' => '', 'ы' => 'y', 'ъ' => '',
            'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
        ];

        return strtr($title, $converter);
    }
}
