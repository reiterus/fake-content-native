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
 * Get English Data
 *
 * @package Reiterus\FakeContent\Data
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class English implements DataInterface
{
    /**
     * Get some data
     *
     * @return array
     */
    public function get(): array
    {
        return [
            'agriculture',
            'England',
            'today',
            'intensive',
            'highly',
            'mechanised',
            'efficient',
            'European',
            'standards',
            'producing',
            'about',
            'contributes',
            'around',
            'two',
            'thirds',
            'production',
            'devoted',
            'livestock',
            'arable',
            'food',
            'needs',
            'labour',
            'force',
        ];
    }
}
