<?php

declare(strict_types=1);

namespace Neoisrecursive;

class Emojify
{
    private $emojis;

    public function __construct()
    {
        $emojiFile = file_get_contents(__DIR__ . '/emojis.json');
        $this->emojis = json_decode($emojiFile, true)['emojis'];
    }

    public function IsShortname(string $possibleShortname): bool
    {
        foreach ($this->emojis as $emoji) {
            if ($emoji['shortname'] === $possibleShortname) {
                return true;
            }
        }
        return false;
    }

    public function ShortnameToEmoji(string $shortname): string
    {
        foreach ($this->emojis as $emoji) {
            if ($emoji['shortname'] === $shortname) {
                return $emoji['emoji'];
            }
        }
        return $shortname;
    }

    public function WholeString(string $text): string
    {
        $text = preg_replace_callback('/(?!::):(?! ).(([^ :])*.*?):?/', function ($e) {
            return $this->isShortname($e[0]) ? $this->shortnameToEmoji($e[0]) : $e[0];
        }, $text);

        return $text;
    }
}
