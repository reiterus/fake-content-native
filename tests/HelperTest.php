<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\FakeContent\Tests;

use Reiterus\FakeContent\Helper;
use PHPUnit\Framework\TestCase;

/**
 * @covers ::Helper
 * Class HelperTest
 *
 * @package Reiterus\FakeContent\Tests
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class HelperTest extends TestCase
{
    private Helper $object;

    /**
     * @covers ::utfUcFirst
     * @return void
     */
    public function testUtfUcFirst(): void
    {
        $title = "some title";
        $actual = $this->object->utfUcFirst($title);
        $this->assertEquals('Some title', $actual);
    }

    /**
     * @cover ::noSymbols
     * @dataProvider dataProvider
     * @param array $symbols
     * @return void
     */
    public function testNoSymbols(array $symbols): void
    {
        $text = 'Some Title! Long text here...';
        $text .= implode('', $symbols);
        $actual = $this->object->noSymbols($text);
        $this->assertEquals('Some Title Long text here', $actual);
    }

    /**
     * @codeCoverageIgnore
     * @return array
     */
    public function dataProvider(): array
    {
        return [
            [['.', ',', ';', ':', '"', '`', "'",]],
            [['~', '<', '>',  '/',  '\\',]],
            [['?', '!', '{', '}', '[', ']',]],
            [['@', '#', '$', '%', '^', '&',]],
            [['"', '(', ')', '_', '-', '+',]],
            [['=', '*', '№',  '«', '»', '§',]],
            [['≤', '≥', '≠', '∞', '∑', '∅',]],
        ];
    }

    /**
     * @codeCoverageIgnore
     * @return void
     */
    protected function setUp(): void
    {
        $this->object = new Helper();
    }
}
