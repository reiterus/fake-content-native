<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\FakeContent\Data;

use Reiterus\FakeContent\Contract\DataInterface;

/**
 * Get Russian Data
 *
 * @package Reiterus\FakeContent\Data
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class Russian implements DataInterface
{
    /**
     * Get some data
     *
     * @return array
     */
    public function get(): array
    {
        return [
            'цифровое',
            'сельское',
            'хозяйство',
            'использование',
            'новых',
            'передовых',
            'технологий',
            'интегрированных',
            'единую',
            'систему',
            'чтобы',
            'позволить',
            'фермерам',
            'другим',
            'заинтересованным',
            'сторонам',
            'цепочке',
            'создания',
            'стоимости',
            'улучшить',
            'производство',
            'продовольствия',
        ];
    }
}
