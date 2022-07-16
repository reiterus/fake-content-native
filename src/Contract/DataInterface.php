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
 * Get data according to language
 *
 * @package Reiterus\FakeContent\Contract
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
interface DataInterface
{
    /**
     * Get some data
     *
     * @return array
     */
    public function get(): array;
}
