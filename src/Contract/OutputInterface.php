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
 * Output the results in different formats
 *
 * @package Reiterus\FakeContent\Contract
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
interface OutputInterface
{
    /**
     * Array output
     *
     * @return array
     */
    public function toArray(): array;

    /**
     * JSON output
     *
     * @return string
     */
    public function toJson(): string;
}
