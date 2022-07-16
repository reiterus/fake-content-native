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

use Reiterus\FakeContent\Contract\HelperInterface;

/**
 * Content Processing Helper
 *
 * @package Reiterus\FakeContent
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class Helper implements HelperInterface
{
    private int $phrases;
    private int $minWords;
    private int $maxWords;

    /**
     * @param int $phrases
     * @param int $minWords
     * @param int $maxWords
     *
     * @return void
     */
    public function __construct(
        int $phrases = 7,
        int $minWords = 5,
        int $maxWords = 10
    ) {
        $this->phrases = $phrases;
        $this->minWords = $minWords;
        $this->maxWords = $maxWords;
    }

    /**
     * First letter capital with UTF
     *
     * @param string $text
     *
     * @return string
     */
    public function utfUcFirst(string $text): string
    {
        $first = mb_substr($text, 0, 1);

        return mb_strtoupper($first) . mb_substr($text, 1);
    }

    /**
     * Clear a string from any symbols
     *
     * @param string $text
     *
     * @return string
     */
    public function noSymbols(string $text): string
    {
        $search = [
            '.', ',', ';', ':', '"', '`', "'",
            '~', '<', '>',  '/',  '\\',
            '?', '!', '{', '}', '[', ']',
            '@', '#', '$', '%', '^', '&',
            '"', '(', ')', '_', '-', '+',
            '=', '*', '№',  '«', '»', '§',
            '≤', '≥', '≠', '∞', '∑', '∅',
        ];

        return str_replace($search, [''], $text);
    }

    /**
     * @return int
     */
    public function getPhrases(): int
    {
        return $this->phrases;
    }

    /**
     * @param int $phrases
     */
    public function setPhrases(int $phrases): void
    {
        $this->phrases = $phrases;
    }

    /**
     * @return int
     */
    public function getMinWords(): int
    {
        return $this->minWords;
    }

    /**
     * @param int $minWords
     */
    public function setMinWords(int $minWords): void
    {
        $this->minWords = $minWords;
    }

    /**
     * @return int
     */
    public function getMaxWords(): int
    {
        return $this->maxWords;
    }

    /**
     * @param int $maxWords
     */
    public function setMaxWords(int $maxWords): void
    {
        $this->maxWords = $maxWords;
    }
}