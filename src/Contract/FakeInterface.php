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
 * Generate fake content according to language
 *
 * @package Reiterus\FakeContent\Contract
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
interface FakeInterface
{
    const TITLE = 'title';
    const DESCRIPTION = 'description';
    const KEYWORDS = 'keywords';
    const CONTENT = 'content';
    const SLUG = 'slug';
    const PUBLISHED = 'published';

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords(): string;

    /**
     * Get content
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug(): string;

    /**
     * Get publication time
     *
     * @return string
     */
    public function getPublished(): string;

    /**
     * Get fake as array
     *
     * @return array
     */
    public function toArray(): array;
}
