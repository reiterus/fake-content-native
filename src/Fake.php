<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\FakeContent;

use Reiterus\FakeContent\Contract\DataInterface;
use Reiterus\FakeContent\Contract\FakeInterface;
use Reiterus\FakeContent\Contract\HelperInterface;
use Reiterus\FakeContent\Contract\SlugInterface;
use Reiterus\FakeContent\Contract\OutputInterface;

/**
 * Fake Content Generate
 *
 * @package Reiterus\FakeContent
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class Fake implements FakeInterface, OutputInterface
{
    protected SlugInterface $slug;
    protected HelperInterface $helper;

    private array $data;

    /**
     * @codeCoverageIgnore
     * @param DataInterface $dataContract
     * @param SlugInterface $slug
     * @param HelperInterface $helper
     *
     * @return void
     */
    public function __construct(
        DataInterface $dataContract,
        SlugInterface $slug,
        HelperInterface $helper
    ) {
        $this->slug = $slug;
        $this->helper = $helper;

        $this->data = array_map(
            [$this->helper, 'noSymbols'],
            $dataContract->get()
        );

        shuffle($this->data);
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle(): string
    {
        $str = array_slice($this->data, 0, 4);

        return $this->helper->utfUcFirst(implode(' ', $str));
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription(): string
    {
        $slice = substr($this->getContent(), 0, 128);
        $exp = explode(' ', $slice);
        $result = implode(' ', array_slice($exp, 0,-1));

        return $this->helper->utfUcFirst(trim($result)) . '...';
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords(): string
    {
        $str = array_slice($this->data, 0, 7);

        return implode(', ', $str);
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent(): string
    {
        $result = [];
        $words = $this->data;

        for ($i = 0; $i < $this->helper->getPhrases(); $i++) {
            shuffle($words);
            $rand = rand($this->helper->getMinWords(), $this->helper->getMaxWords());
            $slice = array_slice($words, 0, $rand);
            $result[] = $this->helper->utfUcFirst(implode(' ', $slice)) . '.';
        }

        return implode(' ', $result);
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug(): string
    {
        $slug = $this->slug->transliteration($this->getTitle());

        return str_replace([' ', '_'], '-', $slug);
    }

    /**
     * Get publication time
     *
     * @return string
     */
    public function getPublished(): string
    {
        return date('Y-m-d H:i:s');
    }

    /**
     * Get fake as array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            self::TITLE => $this->getTitle(),
            self::DESCRIPTION => $this->getDescription(),
            self::KEYWORDS => $this->getKeywords(),
            self::CONTENT => $this->getContent(),
            self::SLUG => $this->getSlug(),
            self::PUBLISHED => $this->getPublished(),
        ];
    }

    /**
     * Get fake as json with JSON_UNESCAPED_UNICODE
     *
     * @return string
     */
    public function toJson(): string
    {
        return \json_encode($this->toArray(), 256);
    }
}
