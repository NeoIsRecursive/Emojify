<?php

declare(strict_types=1);

namespace Neoisrecursive\Emojify;

class Emojify
{
    private $emojis;

    public function __construct()
    {
        $emojiFile = file_get_contents(__DIR__ . '/emojis.json');
        $this->emojis = json_decode($emojiFile, true)['emojis'];
    }

    public function isShortname(string $possibleEmoji): bool
    {
        foreach ($this->emojis as $emoji) {
            if ($emoji['shortname'] === $possibleEmoji) {
                return true;
            }
        }
        return false;
    }

    public function shortNameToEmoji(string $shortname): string
    {
        foreach ($this->emojis as $emoji) {
            if ($emoji['shortname'] === $shortname) {
                return $emoji['emoji'];
            }
        }
        return $shortname;
    }

    public function emojifyString(string $text): string
    {
        $text = preg_replace_callback('/(?!::):(?! ).(([^ :])*.*?):?/', function ($e) {
            return $this->isShortname($e[0]) ? $this->shortNameToEmoji($e[0]) : $e[0];
        }, $text);

        return $text;
    }
}
