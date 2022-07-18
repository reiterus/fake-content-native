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

use Reiterus\FakeContent\Contract\DataInterface;
use Reiterus\FakeContent\Contract\SlugInterface;
use Reiterus\FakeContent\Fake;
use PHPUnit\Framework\TestCase;
use Reiterus\FakeContent\Helper;

/**
 * @covers ::Fake
 * Class FakeTest
 *
 * @package Reiterus\FakeContent\Tests
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class FakeTest extends TestCase
{
    private Fake $object;

    /**
     * @covers ::getSlug
     * @return void
     */
    public function testGetSlug(): void
    {
        $actual = $this->object->getSlug();
        $this->assertIsString($actual);
    }

    /**
     * @covers ::getPublished
     * @return void
     */
    public function testGetPublished(): void
    {
        $actual = $this->object->getPublished();
        $this->assertIsString($actual);
    }

    /**
     * @covers ::toJson
     * @return void
     */
    public function testToJson(): void
    {
        $actual = $this->object->toJson();
        $this->assertIsString($actual);
    }

    /**
     * @covers ::getContent
     * @return void
     */
    public function testGetContent(): void
    {
        $actual = $this->object->getContent();
        $this->assertIsString($actual);
    }

    /**
     * @covers ::getTitle
     * @return void
     */
    public function testGetTitle(): void
    {
        $actual = $this->object->getTitle();
        $this->assertIsString($actual);
    }

    /**
     * @covers ::getKeywords
     * @return void
     */
    public function testGetKeywords(): void
    {
        $actual = $this->object->getKeywords();
        $this->assertIsString($actual);
    }

    /**
     * @covers ::getDescription
     * @return void
     */
    public function testGetDescription(): void
    {
        $actual = $this->object->getDescription();
        $this->assertIsString($actual);
    }

    /**
     * @covers ::toArray
     * @return void
     */
    public function testToArray(): void
    {
        $actual = $this->object->toArray();
        $this->assertIsArray($actual);
    }

    /**
     * @codeCoverageIgnore
     * @return void
     */
    protected function setUp(): void
    {
        $data = $this->createMock(DataInterface::class);
        $slug = $this->createMock(SlugInterface::class);
        $helper = new Helper();

        $this->object = new Fake($data, $slug, $helper);
    }
}
