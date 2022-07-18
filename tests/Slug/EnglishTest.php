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

use Reiterus\FakeContent\Slug\English;
use PHPUnit\Framework\TestCase;

/**
 * @covers ::English
 * Class EnglishTest
 *
 * @package Reiterus\FakeContent\Tests\Slug
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class EnglishTest extends TestCase
{
    private English $object;

    /**
     * @covers ::transliteration
     * @return void
     */
    public function testTransliteration(): void
    {
        $title = "Some Title";
        $actual = $this->object->transliteration($title);
        $this->assertEquals('some title', $actual);
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
