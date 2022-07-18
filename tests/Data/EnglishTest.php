<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\FakeContent\Tests\Data;

use Reiterus\FakeContent\Data\English;
use PHPUnit\Framework\TestCase;

/**
 * @covers ::English
 * Class EnglishTest
 *
 * @package Reiterus\FakeContent\Tests\Data
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class EnglishTest extends TestCase
{
    private English $object;

    /**
     * @covers ::get
     * @return void
     */
    public function testGet(): void
    {
        $actual = $this->object->get();
        $this->assertIsArray($actual);
    }

    /**
     * @codeCoverageIgnore
     * @return void
     */
    protected function setUp(): void
    {
        $this->object = new English();
    }
}
