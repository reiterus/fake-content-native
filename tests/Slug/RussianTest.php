<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\FakeContent\Tests\Slug;

use Reiterus\FakeContent\Slug\Russian;
use PHPUnit\Framework\TestCase;

/**
 * @covers ::Russian
 * Class RussianTest
 *
 * @package Reiterus\FakeContent\Tests\Slug
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class RussianTest extends TestCase
{
    private Russian $object;

    /**
     * @covers ::transliteration
     * @return void
     */
    public function testTransliteration(): void
    {
        $title = "Название статьи";
        $actual = $this->object->transliteration($title);
        $this->assertEquals('nazvanie stati', $actual);
    }

    /**
     * @codeCoverageIgnore
     * @return void
     */
    protected function setUp(): void
    {
        $this->object = new Russian();
    }
}
