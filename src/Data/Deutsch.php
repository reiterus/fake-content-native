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
 * Get Deutsch Data
 *
 * @package Reiterus\FakeContent\Data
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class Deutsch implements DataInterface
{
    /**
     * Get some data
     *
     * @return array
     */
    public function get(): array
    {
        return [
            'landwirtschaft',
            'Deutschland',
            'ingenieurskunst',
            'industrie',
            'land',
            'landwirtschaft',
            'immer',
            'auch',
            'ein',
            'starker',
            'geblieben',
            'dichter',
            'Hälfte',
            'Landesfläche',
            'genutzt',
            'erzeugen',
            'versorgen',
            'hochwertigen',
            'leisten',
            'zunehmenden',
            'gestalten',
            'pflegen',
        ];
    }
}
